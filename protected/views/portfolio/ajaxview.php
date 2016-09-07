<?php foreach ($a_photo as $item) { ?>
    <?= $this->renderPartial('/include/item-photo', array('item' => $item)); ?>
<?php } ?>