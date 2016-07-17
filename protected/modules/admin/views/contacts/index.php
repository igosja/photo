<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center"><?= $this->h1; ?></h1>
        <ul class="list-inline preview-links text-center">
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
                    Lifecell
                </td>
                <td>
                    <?= $model->lifecell; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Киевстар
                </td>
                <td>
                    <?= $model->kyivstar; ?>
                </td>
            </tr>
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?= $model->email; ?>
                </td>
            </tr>
            <tr>
                <td>
                    SEO title
                </td>
                <td>
                    <?= $model->seo_title; ?>
                </td>
            </tr>
            <tr>
                <td>
                    SEO description
                </td>
                <td>
                    <?= $model->seo_description; ?>
                </td>
            </tr>
            <tr>
                <td>
                    SEO keywords
                </td>
                <td>
                    <?= $model->seo_keywords; ?>
                </td>
            </tr>
        </table>
    </div>
</div>