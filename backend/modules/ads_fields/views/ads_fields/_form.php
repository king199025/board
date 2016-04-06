<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields\models\Ads_fields */
/* @var $form yii\widgets\ActiveForm */
/* @var $group */
/* @var $type */
?>

<div class="ads-fields-form">

    <?php $form = ActiveForm::begin(); ?>

    <?/*= $form->field($model, 'group_id')->textInput() */?>
    <?= $form->field($model, 'group_id')->dropDownList(ArrayHelper::map($group, 'id', 'name'), ['prompt' => 'Выберите группу полей']) ?>

    <?/*= $form->field($model, 'type_id')->textInput() */?>
    <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map($type, 'id', 'type'), ['prompt' => 'Выберите тип поля']) ?>


    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
