<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php $this->beginBody() ?>

    <?php
    if (Yii::$app->user->isGuest): ?>
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= Url::to(['/']) ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">Админпанель</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Админпанель</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">

            </nav>
        </header>
        <div class="content-wrapper contentLoginAdmin">
            <!-- Main content -->
            <section class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <footer class="main-footer contentLoginAdmin">
            <div class="pull-right hidden-xs">
            </div>
            <strong>&copy; My Company <?= date('Y') ?></strong>
        </footer>
    <?php else: ?>
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= Url::to(['/']) ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">Админпанель</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Админпанель</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <?php
                    echo Nav::widget(
                        [
                            'items' => [
                                [
                                    'label' => 'Ссылка 1',
                                    'url' => '#'
                                ],
                                [
                                    'label' => 'Ссылка 2',
                                    'url' => '#'
                                ],
                                [
                                    'label' => '<i class="fa fa-newspaper-o"></i> <span>Новости</span> <i class="fa fa-angle-left pull-right"></i>',
                                    'items' => [
                                        [
                                            'label' => '123',
                                            'url' => '#',
                                        ],
                                        [
                                            'label' => '345',
                                            'url' => '#',
                                        ],
                                    ],
                                    'options' => [
                                        'class' => 'treeview',
                                    ]
                                ]
                            ],
                            'activateItems' => true,
                            'activateParents' => true,
                            'encodeLabels' => false,
                            'dropDownCaret' => false,
                            'options' => [
                                'class' => 'sidebar-menu',
                            ]
                        ]
                    )
                ?>
                <ul class="sidebar-menu">
                    <li class="header">Навигация</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span>Новости</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?= Url::to(['/news/create']);?>"><i class="fa fa-circle-o"></i>Добавить новость</a></li>
                            <li><a href="<?= Url::to(['/news']);?>"><i class="fa fa-circle-o"></i>Все новости</a></li>
                            <li><a href="<?= Url::to(['/category_news']);?>"><i class="fa fa-circle-o"></i>Категории</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i> <span>Мероприятия</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?= Url::to(['/events/events/create']) ?>"><i class="fa fa-circle-o"></i>Добавить мероприятие</a></li>
                            <li><a href="<?= Url::to(['/events']) ?>"><i class="fa fa-circle-o"></i>Все мероприятия</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['/lang']) ?>"><i class="fa fa-flag-o"></i> <span>Языки</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>SEO</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?= Url::to(['/seo/default/main_page']);?>"><i class="fa fa-circle-o"></i>Главная</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i> <span>Материалы</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?= Url::to(['/materials/materials/create']);?>"><i class="fa fa-circle-o"></i>Добавить материал</a>
                                <a href="<?= Url::to(['/materials']);?>"><i class="fa fa-circle-o"></i>Все материалы</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['/ms']) ?>"><i class="fa fa-th"></i> <span>Mercury Space</span></a></li>
                    <!--<li><a href="<?/*= Url::to(['/mercury_city_tower']) */?>"><i class="fa fa-th"></i> <span>Меркурий Сити Тауэр</span></a></li>-->
                    <li><a href="<?= Url::to(['/options']) ?>"><i class="fa fa-cog"></i> <span>Офисы</span></a>
                        <ul class="treeview-menu">
                            <li class="active">
                                <a href="<?= Url::to(['/tenants']);?>"><i class="fa fa-circle-o"></i>Арендаторы</a>
                            </li>
                        </ul>

                    </li>
                    <li><a href="<?= Url::to(['/options']) ?>"><i class="fa fa-cog"></i> <span>Опции</span></a></li>

                </ul>

            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <!--<ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>-->
            </section>

            <!-- Main content -->
            <section class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <footer class="main-footer contentLoginAdmin">
            <div class="pull-right hidden-xs">
            </div>
            <strong>&copy; My Company <?= date('Y') ?></strong>
        </footer>


    <?php endif ?>


    <!--<div class="wrap">
    <?php
    /*    NavBar::begin([
            'brandLabel' => 'My Company',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-fixed-top',
            ],
        ]);
        $menuItems = [
            ['label' => 'Home', 'url' => ['/site/index']],
        ];
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        } else {
            $menuItems[] = '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>';
        }
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
        ]);
        NavBar::end();
        */ ?>

    <div class="container">
        <? /*= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) */ ?>
        <? /*= Alert::widget() */ ?>
        <? /*= $content */ ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <? /*= date('Y') */ ?></p>

        <p class="pull-right"><? /*= Yii::powered() */ ?></p>
    </div>
</footer>-->
</div><!-- ./wrapper -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
