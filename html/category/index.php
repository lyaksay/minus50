<?php include ('../partials/header.php')?>

<?php include ('../partials/menu_top.php')?>

<nav class="breadcrumb">
    <a class="breadcrumb-item" href="#">Женская одежда</a>
    <a class="breadcrumb-item" href="#">Джинсы</a>
    <span class="breadcrumb-item active">Узкие джинсы</span>
</nav>

<div class="container-fluid content">
    <div class="row">
        <div class="col-md-12">
            <div class="row item__list justify-content-center">
                <?php
                for($i=0;$i<5;$i++) {
                    include ('product_item.php');
                }
                ?>
            </div>
            <div class="row item__list justify-content-center">
                <?php
                for($i=0;$i<5;$i++) {
                    include ('product_item.php');
                }
                ?>
            </div>
            <div class="row item__list justify-content-center">
                <?php
                for($i=0;$i<5;$i++) {
                    include ('product_item.php');
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include ('../partials/footer.php')?>
