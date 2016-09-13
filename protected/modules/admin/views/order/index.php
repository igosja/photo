<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Дата обращения</th>
                    <th>Статус</th>
                    <th></th>
                </tr>
                <?php foreach ($model as $item) { ?>
                    <tr>
                        <td><?= $item->name; ?></td>
                        <td><?= $item->tel; ?></td>
                        <td><?= $item->email; ?></td>
                        <td><?= date('d.m.Y', $item->date); ?></td>
                        <td class="text-center">
                            <?php if (0 == $item->status) { ?>NEW<?php } ?>
                        </td>
                        <td class="text-center">
                            <?= CHtml::link(
                                '<i class="fa fa-eye"></i>',
                                array('view', 'id' => $item->id),
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
            </table>
        </div>
    </div>
</div>