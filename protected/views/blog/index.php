<section class="content">
    <div class="wrap">
        <div class="breadchambs">
            <a href="/">Главная</a>
            <span>Блог</span>
        </div>
        <h1 class="m-title">Блог</h1>
        <div class="blog-items clearfix">
            <?php foreach ($a_blog as $item) { ?>
                <div class="blog-item">
                    <div class="blog-item__soc">
                        <a href="" class="blog-item__soc__item blog-item__soc__item_fb"><span></span></a>
                        <a href="" class="blog-item__soc__item blog-item__soc__item_ins"><span></span></a>
                        <a href="" class="blog-item__soc__item blog-item__soc__item_vk"><span></span></a>
                        <a href="" class="blog-item__soc__item blog-item__soc__item_pin"><span></span></a>
                    </div>
                    <?= CHtml::link(
                        '<img src="' . $item->image->url . '">',
                        array('blog/view', 'id' => $item->url),
                        array('class' => 'blog-item__img')
                    ); ?>
                    <span class="blog-item__date"><?= date('d.m.Y', $item->date); ?></span>
                    <?= CHtml::link(
                        $item->name,
                        array('blog/view', 'id' => $item->url),
                        array('class' => 'blog-item__title')
                    ); ?>
                    <div class="blog-item__text"><?= $item->text; ?></div>
                </div>
            <?php } ?>
        </div>
        <div class="pager-b">
            <a href="" class="page-b__prev"></a>
            <span>1</span>
            <a href="" class="pager-b__item">2</a>
            <a href="" class="pager-b__item">3</a>
            <a href="" class="pager-b__item">4</a>
            <a href="" class="pager-b__item">5</a>
            <a href="" class="page-b__next"></a>
        </div>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>
