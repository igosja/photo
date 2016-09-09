<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title m-title_article"><?= $o_blog->name; ?></h1>
        <div class="b-article__date"><?= date('d.m.Y', $o_blog->date); ?></div>
        <div class="clearfix b-article">
            <div class="b-article__left">
                <div class="blog-item__soc">
                    <?= $this->renderPartial(
                        '/include/share',
                        array(
                            'url' => $this->createAbsoluteUrl('blog/view', array('id' => $o_blog->url)),
                            'image' => ImageIgosja::resize($o_blog->image_id, 320, 320)
                        )
                    ); ?>
                </div>
                <img src="<?= ImageIgosja::resize($o_blog->image_id, 320, 320); ?>">
            </div>
            <div class="b-article__right">
                <?= $o_blog->text; ?>
            </div>
        </div>
        <div class="b-article__pager">
            <?= (isset($prev->url) ?
                CHtml::link(
                    'Предидущая статья',
                    array('blog/view', 'id' => $prev->url),
                    array('class' => 'b-article__pager__prev')
                ) :
                '<a href="javascript:;" class="b-article__pager__prev">Предидущая статья</a>'
            ); ?>
            <?= (isset($next->url) ?
                CHtml::link(
                    'Следущая статья',
                    array('blog/view', 'id' => $next->url),
                    array('class' => 'b-article__pager__next')
                ) :
                '<a href="javascript:;" class="b-article__pager__next">Следущая статья</a>'
            ); ?>
        </div>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>
