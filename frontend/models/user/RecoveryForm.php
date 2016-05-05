<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 05.05.2016
 * Time: 9:52
 */

namespace frontend\models\user;


use dektrium\user\models\Token;
use Yii;

class RecoveryForm extends \dektrium\user\models\RecoveryForm
{

    /**
     * Sends recovery message.
     *
     * @return bool
     */
    public function sendRecoveryMessage()
    {
        if ($this->validate()) {
            /** @var Token $token */
            $token = Yii::createObject([
                'class'   => Token::className(),
                'user_id' => $this->user->id,
                'type'    => Token::TYPE_RECOVERY,
            ]);

            if (!$token->save(false)) {
                return false;
            }

            if (!$this->mailer->sendRecoveryMessage($this->user, $token)) {
                return false;
            }


            return true;
        }

        return false;
    }
}