<html>
<head>
<title><?= $this->seo_title; ?></title>
<meta name="description" content="<?= $this->seo_description; ?>">
<meta name="keywords" content="<?= $this->seo_keywords; ?>">
</head>
<body>
Красота спасет мир!
<br/>
<?= CHtml::link('Логотип', array('/')); ?>
<br/>
Твори добро!
<br/>
<?= CHtml::link('Портфолио', array('portfolio/index')); ?>
<?= CHtml::link('Блог', array('blog/index')); ?>
<?= CHtml::link('Прайс', array('price/index')); ?>
<?= CHtml::link('Контакты', array('contacts/index')); ?>
<br/>
<?= $content; ?>
<br/>
<?php foreach ($this->a_social as $item) { ?>
<a href="<?= $item->url; ?>" target="_blank">
<?= $item->name; ?>
</a>
<?php } ?>
<br/>
<?= $this->contacts->lifecell; ?>
<?= $this->contacts->kyivstar; ?>
<?= $this->contacts->email; ?>
<br/>
Копирайт
<br/>
Сайт создан Metamorf IT Solutions
</body>
</html>