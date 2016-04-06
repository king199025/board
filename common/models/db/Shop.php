<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $description
 * @property string $logo
 * @property string $site
 * @property integer $dt_add
 * @property integer $dt_update
 * @property integer $status
 * @property integer $vip
 * @property integer $top
 * @property integer $views
 * @property string $header_img
 * @property string $footer_img
 * @property string $bg_color
 *
 * @property AdsShop[] $adsShops
 * @property User $user
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'description', 'dt_add', 'dt_update', 'status'], 'required'],
            [['user_id', 'dt_add', 'dt_update', 'status', 'vip', 'top', 'views'], 'integer'],
            [['description'], 'string'],
            [['title', 'logo', 'site', 'header_img', 'footer_img', 'bg_color'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'description' => 'Description',
            'logo' => 'Logo',
            'site' => 'Site',
            'dt_add' => 'Dt Add',
            'dt_update' => 'Dt Update',
            'status' => 'Status',
            'vip' => 'Vip',
            'top' => 'Top',
            'views' => 'Views',
            'header_img' => 'Header Img',
            'footer_img' => 'Footer Img',
            'bg_color' => 'Bg Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsShops()
    {
        return $this->hasMany(AdsShop::className(), ['shop_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
