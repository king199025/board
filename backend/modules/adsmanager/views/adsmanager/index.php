<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\adsmanager\models\AdsmanagerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Объявления пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adsmanager-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?/*= Html::a('Create Adsmanager', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'id',*/
            'user_id',
            'category_id',
            'dt_add',
            'dt_update',
            // 'title',
            // 'content:ntext',
            // 'slug',
            // 'status',
            // 'views',
            // 'vip',
            // 'top',
            // 'cover',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
