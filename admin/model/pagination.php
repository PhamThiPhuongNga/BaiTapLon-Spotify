<ul class="pagination " id="pagination">
    <li class="paginate_button  previous " id="dataTable_previous">
        <!-- <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a> -->
        <?php if ($current_page > 3) {
            $first_page = 1;
            ?>
            <a class="page-link text-dark" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
            <?php
        }?>
    </li>
    <li class="paginate_button page-item ">
    <?php
        if ($current_page > 1) {
            $prev_page = $current_page - 1;
            ?>
            <a class="page-link text-dark" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a>
        <?php }
        ?>
    </li>
    <li class="paginate_button d-flex ">
        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>
        <?php if ($num != $current_page) { ?>
            <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                <a class="page-link text-dark" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
            <?php } ?>
        <?php } else { ?>
            <li class="paginate_button page-item active">
            <strong class="current-page page-link "><?= $num ?></strong>
            </li>
        <?php } ?>
    <?php } ?>
    </li>
    <li class="paginate_button page-item ">
    <?php
    if ($current_page < $totalPages - 1) {
        $next_page = $current_page + 1;
        ?>
        <a class="page-link text-dark" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a>
    <?php
    }?>
    </li>
    <li class="paginate_button page-item ">
    <?php
        if ($current_page < $totalPages - 3) {
            $end_page = $totalPages;
            ?>
            <a class="page-link text-dark" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
            <?php
        }
        ?>
    </li>
</ul>
<!-- <div id="pagination">
<?php
if ($current_page > 3) {
    $first_page = 1;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
<?php
}
if ($current_page > 1) {
    $prev_page = $current_page - 1;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>">Prev</a>
<?php }
?>
<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalPages - 1) {
    $next_page = $current_page + 1;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>">Next</a>
<?php
}
if ($current_page < $totalPages - 3) {
    $end_page = $totalPages;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
    <?php
}
?>
</div> -->