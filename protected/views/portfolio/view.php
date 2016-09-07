<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><?= $o_album->name; ?></h1>
        <div class="albom-b clearfix">
            <?php foreach ($o_album->photo as $item) { ?>
                <div class="albom-b__item">
                    <img src="<?= $item->image->url; ?>" alt="<?= $item->alt; ?>">
                    <a href="<?= $item->image->url; ?>" class="fancybox" rel="show-gallery">
                        <img src="<?= $item->image->url; ?>" alt="<?= $item->alt; ?>">
                    </a>
                    <div class="blog-item__soc">
                        <a href="" class="blog-item__soc__item blog-item__soc__item_fb"><span></span></a>
                        <a href="" class="blog-item__soc__item blog-item__soc__item_ins"><span></span></a>
                        <a href="" class="blog-item__soc__item blog-item__soc__item_vk"><span></span></a>
                        <a href="" class="blog-item__soc__item blog-item__soc__item_pin"><span></span></a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a href="javascript:;" class="show-more">Загрузить еще</a>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>
