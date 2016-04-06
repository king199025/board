<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $category_id
 * @property integer $dt_add
 * @property integer $dt_update
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property integer $status
 * @property integer $views
 * @property integer $vip
 * @property integer $top
 * @property string $cover
 *
 * @property Category $category
 * @property User $user
 * @property AdsFieldsValue[] $adsFieldsValues
 * @property AdsImg[] $adsImgs
 * @property AdsShop[] $adsShops
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'category_id', 'dt_add', 'dt_update', 'title', 'content', 'cover'], 'required'],
            [['user_id', 'category_id', 'dt_add', 'dt_update', 'status', 'views', 'vip', 'top'], 'integer'],
            [['content'], 'string'],
            [['title', 'slug', 'cover'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'user_id' => 'Пользователь',
            'category_id' => 'Категория',
            'dt_add' => 'Дата добавления',
            'dt_update' => 'Дата обновления',
            'title' => 'Заголовок',
            'content' => 'Текст',
            'slug' => 'Ссылка',
            'status' => 'Статус',
            'views' => 'Просмотры',
            'vip' => 'Vip',
            'top' => 'Top',
            'cover' => 'Обложка',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsFieldsValues()
    {
        return $this->hasMany(AdsFieldsValue::className(), ['ads_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsImgs()
    {
        return $this->hasMany(AdsImg::className(), ['ads_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdsShops()
    {
        return $this->hasMany(AdsShop::className(), ['ads_id' => 'id']);
    }
}
