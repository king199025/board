<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 03.05.2016
 * Time: 14:07
 */

namespace frontend\modules\mainpage\controllers;


use yii\base\Controller;
use yii\filters\AccessControl;

class MainpageController extends Controller
{
    public function behaviors()
    {
        return [

            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [

                        'roles' => ['?','@'],
                        'allow' => true,
                    ],

                ],
            ],
        ];
    }


    public function actionIndex()
    {
        return $this->render('index');
    }

}