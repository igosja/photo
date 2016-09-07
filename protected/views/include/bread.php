<div class="breadchambs">
    <?php
    foreach ($this->breadcrumbs as $item) {
        if (isset($item['url'])) {
            print CHtml::link($item['text'], array($item['url']));
        } else {
            print '<span>' . $item['text'] . '</span>';
        }
    }
    ?>
</div>
