<?php

namespace frontend\widgets;
use yii\base\Widget;

class ShowHeader extends Widget
{
    public function run(){
        return $this-> render('header');
    }
}