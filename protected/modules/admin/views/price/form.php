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
            'id' => 'price-form',
            'enableAjaxValidation' => false,
            'enableClientValidation' => true,
        )); ?>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'name'); ?></td>
                <td>
                    <?= $form->textField($model, 'name', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'name'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'pricecategory_id'); ?></td>
                <td>
                    <?= $form->dropDownList(
                        $model,
                        'pricecategory_id',
                        CHtml::listData(PriceCategory::model()->findAll(), 'id', 'name'),
                        array('empty' => 'Выберите категорию', 'class' => 'form-control')
                    ); ?>
                    <?= $form->error($model, 'pricecategory_id'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'price'); ?></td>
                <td>
                    <?= $form->textField($model, 'price', array('class' => 'form-control')); ?>
                    <?= $form->error($model, 'price'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?= $form->labelEx($model, 'text'); ?></td>
                <td>
                    <?= $form->textArea($model, 'text', array('class' => 'form-control', 'rows' => 5)); ?>
                    <?= $form->error($model, 'text'); ?>
                </td>
            </tr>
        </table>
        <p class="text-center">
            <?= CHtml::submitButton('Сохранить', array('class' => 'btn btn-default text-center')); ?>
        </p>
        <?php $this->endWidget(); ?>
    </div>
</div>