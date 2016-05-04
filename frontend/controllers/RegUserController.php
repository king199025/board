<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 04.05.2016
 * Time: 12:42
 */

namespace frontend\controllers;


use common\classes\Debug;
use dektrium\user\controllers\RegistrationController;
use dektrium\user\models\RegistrationForm;
use Yii;
use yii\web\NotFoundHttpException;

class RegUserController extends RegistrationController
{

    /**
     * Displays the registration page.
     * After successful registration if enableConfirmation is enabled shows info message otherwise redirects to home page.
     *
     * @return string
     * @throws \yii\web\HttpException
     */
    public function actionRegister()
    {
        if (!$this->module->enableRegistration) {
            throw new NotFoundHttpException();
        }

        /** @var RegistrationForm $model */
        $model = Yii::createObject(RegistrationForm::className());
        $event = $this->getFormEvent($model);

        $this->trigger(self::EVENT_BEFORE_REGISTER, $event);

        $this->performAjaxValidation($model);

        if ($model->load(Yii::$app->request->post()) && $model->register()) {

            $this->trigger(self::EVENT_AFTER_REGISTER, $event);

            $link = explode('@',$_POST['register-form']['email']);

            return $this->render('@app/views/user/registration/reg-message', [
                'title'  => Yii::t('user', 'Your account has been created'),
                'module' => $this->module,
                'link' => $link[1],
            ]);
        }

        return $this->render('register', [
            'model'  => $model,
            'module' => $this->module,
        ]);
    }

}