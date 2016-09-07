<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title">Портфолио</h1>
        <div class="b-portfolio__menu">
            <?= CHtml::link(
                'Все',
                array('portfolio/index'),
                array('class' => 'b-portfolio__menu__i' . ('' == $id ? ' active' : ''))
            ); ?>
            <?php foreach ($a_photocategory as $item) { ?>
                <?= CHtml::link(
                    $item->name,
                    array('portfolio/index', 'id' => $item->url),
                    array('class' => 'b-portfolio__menu__i' . ($item->url == $id ? ' active' : ''))
                ); ?>
            <?php } ?>
        </div>
        <div class="clearfix b-portfolio" id="inner">
            <?php foreach ($a_album as $item) { ?>
                <?= $this->renderPartial('/include/item-album', array('item' => $item)); ?>
            <?php } ?>
        </div>
        <a href="javascript:;" class="show-more" id="album-more" data-category="<?= $id; ?>" data-page="1">
            Загрузить еще
        </a>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>