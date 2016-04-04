<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields_type\models\AdsFieldsType */

$this->title = 'Редактировать тип поля: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Типы полей', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="ads-fields-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
