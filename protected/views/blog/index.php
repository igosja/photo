<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title">Блог</h1>
        <div class="blog-items clearfix">
            <?php foreach ($a_blog as $item) { ?>
                <div class="blog-item">
                    <div class="blog-item__soc">
                        <?= $this->renderPartial('/include/share'); ?>
                    </div>
                    <?= CHtml::link(
                        '<img src="' . ImageIgosja::resize($item->image_id, 320, 320) . '">',
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
            <?= CHtml::link('', array('blog/index', 'id' => $prev), array('class' => 'page-b__prev')); ?>
            <?php for ($i = 1; $i <= $a_page; $i++) { ?>
                <?php if ($page == $i) { ?>
                    <span><?= $i; ?></span>
                <?php } else { ?>
                    <?= CHtml::link($i, array('blog/index', 'id' => $i), array('class' => 'pager-b__item')); ?>
                <?php } ?>
            <?php } ?>
            <?= CHtml::link('', array('blog/index', 'id' => $next), array('class' => 'page-b__next')); ?>
        </div>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>
