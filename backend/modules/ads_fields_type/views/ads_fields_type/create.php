<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields_type\models\AdsFieldsType */

$this->title = 'Создать тип поля';
$this->params['breadcrumbs'][] = ['label' => 'Типы полей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-fields-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
