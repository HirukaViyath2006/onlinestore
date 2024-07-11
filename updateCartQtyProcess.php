<?php

include "connection.php";
$cartId = $_POST["c"];
$newQty = $_POST["q"];
//echo ($newQty);

$rs = Database::search("SELECT * FROM `cart` INNER JOIN `stock` ON `cart`.`stock_id` = `stock`.`id` 
WHERE `cart`.cart_id = '" . $cartId . "'");

$num = $rs->num_rows;

if ($num > 0) {

    $d = $rs->fetch_assoc();

    if ($d["qty"] >= $newQty) {
        //Update Qury
        Database::iud("UPDATE `cart` SET `cart_qty` = '" . $newQty . "' WHERE `cart_id` = '" . $cartId . "'");
        echo ("Success");
    } else {
        echo ("Your Quantity Exceded!");
    }
} else {
    echo ("Cart Icon Not Found");
}
