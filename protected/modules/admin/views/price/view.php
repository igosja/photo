<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('index'), array('class' => 'btn btn-default')); ?>
            </li>
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
                <td class="col-lg-4">
                    Название
                </td>
                <td>
                    <?= $model->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Категория
                </td>
                <td>
                    <?= $model->pricecategory->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Цена, грн
                </td>
                <td>
                    <?= $model->price; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Описание
                </td>
                <td>
                    <?= $model->text; ?>
                </td>
            </tr>
        </table>
    </div>
</div>