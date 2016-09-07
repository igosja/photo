<section class="content">
    <div class="wrap">
        <?= $this->renderPartial('/include/bread'); ?>
        <?php $time = 1; foreach ($a_pricecategory as $item) { ?>
            <h1 class="m-title"><?= $item->name; ?></h1>
            <div class="price-items <?php if (1 < $time) { ?>price-items_sm<?php } ?> clearfix">
                <?php foreach ($item->price_view as $price) { ?>
                    <div class="price-item">
                        <div class="price-item__title"><?= $price->name; ?></div>
                        <div class="price-item__text">
                            <?= $price->text; ?>
                        </div>
                        <div class="price-item__price">Цена: <strong><?= $price->price; ?> грн</strong></div>
                        <a
                            href="javascript:;"
                            data-selector="form-order"
                            class="price-item__btn overlayElementTrigger"
                            data-id="<?= $price->id; ?>"
                        >
                            Заказать
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="text-b text-b_empty"></div>
        <?php $time++; } ?>
        <div class="text-b">
            <h1><?= $o_pricepage->title; ?></h1>
            <?= $o_pricepage->text; ?>
            <div class="text-b__soc">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>
