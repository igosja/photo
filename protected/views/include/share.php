<?php foreach ($this->a_social as $item) { ?>
    <a href="<?= $item->url; ?>" class="blog-item__soc__item blog-item__soc__item_<?= $item->css; ?>" target="_blank">
        <span></span>
    </a>
<?php } ?>