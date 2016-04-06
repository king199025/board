<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ads_fields_default_value".
 *
 * @property integer $id
 * @property string $value
 * @property integer $ads_field_type_id
 *
 * @property AdsFieldsType $adsFieldType
 */
class AdsFieldsDefaultValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_fields_default_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value', 'ads_field_type_id'], 'required'],
            [['ads_field_type_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['ads_field_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdsFieldsType::className(), 'targetAttribute' => ['ads_field_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'value' => 'Значение',
            'ads_field_type_id' => 'Тип поля',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFieldType()
    {
        return $this->hasOne(AdsFieldsType::className(), ['id' => 'ads_field_type_id']);
    }
}
