<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\group_ads_fields\models\Group_ads_fields */

$this->title = 'Создать группу полей';
$this->params['breadcrumbs'][] = ['label' => 'Группы полей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-ads-fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
