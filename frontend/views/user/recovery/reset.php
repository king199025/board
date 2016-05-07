<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/*
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\RecoveryForm $model
 */

$this->title = Yii::t('user', 'Reset your password');
//$this->params['breadcrumbs'][] = $this->title;
?>
<!--123
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?/*= Html::encode($this->title) */?></h3>
            </div>
            <div class="panel-body">
                <?php /*$form = ActiveForm::begin([
                    'id'                     => 'password-recovery-form',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                ]); */?>

                <?/*= $form->field($model, 'password')->passwordInput() */?>

                <?/*= Html::submitButton(Yii::t('user', 'Finish'), ['class' => 'btn btn-success btn-block']) */?><br>

                <?php /*ActiveForm::end(); */?>
            </div>
        </div>
    </div>
</div>-->

<section class="reg">
    <div class="container">
        <div class="row">
            <h3 class="reg__title"><?= Html::encode($this->title) ?></h3>

            <?php $form = ActiveForm::begin([
                'id'                     => 'password-recovery-form',
                'options'                => ['class' => 'reg__form'],
                'enableAjaxValidation'   => true,
                'enableClientValidation' => false,
                'fieldConfig' => [
                    'template' => '{input}<span><img src="/img/star-i.png" alt="star"/></span><div class="error">{error}</div>',
                    'inputOptions' => ['class' => 'reg__form--field'],
                ],
            ]); ?>

            <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Введите новый пароль']) ?>

            <?= Html::submitButton(Yii::t('user', 'Finish'), ['class' => 'reg__form--btn']) ?><br>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>
