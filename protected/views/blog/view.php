<?= $this->renderPartial('/include/bread'); ?>
<br/>
<?php if (isset($o_blog->image->url)) { ?>
    <img src="<?= $o_blog->image->url; ?>">
<?php } ?>
<?= $o_blog->name; ?>
Дата публикации: <?= date('d.m.Y', $o_blog->date); ?>
<?= $o_blog->text; ?>