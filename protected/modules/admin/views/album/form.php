<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link(
                    'Назад',
                    isset($model->id) ? array('view', 'id' => $model->id) : array('index'),
                    array('class' => 'btn btn-default')
                ); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'album-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        )); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#main" data-toggle="tab">Общая информация</a></li>
            <li><a href="#seo" data-toggle="tab">SEO</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="main">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'name'); ?></td>
                        <td>
                            <?= $form->textField($model, 'name', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'name'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'url'); ?></td>
                        <td>
                            <?= $form->textField($model, 'url', array('class' => 'form-control')); ?>
                            <?= $form->error($model, 'url'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'photocategory_id'); ?></td>
                        <td>
                            <?= $form->dropDownList(
                                $model,
                                'photocategory_id',
                                CHtml::listData(PhotoCategory::model()->findAll(), 'id', 'name'),
                                array('empty' => 'Выберите категорию', 'class' => 'form-control')
                            ); ?>
                            <?= $form->error($model, 'photocategory_id'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-lg-3"><?= $form->labelEx($model, 'Фото'); ?></td>
                        <td>
                            <input type="file" name="image[]" multiple="multiple" class="form-control"/>
                        </td>
                    </tr>
                </table>
            </div>
            <?= $this->renderPartial('/include/seo-form', array('model' => $model, 'form' => $form)) ?>
        </div>
        <table class="table table-striped table-bordered table-hover" id="sort-table">
            <thead>
            <tr>
                <th class="col-lg-1">
                    Обложка
                </th>
                <th class="col-lg-6">
                    Фото
                </th>
                <th>
                    Alt
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($model->photo as $item) { ?>
                <tr
                    class="sorter"
                    data-album="<?= $model->id; ?>"
                    data-id="<?= $item->id; ?>"
                    data-controller="admin/photo"
                >
                    <td>
                        <input
                            name="photo-main"
                            type="radio"
                            value="<?= $item->id; ?>"
                            <?php if (1 == $item->main) { ?>checked<?php } ?>
                        >
                    </td>
                    <td class="col-lg-6">
                        <?php if (isset($item->image->url)) { ?>
                            <div class="col-lg-6">
                                <a href="javascript:;" class="thumbnail">
                                    <img src="<?= $item->image->url; ?>"/>
                                </a>
                            </div>
                        <?php } ?>
                        <?= CHtml::link('<i class="fa fa-times"></i>', array('image', 'id' => $item->id)); ?>
                    </td>
                    <td>
                        <input
                            class="form-control"
                            name="alt[<?= $item->id; ?>]"
                            type="text"
                            value="<?= $item->alt; ?>"
                        >
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>