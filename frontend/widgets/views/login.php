<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\user\widgets\Connect;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View                   $this
 * @var yii\widgets\ActiveForm         $form
 * @var dektrium\user\models\LoginForm $model
 * @var string                         $action
 */

?>

<div class="modal-content">
<?php if (Yii::$app->user->isGuest): ?>
    <?php $form = ActiveForm::begin([
        'id'                     => 'login-widget-form',
        'action'                 => Url::to(['/user/security/login']),
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
    ]) ?>
    <div class="modal-header">
        <img src="/img/sticker.png" alt="sticker"/>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Авторизоваться</h4>

    </div>
    <div class="modal-body">
        <?= $form->field($model, 'login')->textInput(['placeholder' => 'Введите ваш login', 'class' => 'reg__form--field']) ?>

        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Парол', 'class' => 'reg__form--field']) ?>

        <input type="checkbox" id="login-form-rememberme" name="login-form[rememberMe]" value="1">
        <p>Запомнить меня</p>
    </div>
    <div class="modal-footer">
        <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'reg__form--btn']) ?>


        <a href="<?= Url::toRoute('/forgot') ?>">Забыли пароль?</a>
        <a href="<?= Url::toRoute('/registration') ?>">Регистрация</a>
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>-->

        <div class="modal-footer__social">
            <?= Connect::widget([
                'baseAuthUrl' => ['/user/security/auth'],
            ]) ?>
            <!--<a class="modal-footer__social--link" href="#"><img src="/img/vk-i.png" alt=""/>
                Войти через ВКонтакте</a>

            <a class="modal-footer__social--link" href="#"><img src="/img/fb-i.png" alt=""/>
                Войти через Facebook</a>-->

        </div>
        <?php ActiveForm::end(); ?>
        <?php else: ?>
            <?= Html::a(Yii::t('user', 'Logout'), ['/user/security/logout'], [
                'class'       => 'btn btn-danger btn-block',
                'data-method' => 'post'
            ]) ?>
        <?php endif ?>
    </div>
    <div class="modal-footer--underline">
        <img src="/img/modal-under.png" alt=""/>
    </div>
</div>

