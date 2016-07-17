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
                    <?= $model->category->name; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Ссылка
                </td>
                <td>
                    <?= CHtml::link($model->url, array('/portfolio/view', 'id' => $model->url), array('target' => '_blank')); ?>
                </td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <th class="col-lg-6">
                    Фото
                </th>
                <th>
                    Alt
                </th>
            </tr>
            <?php foreach ($model->photo as $item) { ?>
                <tr>
                    <td class="col-lg-6">
                        <div class="col-lg-6">
                            <a href="javascript:;" class="thumbnail">
                                <img src="<?= $item->image->url; ?>" />
                            </a>
                        </div>
                    </td>
                    <td>
                        <?= $item->alt; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>