<?= $this->renderPartial('/include/bread'); ?>
<br/>
<?php foreach ($a_blog as $item) { ?>
    <?php if (isset($item->image->url)) { ?>
        <img src="<?= $item->image->url; ?>">
    <?php } ?>
    <?= $item->name; ?>
    Дата публикации: <?= date('d.m.Y', $item->date); ?>
    <?= $item->text; ?>
    <?= CHtml::link('Подробнее', array('blog/view', 'id' => $item->url)); ?>
<?php } ?>