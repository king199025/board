<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields_default_value\models\Ads_fields_default_value */
/* @var $type */

$this->title = 'Добавить значение по умолчанию';
$this->params['breadcrumbs'][] = ['label' => 'Значения по умолчанию', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-fields-default-value-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'type' => $type,
    ]) ?>

</div>
