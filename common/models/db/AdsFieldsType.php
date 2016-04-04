<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ads_fields_type".
 *
 * @property integer $id
 * @property string $type
 *
 * @property AdsFields[] $adsFields
 * @property AdsFieldsDefaultValue[] $adsFieldsDefaultValues
 */
class AdsFieldsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_fields_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFields()
    {
        return $this->hasMany(AdsFields::className(), ['type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFieldsDefaultValues()
    {
        return $this->hasMany(AdsFieldsDefaultValue::className(), ['ads_field_type_id' => 'id']);
    }
}
