<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Редактировать', array('update', 'id' => $model->id), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <td class="col-lg-4"><?= $model->getAttributeLabel('title'); ?></td>
                <td><?= nl2br($model->title); ?></td>
            </tr>
            <tr>
                <td><?= $model->getAttributeLabel('text'); ?></td>
                <td><?= nl2br($model->text); ?></td>
            </tr>
            <tr>
                <td><?= $model->getAttributeLabel('seo_title'); ?></td>
                <td><?= $model->seo_title; ?></td>
            </tr>
            <tr>
                <td><?= $model->getAttributeLabel('seo_description'); ?></td>
                <td><?= $model->seo_description; ?></td>
            </tr>
            <tr>
                <td><?= $model->getAttributeLabel('seo_keywords'); ?></td>
                <td><?= $model->seo_keywords; ?></td>
            </tr>
        </table>
    </div>
</div>