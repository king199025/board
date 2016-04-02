<?php
namespace backend\widgets;
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
                        'label' => 'Ссылка 1',
                        'url' => '#',
                    ],
                    [
                        'label' => 'Ссылка 2',
                        'url' => '#'
                    ],
                    [
                        'label' => 'Новости',
                        /*'active' => Yii::$app->controller->id == 'site',*/
                        'items' => [
                            [
                                'label' => '123',
                                'url' => Url::to(['/site/index']),
                                'active' => Yii::$app->requestedRoute == 'site/index',
                            ],
                            [
                                'label' => '345',
                                'url' => '#',
                            ],
                        ],
                        'options' => [
                            'class' => 'treeview',
                        ],
                        'template' => '<a href="#"><i class="fa fa-newspaper-o"></i> <span>{label}</span> <i class="fa fa-angle-left pull-right"></i></a>',
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