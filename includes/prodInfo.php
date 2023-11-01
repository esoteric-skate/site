<?php

$price = "ERROR NOT FOUND";
$prettyName = "ERROR NOT FOUND";
$desc = "ERROR NOT FOUND";
$image = "ERROR NOT FOUND";

function getProduct($item) {

    switch ($item) {
        case "deck1":
            $price = 100;
            $prettyName = "Maple Skate Deck";
            $desc = "This is info about the deck. And some more info";
            $image = "deck.png";
            break;
        case "truck1":
            $price = 50;
            $prettyName = "Mythic Trucks (Set Of 2)";
            $desc = "This is info about the trucks. And some more info";
            $image = "truck1.png";
            break;
        case "wheels":
            $price = 25;
            $prettyName = "Glide Skate Wheels (Set Of 4)";
            $desc = "This is info about the wheels. And some more info";
            $image = "wheel.png";
            break;
        default:
            // if we cant find a product just go back to drop list
            header('Location: https://live.esoteric.host/drops.php');
            exit();
    }

    echo "<div class=\"productImg\">";
    echo "<img src=\"../assets/images/" . $image . "\" alt=\"" . $prettyName . "\" />";
    echo "</div>";
    echo "<div class=\"productDesc\">";
    echo "<h1>" . $prettyName . "</h1>";
    echo "<hr class=\"prodDivider\" />";
    echo "<p>" . $desc . "</p>";
    echo "<p>" . $price . " <span class=\"dollarSign\">$</span></p>";
    echo "</div>";
}

?>