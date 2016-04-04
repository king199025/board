<?php

namespace backend\modules\ads_fields_type\controllers;

use yii\web\Controller;

/**
 * Default controller for the `ads_fields_type` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
