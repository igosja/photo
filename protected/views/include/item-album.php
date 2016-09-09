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
$a_image = '';
foreach ($item->photo as $image) {
    $a_image = $a_image
        . '<li>
               <img
                   src="' . ImageIgosja::resize($image->image_id, 390, 390) . '"
                   alt="' . $image->alt . '"
                >
           </li>';
}
?>
<?= CHtml::link(
    '<ul class="slides">
        ' . $a_image . '
    </ul>
    <img
        src="' . ImageIgosja::resize($photo_main_id, 390, 390) . '"
        alt="' . $photo_main_alt . '"
        class="b-portfolio__item__img-hover"
    >
    <div class="b-portfolio__item_in">
        <div class="b-portfolio__item__category">' . $item->category->name . '</div>
        <div class="b-portfolio__item__title">' . $item->name . '</div>
        <div class="b-portfolio__item__btn">Смотреть</div>
    </div>',
    array('portfolio/view', 'id' => $item->url),
    array('class' => 'b-portfolio__item link')
); ?>