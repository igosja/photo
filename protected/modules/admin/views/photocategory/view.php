<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('index'), array('class' => 'btn btn-default')); ?>
            </li>
            <li>
                <?= CHtml::link(
                    'Редактировать',
                    array('update', 'id' => $model->id),
                    array('class' => 'btn btn-default')
                ); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <td class="col-lg-4"><?= $model->getAttributeLabel('name'); ?></td>
                <td><?= $model->name; ?></td>
            </tr>
            <tr>
                <td><?= $model->getAttributeLabel('url'); ?></td>
                <td>
                    <?= CHtml::link(
                        $model->url,
                        array('/portfolio/index', 'id' => $model->url),
                        array('target' => '_blank')
                    ); ?>
                </td>
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