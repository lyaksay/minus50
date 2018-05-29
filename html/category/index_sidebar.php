<?php include ('../partials/header.php')?>

<?php include ('../partials/menu_top.php')?>

<nav class="breadcrumb">
    <a class="breadcrumb-item" href="#">Женская одежда</a>
    <a class="breadcrumb-item" href="#">Джинсы</a>
    <span class="breadcrumb-item active">Узкие джинсы</span>
</nav>

<div class="container-fluid content">
    <div class="row">
        <div class="col-md-2 float-left">
            <div class="catalog__menu">
                <ul class="level__1">
                    <li><a class="item__category" href="">Женщинам</a></li>
                    <li><a class="item__category" href="">Мужчинам</a></li>
                    <li><a class="item__category" href="">Детям</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="row item__list">
                <?php
                for($i=0;$i<4;$i++) {
                    include ('product_item.php');
                }
                ?>
            </div>
            <div class="row item__list">
                <?php
                for($i=0;$i<4;$i++) {
                    include ('product_item.php');
                }
                ?>
            </div>
            <div class="row item__list">
                <?php
                for($i=0;$i<4;$i++) {
                    include ('product_item.php');
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include ('../partials/footer.php')?>
