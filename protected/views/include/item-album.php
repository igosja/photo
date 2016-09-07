<?php
if (isset($item->main->image_id)) {
    $photo_main_id = $item->main->image_id;
    $photo_main_alt = $item->main->alt;
} elseif (isset($item->photo[0]->image_id)) {
    $photo_main_id = $item->photo[0]->image_id;
    $photo_main_alt = $item->photo[0]->alt;
} else {
    $photo_main_id = 0;
    $photo_main_alt = '';
}
$photo_hover_id = (isset($item->photo[1]->image_id) ? $item->photo[1]->image_id : 0);
$photo_hover_alt = (isset($item->photo[1]->alt) ? $item->photo[1]->alt : '');
?>
<?= CHtml::link(
    '<img
        src="' . ImageIgosja::resize($photo_hover_id, 390, 390) . '"
        alt="' . $photo_hover_alt . '"
        class="b-portfolio__item__img-hover"
     >
     <img src="' . ImageIgosja::resize($photo_main_id, 390, 390) . '" alt="' . $photo_main_alt . '">
     <div class="b-portfolio__item_in">
        <div class="b-portfolio__item__category">' . $item->category->name . '</div>
        <div class="b-portfolio__item__title">' . $item->name . '</div>
        <div class="b-portfolio__item__btn">Смотреть</div>
    </div>',
    array('portfolio/view', 'id' => $item->url),
    array('class' => 'b-portfolio__item')
); ?>