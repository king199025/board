<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields\models\Ads_fields */
/* @var $type */
/* @var $group */

$this->title = 'Обновить поле: ' . $model->label;
$this->params['breadcrumbs'][] = ['label' => 'Поля', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="ads-fields-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'group' => $group,
        'type' => $type,
    ]) ?>

</div>
