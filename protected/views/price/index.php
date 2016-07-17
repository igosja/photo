<?php foreach ($a_pricecategory as $item) { ?>
<?= $item->name; ?>
<br/>
<?php foreach ($item->price_view as $price) { ?>
<?= $price->name; ?>
<br/>
<?= $price->text; ?>
<br/>
<?= $price->price; ?> грн.
<br/>
Заказать
<br/>
<?php } ?>
<?php } ?>
<br/>
<?= $o_pricepage->text; ?>