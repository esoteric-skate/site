<?php
readfile("../includes/boilerplate.html");
?>

<div class="content">
    <div class="productContainer">
        <?php
            require __DIR__ . '../../includes/prodInfo.php';
            getProduct($_GET["item"]);
        ?>
    </div>
</div>

<?php
readfile("../includes/footer.html");
?>