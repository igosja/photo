<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Административный раздел">
        <script src="/js/jquery.js"></script>
        <title>Административный раздел</title>
        <link href="/css/admin.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?= CHtml::link('Студия Плахотной', array('index/index'), array('class' => 'navbar-brand')); ?>
                </div>

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <?= CHtml::link('<i class="fa fa-sign-out fa-fw"></i>', array('/site/logout')); ?>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="javascript:;">Главная страница<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?= CHtml::link('Слайдер', array('slide/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Текст и SEO-теги', array('mainpage/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Портфолио<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?= CHtml::link('Категории', array('photocategory/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Альбомы', array('album/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('SEO-теги', array('photopage/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Блог<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?= CHtml::link('Публикации', array('blog/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('SEO-теги', array('blogpage/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Прайс<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?= CHtml::link('Категории', array('pricecategory/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Прайсы', array('price/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Текст и SEO-теги', array('pricepage/index')); ?>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">Контакты<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <?= CHtml::link('Контакты и SEO-теги', array('contacts/index')); ?>
                                    </li>
                                    <li>
                                        <?= CHtml::link('Ссылки на соцсети', array('social/index')); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">
                <?= $content; ?>
            </div>
        </div>
        <script src="/js/rowsorter.js"></script>
        <script src="/js/admin.min.js"></script>
    </body>
</html>