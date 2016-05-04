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

/**
 * @var yii\web\View              $this
 * @var dektrium\user\models\User $user
 * @var dektrium\user\Module      $module
 */

$this->title = Yii::t('user', 'Sign up');
//$this->params['breadcrumbs'][] = $this->title;
?>


<!--<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?/*= Html::encode($this->title) */?></h3>
            </div>
            <div class="panel-body">
                <?php /*$form = ActiveForm::begin([
                    'id'                     => 'registration-form',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                ]); */?>

                <?/*= $form->field($model, 'email') */?>

                <?/*= $form->field($model, 'username') */?>

                <?php /*if ($module->enableGeneratingPassword == false): */?>
                    <?/*= $form->field($model, 'password')->passwordInput() */?>
                <?php /*endif */?>

                <?/*= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn-success btn-block']) */?>

                <?php /*ActiveForm::end(); */?>
            </div>
        </div>
        <p class="text-center">
            <?/*= Html::a(Yii::t('user', 'Already registered? Sign in!'), ['/user/security/login']) */?>
        </p>
    </div>
</div>-->


<section class="reg">
    <div class="container">
        <div class="row">
            <h3 class="reg__title">Создать учетную запись</h3>

            <div class="reg__content">
                <div class="col-lg-6 col-sm-6 col-xs-12">

                    <h3 class="">Регистрация</h3>

                    <?php $form = ActiveForm::begin([
                        'id'                     => 'registration-form',
                        'options'                => ['class' => 'reg__form'],
                        'enableAjaxValidation'   => true,
                        'enableClientValidation' => false,
                        'fieldConfig' => [
                            'template' => '{input}<span><img src="/img/star-i.png" alt="star"/></span><div class="error">{error}</div>',
                            'inputOptions' => ['class' => 'reg__form--field'],
                        ],
                    ]); ?>
                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Введите ваш email-адрес']) ?>

                    <?= $form->field($model, 'username')->textInput(['placeholder' => 'Введите ваш Login']) ?>

                    <?php if ($module->enableGeneratingPassword == false): ?>
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    <?php endif ?>


                        <input type="checkbox" class="ruleRegister">
                        <p> * Я соглашаюсь с правилами использования
                            сервиса, а также с передачей и обработкой
                            моих данных. Я подтверждаю своё
                            совершеннолетие и ответственность за
                            размещение объявления</p>

                    <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'reg__form--btn', 'disabled' => 'disabled']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12" style="background-color: #eaeaea;">

                    <div class="reg__content--info">
                        <p>Пароль нужен для входа в раздел <span>Мои объявления,<br/>
                        Мои услуги, Мои магазины</span> и другое,<br/>
                            где вы сможете работать с объявлениями:</p>
                        <ul>
                            <li>редактировать, удалять и обновлять</li>
                            <li>редактировать, удалять и обновлять</li>
                            <li>просматривать избранные объявления</li>
                            <li>предосталять свои услуги или услуги компании</li>
                            <li>разместить свой магазин в каталоге</li>
                        </ul>
                        <p>Введите ваш email-адрес, желаемый пароль<br/>
                            и подтвердите изменения, пройдя по ссылке<br/>
                            в письме, которое мы вам отправим.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
