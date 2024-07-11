<?php

include "connection.php";

$cat = $_POST["c"];
//echo($cat);

if (empty($cat)) {
    echo ("Please Enter Your Catogary");
} else if (strlen($cat) > 20) {
    echo ("Your Catogary Shoud be Less Than 20 Characters");
} else {


    $rs = Database::search("SELECT * FROM `catogary` WHERE `cat_name` = '" . $cat . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Catogary Is Alredy Exits");
    } else {
        Database::iud("INSERT INTO `catogary`(`cat_name`) VALUES ('" . $cat . "')");
        echo ("Success");
    }
}
