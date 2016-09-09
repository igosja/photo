<div class="albom-b__item">
    <a
        href="<?= (isset($item->image->url) ? $item->image->url : 'javascript:;'); ?>"
        class="fancybox"
        data-fb="fb-<?= $item->id; ?>"
        data-pin="pin-<?= $item->id; ?>"
        data-vk="vk-<?= $item->id; ?>"
        rel="show-gallery"
    >
        <img src="<?= ImageIgosja::resize($item->image_id, 390, 390); ?>" alt="<?= $item->alt; ?>">
    </a>
    <div class="blog-item__soc">
        <?= $this->renderPartial(
            '/include/share',
            array(
                'url' => $this->createAbsoluteUrl('portfolio/view', array('id' => $item->album->url)),
                'image' => ImageIgosja::resize($item->image_id, 320, 320)
            )
        ); ?>
    </div>
</div>