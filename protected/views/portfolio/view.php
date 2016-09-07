<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title"><span><?= $o_album->category->name; ?></span> <?= $o_album->name; ?></h1>
        <div class="albom-b clearfix" id="inner">
            <?php foreach ($a_photo as $item) { ?>
                <?= $this->renderPartial('/include/item-photo', array('item' => $item)); ?>
            <?php } ?>
        </div>
        <a href="javascript:;" class="show-more" id="photo-more" data-id="<?= $id; ?>" data-page="1">
            Загрузить еще
        </a>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>