<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "group_ads_fields".
 *
 * @property integer $id
 * @property string $name
 *
 * @property AdsFields[] $adsFields
 * @property Category[] $categories
 */
class GroupAdsFields extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group_ads_fields';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFields()
    {
        return $this->hasMany(AdsFields::className(), ['group_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['group_id' => 'id']);
    }
}
