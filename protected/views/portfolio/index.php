<?= $this->renderPartial('/include/bread'); ?>
    <br/>
<?= CHtml::link('Все категории', array('portfolio/index')); ?>
<?php foreach ($a_photocategory as $item) { ?>
    <?= CHtml::link($item->name, array('portfolio/index', 'id' => $item->url)); ?>
<?php } ?>
    <br/>
<?php foreach ($a_album as $item) { ?>
    <?= CHtml::link(
        '<img
         src="' . (isset($item->main->image) && isset($item->main->image->url) ? $item->main->image->url : $item->photo[0]->image->url) . '"
         alt="' . (isset($item->main) && isset($item->main->alt) ? $item->main->alt : $item->photo[0]->alt) . '">',
        array('portfolio/view', 'id' => $item->url)
    ); ?>
<?php } ?>