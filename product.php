<?php
include("./boilerplate.php");
?>

<div class="content">
	<div class="productContainer">
		<?php
		require __DIR__ . '/prodInfo.php';
		getProduct($_GET["item"]);
		?>
	</div>
</div>

<?php
readfile("./footer.php");
?>