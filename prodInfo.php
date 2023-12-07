<?php

$price = "ERROR NOT FOUND";
$prettyName = "ERROR NOT FOUND";
$desc = "ERROR NOT FOUND";
$image = "ERROR NOT FOUND";

function getProduct($item)
{
	$sizeTable = "<table>
<tr>
  <th>Deck Width</th>
  <th>Axel Width</th>
</tr>
<tr>
  <td>7.5 in</td>
  <td>8 in</td>
</tr>
<tr>
  <td>8 in</td>
  <td>8.35 in</td>
</tr>
<tr>
  <td>8.25 in</td>
  <td>8.625 in</td>
</tr>
</table>";

	switch ($item) {
		case "deck1":
			$price = 60;
			$prettyName = "Astral Deck";
			$desc = "The Astral Deck; one of two decks available in the first wave. Made of Maple wood harvested from the most somber trees, crafted with the most sinister rituals and spells that you've never even heard of. Available in 7.5 inches, 8 inches, and 8.25 inches.";
			$image = "deck1.png";
			$table = $sizeTable;
			break;
		case "deck2":
			$price = 60;
			$prettyName = "Etherial Deck";
			$desc = "The Etherial Deck; one of two decks available in the first wave. Made of maple from the darkest forests, polished with the finest giant's bone powder. Available in 7.5 inches, 8 inches, and 8.25 inches. ";
			$image = "deck2.png";
			$table = $sizeTable;
			break;
		case "truck1":
			$price = 55;
			$prettyName = "Unreal Trucks (Set Of 2)";
			$desc = "The Unreal Trucks; one of two truck sets available in the first wave. Made from the strongest aluminum, forged in the dwarven forges of the north. Steady and reliable, with grade 8 kingpins. Available in 8 inches, 8.38 inches, and 8.625 inches.";
			$image = "truck1.png";
			$table = $sizeTable;
			break;
		case "truck2":
			$price = 80;
			$prettyName = "Mythic Trucks (Set Of 2)";
			$desc = "The Mythic Trucks; one of two trucks sets available in the first wave. Dipped in dragon blood, crafted from the coldest steel. Grade 8 kingpins made by the strongest blacksmiths. Available in 8 inches, 8.38 inches, and 8.625 inches.";
			$image = "truck2.png";
			$table = $sizeTable;
			break;
		case "wheels":
			$price = 40;
			$prettyName = "Glide Wheels (Set Of 4)";
			$desc = "Made from the feathers of harpies, these wheels will make you feel like you're truly flying. Available in 52mm.";
			$image = "wheel.png";
			$table = "";
			break;
		case "wheels2":
			$price = 40;
			$prettyName = "Spectre Wheels (Set Of 4)";
			$desc = "Imbued with spirits, making you feel as if you're floating above the ground. Available in 52mm.";
			$image = "wheel2.png";
			$table = "";
			break;
		case "bearing":
			$price = 30;
			$prettyName = "Surreal Bearings (Set Of 8)";
			$desc = "Crafted with the utmost care, with the best materials from all the lands for performance and durability. Easily removable for cleaning. ";
			$image = "bearing.png";
			$table = "";
			break;
		case "tool":
			$price = 15;
			$prettyName = "Skate Tool";
			$desc = "Feel like the mountain dwarves when you use this! All-in-one design, you'll never need to buy anything else for your skateboards.";
			$image = "tool.png";
			$table = "";
			break;
		default:
			header('Location: https://live.esoteric.host/drops.php');
			exit();
	}

	echo "<div class=\"productImg\">";
	echo "<img src=\"./Images/" . $image . "\" alt=\"" . $prettyName . "\" />";
	echo "</div>";
	echo "<div class=\"productDesc\">";
	echo "<h1>" . $prettyName . "&ensp;&ensp;&ensp;" . $price . " <span class=\"dollarSign\">$</span></h1>";
	echo "<hr class=\"prodDivider\" />";
	echo "<p><span class='purple'>In Store Exclusive</span></p>";
	echo "<p class=\"prodDesc\">" . $desc . "</p>";
	if ($table != null) {
		echo $table;
	}
	echo "</div>";
}
