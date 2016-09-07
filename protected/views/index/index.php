<section class="content content_main">
    <div id="slider" class="owl-carousel">
        <?php foreach ($a_slide as $item) { ?>
            <div class="item">
                <img src="<?= ImageIgosja::resize($item->image_id, 1600, 500); ?>" alt=""/>
            </div>
        <?php } ?>
    </div>
    <div class="wrap">
        <div class="photo-albom"><img src="/img/photo-albom.png" alt=""></div>
        <div class="clearfix b-imgs">
            <?php for ($i=0; $i<12; $i++) { ?>
                <?php
                if (in_array($i, array(0, 1, 3, 4, 8, 9, 10, 11))) { $width = 290; $height = 290; }
                elseif (in_array($i, array(2, 7))) { $width = 590; $height = 290; }
                elseif (in_array($i, array(5, 6))) { $width = 290; $height = 590; }
                ?>
                <?php
                if (in_array($i, array(0, 1, 4, 9, 10, 11))) { $css = ''; }
                elseif (in_array($i, array(2, 7))) { $css = 'b-portfolio__item_width'; }
                elseif (in_array($i, array(3, 8))) { $css = 'b-portfolio__item_mr10'; }
                elseif (in_array($i, array(5, 6))) { $css = 'b-portfolio__item_height'; }
                ?>
                <?php if (in_array($i, array(0, 5, 6, 10))) { ?>
                    <div class="b-imgs__item b-imgs__item_1">
                <?php } elseif (in_array($i, array(2, 7))) { ?>
                    <div class="b-imgs__item b-imgs__item_2">
                <?php } ?>
                <?php if (isset($a_album[$i])) { ?>
                    <?php
                    if (isset($a_album[$i]->main->image_id)) {
                        $photo_main_id = $a_album[$i]->main->image_id;
                        $photo_main_alt = $a_album[$i]->main->alt;
                    } elseif (isset($a_album[$i]->photo[0]->image_id)) {
                        $photo_main_id = $a_album[$i]->photo[0]->image_id;
                        $photo_main_alt = $a_album[$i]->photo[0]->alt;
                    } else {
                        $photo_main_id = 0;
                        $photo_main_alt = '';
                    }
                    $photo_hover_id = (isset($a_album[$i]->photo[1]->image_id) ? $a_album[$i]->photo[1]->image_id : 0);
                    $photo_hover_alt = (isset($a_album[$i]->photo[1]->alt) ? $a_album[$i]->photo[1]->alt : '');
                    ?>
                    <?= CHtml::link(
                        '<img
                            src="' . ImageIgosja::resize($photo_hover_id, $width, $height) . '"
                            alt="' . $photo_hover_alt . '"
                            class="b-portfolio__item__img-hover"
                         >
                         <img src="' . ImageIgosja::resize($photo_main_id, $width, $height) . '" alt="' . $photo_main_alt . '">
                         <div class="b-portfolio__item_in">
                            <div class="b-portfolio__item__category">' . $a_album[$i]->category->name . '</div>
                            <div class="b-portfolio__item__title">' . $a_album[$i]->name . '</div>
                            <div class="b-portfolio__item__btn">Смотреть</div>
                        </div>',
                        array('portfolio/view', 'id' => $a_album[$i]->url),
                        array('class' => 'b-portfolio__item ' . $css)
                    ); ?>
                <?php } ?>
                <?php if (in_array($i, array(1, 4, 5, 6, 9, 11))) { ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="text-b">
            <h1><?= $o_mainpage->title; ?></h1>
            <?= $o_mainpage->text; ?>
            <div class="text-b__soc">
                <?= $this->renderPartial('/include/social'); ?>
            </div>
        </div>
    </div>
</section>