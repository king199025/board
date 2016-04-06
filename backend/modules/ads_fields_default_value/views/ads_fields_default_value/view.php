<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields_default_value\models\Ads_fields_default_value */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Значения по умолчанию', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-fields-default-value-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'value',
            'ads_field_type_id',
        ],
    ]) ?>

</div>
