<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ads_fields".
 *
 * @property integer $id
 * @property integer $group_id
 * @property integer $type_id
 * @property string $label
 * @property string $template
 *
 * @property AdsFieldsType $type
 * @property GroupAdsFields $group
 * @property AdsFieldsValue[] $adsFieldsValues
 */
class AdsFields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_id', 'type_id', 'label'], 'required'],
            [['group_id', 'type_id'], 'integer'],
            [['template'], 'string'],
            [['label'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdsFieldsType::className(), 'targetAttribute' => ['type_id' => 'id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => GroupAdsFields::className(), 'targetAttribute' => ['group_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Группа полей',
            'type_id' => 'Тип поля',
            'label' => 'Название',
            'template' => 'Шаблон',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(AdsFieldsType::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(GroupAdsFields::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFieldsValues()
    {
        return $this->hasMany(AdsFieldsValue::className(), ['ads_fields_id' => 'id']);
    }
}
