<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><span><?= $o_photo->album->category->name; ?></span> <?= $o_photo->album->name; ?></h1>
        <div class="photo-albom clearfix" id="inner">
            <img src="<?= $o_photo->image->url; ?>" alt="<?= $o_photo->alt; ?>" style="max-width: 1000px">
        </div>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>