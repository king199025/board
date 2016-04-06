<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\ads_fields_default_value\models\Ads_fields_default_value */
/* @var $form yii\widgets\ActiveForm */
/* @var $type */
?>

<div class="ads-fields-default-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ads_field_type_id')->dropDownList(\yii\helpers\ArrayHelper::map($type, 'id', 'type'), ['prompt' => 'Выберите тип поля']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
