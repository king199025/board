<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\category\models\Category */
/* @var $groupFields */
/* @var $parent */

$this->title = 'Обновить категорию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Категории объявлений', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'groupFields' => $groupFields,
        'parent' => $parent,
    ]) ?>

</div>
