<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\category\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории объявлений';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить категорию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            /*'group_id',*/

            [
                'attribute' => 'icon',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img($model->icon,['style' => 'width:50px']);
                }
            ],
            /*'slug',*/
            [
                'attribute' => 'parent_id',
                'format' => 'text',
                'value' => function($model){
                    //\common\classes\Debug::prn($model);
                    //$catName = \common\models\db\Category::find()->where(['id' => $model->parent_id])->one()->name;
                    //\common\classes\Debug::prn($catName);
                    if(empty($model->parent_id)){
                        return "Главная категория";
                    }else{
                        return \common\models\db\Category::find()->where(['id' => $model->parent_id])->one()->name;
                    }
                }
            ],
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
