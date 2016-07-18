<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('blog/index'), array('class' => 'btn btn-default')); ?>
            </li>
            <li>
                <?= CHtml::link('Редактировать', array('blog/update', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <td class="col-lg-4">
                    Заголовок
                </td>
                <td>
                    <?= $model->name; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    Дата публикации
                </td>
                <td>
                    <?= date('d.m.Y', $model->date); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Ссылка
                </td>
                <td>
                    <?= CHtml::link($model->url, array('/blog/view', 'id' => $model->url), array('target' => '_blank')); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Текст
                </td>
                <td>
                    <?= nl2br($model->text); ?>
                </td>
            </tr>
            <tr>
                <td>
                    Фото
                </td>
                <td>
                    <?php if (isset($model->image->url)) { ?>
                        <div class="col-lg-6">
                            <a href="javascript:;" class="thumbnail">
                                <img src="<?= $model->image->url ?>"/>
                            </a>
                        </div>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>
                    SEO title
                </td>
                <td>
                    <?= $model->seo_title; ?>
                </td>
            </tr>
            <tr>
                <td>
                    SEO description
                </td>
                <td>
                    <?= $model->seo_description; ?>
                </td>
            </tr>
            <tr>
                <td>
                    SEO keywords
                </td>
                <td>
                    <?= $model->seo_keywords; ?>
                </td>
            </tr>
        </table>
    </div>
</div>