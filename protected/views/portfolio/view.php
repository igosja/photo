<?= $o_album->name; ?>
<?= $this->renderPartial('/include/bread'); ?>
    <br/>
<?php foreach ($o_album->photo as $item) { ?>
    <img src="<?= $item->image->url; ?>" alt="<?= $item->alt; ?>">
<?php } ?>