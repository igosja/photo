<div class="albom-b__item">
    <a
        href="<?= (isset($item->image->url) ? $item->image->url : 'javascript:;'); ?>"
        class="fancybox"
        rel="show-gallery"
    >
        <img src="<?= ImageIgosja::resize($item->image_id, 390, 390); ?>" alt="<?= $item->alt; ?>">
    </a>
    <div class="blog-item__soc">
        <?= $this->renderPartial('/include/share'); ?>
    </div>
</div>