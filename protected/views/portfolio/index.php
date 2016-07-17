<?= $this->renderPartial('/include/bread'); ?>
<br/>
<?php foreach ($a_photocategory as $item) { ?>
<?= CHtml::link($item->name, array('portfolio/index', 'id' => $item->url)); ?>
<?php } ?>