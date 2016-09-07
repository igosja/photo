<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
            <li>
                <?= CHtml::link('Список', array('ask/index'), array('class' => 'btn btn-default')); ?>
            </li>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <td>
                    Дата обращения
                </td>
                <td>
                    <?= date('d.m.Y', $model->date); ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    Имя
                </td>
                <td>
                    <?= $model->name; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    Email
                </td>
                <td>
                    <?= $model->email; ?>
                </td>
            </tr>
            <tr>
                <td class="col-lg-4">
                    Телефон
                </td>
                <td>
                    <?= $model->tel; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Текст
                </td>
                <td>
                    <?= nl2br($model->text); ?>
                </td>
            </tr>
        </table>
    </div>
</div>