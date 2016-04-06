<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields\models\Ads_fields */
/* @var $type */
/* @var $group */

$this->title = 'Создать поле';
$this->params['breadcrumbs'][] = ['label' => 'Поля', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ads-fields-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'group' => $group,
        'type' => $type,
    ]) ?>

</div>
