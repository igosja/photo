<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js homepage"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $this->seo_title; ?></title>
    <meta name="description" content="<?= $this->seo_description; ?>">
    <meta name="keywords" content="<?= $this->seo_keywords; ?>">
    <meta http-equiv="content-language" content="ru"/>
    <meta name="viewport" content="width=1240">
    <meta property="og:title" content="<?= $this->seo_title; ?>" />
    <meta property="og:description" content="<?= $this->seo_description; ?>" />
    <meta property="og:type" content="text" />
    <meta property="og:image" content="http://<?= $_SERVER['HTTP_HOST'] . $this->og_image; ?>" />
    <meta property="og:url" content="http://<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300&subset=latin,cyrillic'
        rel='stylesheet'
        type='text/css'
    >
    <link
        href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic'
        rel='stylesheet'
        type='text/css'
    >
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="/js/vendor/libs.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">
    You are using an <strong>outdated</strong> browser.
    Please <a target="_blank" rel="nofollow" href="http://browsehappy.com/">upgrade your browser</a>
    to improve your experience.
</p>
<![endif]-->
<div class="sitewrap">
    <header class="clearfix">
        <div class="wrap">
            <?= CHtml::link('<img src="/img/logo.png" alt="">', array('index/index'), array('class' => 'logo')); ?>
            <a href="javascript:;" data-selector="form-order" class="header-offer overlayElementTrigger" data-id="0">
                Заказать фотосессию
            </a>
            <nav>
                <?= CHtml::link('Портфолио', array('portfolio/index'), array('class' => 'nav-link')); ?>
                <?= CHtml::link('Блог', array('blog/index'), array('class' => 'nav-link')); ?>
                <?= CHtml::link('Прайс', array('price/index'), array('class' => 'nav-link')); ?>
                <?= CHtml::link('Контакты', array('contacts/index'), array('class' => 'nav-link')); ?>
            </nav>
        </div>
    </header>
    <?= $content; ?>
    <div class="clearfix-footer"></div>
</div>
<footer>
    <div class="wrap">
        <div class="footer-contacts">
            <a href="javascript:;" class="footer-phone"><span>+38</span> <?= $this->contacts->lifecell; ?></a>
            <a href="javascript:;" class="footer-phone"><span>+38</span> <?= $this->contacts->kyivstar; ?></a>
            <a href="mailto:<?= $this->contacts->email; ?>" class="footer-mail"><?= $this->contacts->email; ?></a>
        </div>
        <div class="footer-info clearfix">
            <div class="footer-info__maks">
                <a href="javascript:;" class="maks-logo">Макс</a>
                <div>
                    <a href="tel:067-96-255-26">067-96-255-26</a><br/>
                    <a href="mailto:panditmaximus@gmail.com">panditmaximus@gmail.com</a>
                </div>
            </div>
            <div class="footer-info__copyright">
                <?= CHtml::link('<img src="/img/bottom-logo.png" alt="">', array('index/index')); ?>
                <br/>
                ©&nbsp;&nbsp;2014-<?= date('Y'); ?> «Anna Plakhotna»
            </div>
            <a href="javascript:;" class="footer-info__designer"></a>
        </div>
    </div>
</footer>
<section class="overlay-forms">
    <div class="form-overlay"></div>
    <div class="wrap">
        <div class="of-form form-order clearfix">
            <a href="javascript:;" class="of-close"></a href="">
            <form>
                <div class="of-form__title">Заказать фотосессию</div>
                <div class="of-wrap clearfix">
                    <input type="text" class="of-input of-input_name" placeholder="Ваше имя" required/>
                    <input type="tel" class="of-input of-input_phone phone_mask" placeholder="Телефон" required/>
                    <input type="email" class="of-input of-input_email" placeholder="E-mail" required/>
                    <div class="jqui-select">
                        <select name="price_id" id="of-price">
                            <?php foreach ($this->a_price as $item) { ?>
                                <option value="<?= $item->id; ?>">
                                    <?= $item->category->name; ?>, <?= $item->name; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <textarea placeholder="Комментарий" class="of-form__textarea"></textarea>
                    <a href="javascript:;" class="of-submit">Заказать</a>
                </div>
            </form>
        </div>
        <div class="of-form form-thanks clearfix">
            <a href="javascript:;" class="of-close"></a href="">
            <div class="of-form__text">
                <span>Спасибо</span><br>
                Я с Вами свяжусь<br>
                ближайшим временем
            </div>
        </div>
    </div>
</section>
</body>
</html>