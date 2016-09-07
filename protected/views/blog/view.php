<section class="content">
    <div class="wrap clearfix">
        <?= $this->renderPartial('/include/bread'); ?>
        <h1 class="m-title m-title_article"><?= $o_blog->name; ?></h1>
        <div class="b-article__date"><?= date('d.m.Y', $o_blog->date); ?></div>
        <div class="clearfix b-article">
            <div class="b-article__left">
                <div class="blog-item__soc">
                    <a href="" class="blog-item__soc__item blog-item__soc__item_fb"><span></span></a>
                    <a href="" class="blog-item__soc__item blog-item__soc__item_ins"><span></span></a>
                    <a href="" class="blog-item__soc__item blog-item__soc__item_vk"><span></span></a>
                    <a href="" class="blog-item__soc__item blog-item__soc__item_pin"><span></span></a>
                </div>
                <?php if (isset($o_blog->image->url)) { ?>
                    <img src="<?= $o_blog->image->url; ?>">
                <?php } ?>
            </div>
            <div class="b-article__right">
                <?= $o_blog->text; ?>
            </div>
        </div>
        <div class="b-article__pager">
            <a href="javascript:;" class="b-article__pager__prev">Предидущая статья</a>
            <a href="javascript:;" class="b-article__pager__next">Следущая статья</a>
        </div>
        <div class="text-b">
            <div class="text-b__soc text-b__soc_mt">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>
