<div class="albom-b__item">
    <a
        href="<?= (isset($item->image->url) ? $item->image->url : 'javascript:;'); ?>"
        class="fancybox"
        rel="show-gallery"
    >
        <img src="<?= ImageIgosja::resize($item->image_id, 390, 390); ?>" alt="<?= $item->alt; ?>">
    </a>
    <div class="blog-item__soc">
        <a href="" class="blog-item__soc__item blog-item__soc__item_fb"><span></span></a>
        <a href="" class="blog-item__soc__item blog-item__soc__item_ins"><span></span></a>
        <a href="" class="blog-item__soc__item blog-item__soc__item_vk"><span></span></a>
        <a href="" class="blog-item__soc__item blog-item__soc__item_pin"><span></span></a>
    </div>
</div>