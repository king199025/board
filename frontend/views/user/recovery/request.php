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

$this->title = Yii::t('user', 'Recover your password');
//$this->params['breadcrumbs'][] = $this->title;
?>

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

                <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder' => 'Введите ваш email-адрес']) ?>

                <?= Html::submitButton(Yii::t('user', 'Continue'), ['class' => 'reg__form--btn']) ?><br>

                <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>
