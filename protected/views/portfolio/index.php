<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title">Портфолио</h1>
        <div class="b-portfolio__menu">
            <?= CHtml::link('Все', array('portfolio/index'), array('class' => 'b-portfolio__menu__i')); ?>
            <?php foreach ($a_photocategory as $item) { ?>
                <?= CHtml::link(
                    $item->name,
                    array('portfolio/index', 'id' => $item->url),
                    array('class' => 'b-portfolio__menu__i')
                ); ?>
            <?php } ?>
        </div>
        <div class="clearfix b-portfolio">
            <?php foreach ($a_album as $item) { ?>
                <?= CHtml::link(
                    '<img
                     src="' . (isset($item->main->image->url) ? $item->main->image->url : $item->photo[0]->image->url) . '"
                     alt="' . (isset($item->main->alt) ? $item->main->alt : $item->photo[0]->alt) . '"
                     class="b-portfolio__item__img-hover">
                     <img src="img/portfolio/photo-1.jpg" alt="">
                     <div class="b-portfolio__item_in">
                        <div class="b-portfolio__item__category">Свадьба</div>
                        <div class="b-portfolio__item__title">Юрий и Виктория</div>
                        <div href="javascript:;" class="b-portfolio__item__btn">Смотреть</div>
                    </div>',
                    array('portfolio/view', 'id' => $item->url),
                    array('class' => 'b-portfolio__item')
                ); ?>
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
