<?php

include "connection.php";

$brand = $_POST["b"];
//echo($brand);

if (empty($brand)) {
    echo ("Please Enter Your Brand");
} else if (strlen($brand) > 20) {
    echo ("Your Brand Shoud be Less Than 20 Characters");
} else {


    $rs = Database::search("SELECT * FROM `brand` WHERE `brand_name` = '" . $brand . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your brand Is Alredy Exits");
    } else {
        Database::iud("INSERT INTO `brand`(`brand_name`) VALUES ('" . $brand . "')");
        echo ("Success");
    }
}
