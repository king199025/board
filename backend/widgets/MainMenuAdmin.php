<?php
namespace backend\widgets;
use common\classes\Debug;
use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class MainMenuAdmin extends Widget
{
    public function run(){
        echo \yii\widgets\Menu::widget(
            [
                'items' => [
                    [
                        'label' => 'Пользователи',
                        'url' => Url::to(['/user/admin']),
                        'template' => '<a href="{url}"><i class="fa fa-users"></i> <span>{label}</span></a>',
                        'active' => Yii::$app->requestedRoute == 'user/admin',
                    ],
                    [
                        'label' => 'Управление полями',
                        'items' => [
                            [
                                'label' => 'Группы полей',
                                'url' => Url::to(['/site/index']),
                                'active' => Yii::$app->requestedRoute == 'site/index',
                            ],
                            [
                                'label' => 'Типы полей',
                                'url' => Url::to(['/fields_type']),
                                'active' =>
                                    [
                                        Yii::$app->requestedRoute == 'ads_fields_type/ads_fields_type',
                                        Yii::$app->requestedRoute == 'ads_fields_type/ads_fields_type/create',
                                    ],
                            ],
                            [
                                'label' => 'Поля',
                                'url' => '#',
                            ],
                            [
                                'label' => 'Значения по умолчанию',
                                'url' => '#',
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-leanpub"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],
                    [
                        'label' => 'Доска',
                        'items' => [
                            [
                                'label' => '123',
                                'url' => '#'
                            ],
                            [
                                'label' => '345',
                                'url' => '#',
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-dashboard"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
                    ],
                ],
                'activateItems' => true,
                'activateParents' => true,
                'activeCssClass'=>'active',
                'encodeLabels' => false,
                /*'dropDownCaret' => false,*/
                'submenuTemplate' => "\n<ul class='treeview-menu' role='menu'>\n{items}\n</ul>\n",
                'options' => [
                    'class' => 'sidebar-menu',
                ]
            ]
        );
    }
}