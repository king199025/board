<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\ads_fields_default_value\models\Ads_fields_default_valueSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Значения по умолчанию';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-fields-default-value-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить значение по умолчанию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'value',
            [
                'attribute' => 'ads_field_type_id',
                'format' => 'text',
                'value' => function($model){
                    return \backend\modules\ads_fields_type\models\AdsFieldsType::findOne(['id' => $model->ads_field_type_id])->type ;
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
