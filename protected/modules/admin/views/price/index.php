<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Создать', array('update', 'id' => 0), array('class' => 'btn btn-default')); ?>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="sort-table">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Цена, грн</th>
                    <th class="col-lg-1">Статус</th>
                    <th class="col-lg-2"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($model as $item) { ?>
                    <tr class="sorter" data-id="<?= $item->id; ?>" data-controller="<?= $this->uniqueid; ?>">
                        <td><?= $item->name; ?></td>
                        <td><?= $item->category->name; ?></td>
                        <td><?= $item->price; ?></td>
                        <td class="text-center">
                            <?= CHtml::link(
                                '<i class="fa fa-power-off"></i>',
                                array('status', 'id' => $item->id),
                                array('class' => 'btn btn-circle btn-' . ((0 == $item->status) ? 'danger' : 'success'))
                            ); ?>
                            </a>
                        </td>
                        <td class="text-center">
                            <?= CHtml::link(
                                '<i class="fa fa-eye"></i>',
                                array('view', 'id' => $item->id),
                                array('class' => 'btn btn-default')
                            ); ?>
                            <?= CHtml::link(
                                '<i class="fa fa-pencil"></i>',
                                array('update', 'id' => $item->id),
                                array('class' => 'btn btn-default')
                            ); ?>
                            <?= CHtml::link(
                                '<i class="fa fa-trash"></i>',
                                array('delete', 'id' => $item->id),
                                array('class' => 'btn btn-default')
                            ); ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>