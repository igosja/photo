<?php
$start = 0;
$count = ceil($pages->itemCount / $pages->pageSize);
if (10 < $count) {
    $start = $pages->currentPage - 4;
}
if (0 > $start) {
    $start = 0;
}
$end = $pages->currentPage + 5;
if ($end > $count) {
    $end = $count;
}
?>
<nav class="text-center">
    <ul class="pagination">
        <li>
            <a href="?page=<?= $pages->currentPage ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php for ($i = $start; $i < $end; $i++) { ?>
            <li <?php if ($i == $pages->currentPage) { ?>class="active"<?php } ?>>
                <a href="?page=<?= $i + 1 ?>"><?= $i + 1 ?></a>
            </li>
        <?php } ?>
        <li>
            <a href="?page=<?= $pages->currentPage + 2 ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>