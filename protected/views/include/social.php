<?php foreach ($this->a_social as $item) { ?>
    <a href="<?= $item->url; ?>" class="text-b__soc__item text-b__soc__item_<?= $item->css; ?>" target="_blank">
        <span></span>
    </a>
<?php } ?>