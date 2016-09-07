<?php foreach ($a_album as $item) { ?>
    <?= $this->renderPartial('/include/item-album', array('item' => $item)); ?>
<?php } ?>