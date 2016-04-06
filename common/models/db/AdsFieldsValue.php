<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ads_fields_value".
 *
 * @property integer $id
 * @property integer $ads_id
 * @property integer $ads_fields_id
 * @property string $value
 *
 * @property AdsFields $adsFields
 * @property Ads $ads
 */
class AdsFieldsValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads_fields_value';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ads_id', 'ads_fields_id', 'value'], 'required'],
            [['ads_id', 'ads_fields_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['ads_fields_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdsFields::className(), 'targetAttribute' => ['ads_fields_id' => 'id']],
            [['ads_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ads::className(), 'targetAttribute' => ['ads_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ads_id' => 'Ads ID',
            'ads_fields_id' => 'Ads Fields ID',
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFields()
    {
        return $this->hasOne(AdsFields::className(), ['id' => 'ads_fields_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAds()
    {
        return $this->hasOne(Ads::className(), ['id' => 'ads_id']);
    }
}
