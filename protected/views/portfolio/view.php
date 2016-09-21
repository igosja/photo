<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><span><?= $o_album->category->name; ?></span> <?= $o_album->name; ?></h1>
        <div class="albom-b clearfix" id="inner">
            <?php for ($i=0, $count_photo = count($a_photo); $i<$count_photo; $i++) { ?>
                <div class="albom-b__item" <?php if (9 >= $i) { ?>style="display: none;"<?php } ?> id="photo-item-<?= $i; ?>">
                    <a
                        href="<?= (isset($a_photo[$i]->image->url) ? $a_photo[$i]->image->url : 'javascript:;'); ?>"
                        class="fancybox"
                        data-fb="fb-<?= $a_photo[$i]->id; ?>"
                        data-pin="pin-<?= $a_photo[$i]->id; ?>"
                        data-vk="vk-<?= $a_photo[$i]->id; ?>"
                        rel="show-gallery"
                    >
                        <img src="<?= ImageIgosja::resize($a_photo[$i]->image_id, 390, 390); ?>" alt="<?= $a_photo[$i]->alt; ?>">
                    </a>
                    <div class="blog-item__soc">
                        <?= $this->renderPartial(
                            '/include/share',
                            array(
                                'url' => $this->createAbsoluteUrl('portfolio/view', array('id' => $a_photo[$i]->album->url)),
                                'image' => ImageIgosja::resize($a_photo[$i]->image_id, 320, 320)
                            )
                        ); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a href="javascript:;" class="show-more" id="photo-more" data-page="1">
            Загрузить еще
        </a>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>