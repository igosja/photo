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
<form>
<div class="row">
    <div class="col-lg-12">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Название</th>
                    <th class="col-lg-2">Дата публикации</th>
                    <th class="col-lg-1">Статус</th>
                    <th class="col-lg-2"></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input
                                name="search[name]"
                                class="form-control"
                                value="<?= isset($_GET['search']['name']) ? $_GET['search']['name'] : ''; ?>"
                            />
                        </td>
                        <td></td>
                        <td colspan="2"><input type="submit" class="form-control" value="Искать"/></td>
                    </tr>
                <?php foreach ($model as $item) { ?>
                    <tr>
                        <td><?= $item->name; ?></td>
                        <td><?= date('d.m.Y', $item->date); ?></td>
                        <td class="text-center">
                            <?= CHtml::link(
                                '<i class="fa fa-power-off"></i>',
                                array('status', 'id' => $item->id),
                                array('class' => 'btn btn-circle btn-' . ((0 == $item->status) ? 'danger' : 'success'))
                            ); ?>
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
                                array('class' => 'btn btn-default', 'onClick'=>'return confirm("Вы уверены?");')
                            ); ?>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?= $this->renderPartial('/include/pagination', array('pages' => $pages)) ?>
        </div>
    </div>
</div>
</form>