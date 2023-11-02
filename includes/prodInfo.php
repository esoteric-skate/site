<?php

$price = "ERROR NOT FOUND";
$prettyName = "ERROR NOT FOUND";
$desc = "ERROR NOT FOUND";
$image = "ERROR NOT FOUND";

function getProduct($item) {

    switch ($item) {
        case "deck1":
            $price = 60;
            $prettyName = "Astral Deck";
            $desc = "This is info about the deck. Made of Maple. And some more info";
            $image = "deck1.png";
            break;
        case "deck2":
            $price = 60;
            $prettyName = "Etherial Deck";
            $desc = "This is info about the deck. Made of Maple. And some more info";
            $image = "deck2.png";
            break;
        case "truck1":
            $price = 55;
            $prettyName = "Unreal Trucks (Set Of 2)";
            $desc = "This is info about the unreal trucks. And some more info";
            $image = "truck1.png";
            break;
        case "truck2":
            $price = 80;
            $prettyName = "Mythic Trucks (Set Of 2)";
            $desc = "This is info about the mythic trucks. And some more info";
            $image = "truck2.png";
            break;
        case "wheels":
            $price = 40;
            $prettyName = "Glide Wheels (Set Of 4)";
            $desc = "This is info about the wheels. And some more info";
            $image = "wheel.png";
            break;
        case "wheels2":
            $price = 40;
            $prettyName = "Spectre Wheels (Set Of 4)";
            $desc = "This is info about the wheels. And some more info";
            $image = "wheel2.png";
            break;
        case "bearing":
            $price = 30;
            $prettyName = "Surreal Bearings (Set Of 8)";
            $desc = "This is info about the bearings. And some more info";
            $image = "bearing.png";
            break;
        case "tool":
            $price = 15;
            $prettyName = "Skate Tool";
            $desc = "This is info about the tool. And some more info";
            $image = "tool.png";
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
