<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ads_fields\models\Ads_fieldsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Поля';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-fields-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать поле', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'group_id',
                'format' => 'text',
                'value' => function($model){
                    return \common\models\db\GroupAdsFields::findOne(['id' => $model->group_id])->name;
                }
            ],
            //'group_id',
            [
                'attribute' => 'type_id',
                'format' => 'text',
                'value' => function($model){
                    return \common\models\db\AdsFieldsType::findOne(['id' => $model->type_id])->type;
                }
            ],
            //'type_id',
            'label',
            //'template:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
