<div class="tab-pane fade <?= isset($class) ? $class : ''; ?>" id="seo">
    <div class="dataTable_wrapper">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_title'); ?></td>
                <td>
                    <?php echo $form->textField($model, 'seo_title', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_title'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_description'); ?></td>
                <td>
                    <?php echo $form->textArea($model, 'seo_description', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_description'); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3"><?php echo $form->labelEx($model, 'seo_keywords'); ?></td>
                <td>
                    <?php echo $form->textArea($model, 'seo_keywords', array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_keywords'); ?>
                </td>
            </tr>
        </table>
    </div>
</div>