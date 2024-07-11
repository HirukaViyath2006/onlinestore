<?php

include("connection.php");

$productId = $_POST["p"];
$qty = $_POST["q"];
$price = $_POST["up"];

//echo($productId);

if (empty($qty)) {
    echo ("Please Enter Qty");
} else if (!is_numeric($qty)) {
    echo ("Only numbers can be enterd fro Qty");
} else if (strlen($qty) > 10) {
    echo ("Your Qty Shoud be less than 10 Characters");
} else if (empty($price)) {
    echo ("Please Enter Price");
} else if (!is_numeric($price)) {
    echo ("Only numbers can be enterd fro Price");
} else if (strlen($price) > 10) {
    echo ("Your Price Shoud be less than 10 Characters");
} else {
    //echo ("success");

    $rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '" . $productId . "' AND `price` = '" . $price . "' ");
    $num = $rs->num_rows;
    $d = $rs->fetch_assoc(); 

    if ($num == 1) {
        $newQty = $d["qty"] + $qty;
        Database::iud("UPDATE `stock` SET `qty` = '" . $newQty . "' WHERE `id` = '" . $d["id"] . "' ");
        echo ("Stock Update Successfully");
    } else {
        Database::iud("INSERT INTO `stock` (`price`, `qty`, `product_id`) VALUES ('" . $price . "', '" . $qty . "', '" . $productId . "')");
        echo ("New Stock Added Successfully");
    }
    

}
