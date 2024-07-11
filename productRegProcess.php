<?php

  include("connection.php");

  $product = $_POST["p"];
  $brand = $_POST["b"];
  $catogory = $_POST["c"];
  $color = $_POST["co"];
  $size = $_POST["s"];
  $description = $_POST["d"];

  if (empty($product)) {
     echo ("Please Enter Product Name");
  } else if (empty($description)){
     echo ("Please Enter Product description");
  } else if (empty($_FILES["i"])) { 
     echo ("Please Upload Your Product Image");
  } else {

     $rs = Database::search("SELECT * FROM `product` WHERE `name` = '" . $product . "'");
     $num = $rs->num_rows;

     if ($num > 0) {
         echo ("Your Product Name is Alredy Exists");
     } else {
         $path = "Resources/ProductImg//" . uniqid() . ".png";
         move_uploaded_file($_FILES["i"]["tmp_name"], $path);

         Database::iud("INSERT INTO `product` (`name`, `description`, `path`, `brand_id`, `catogary_id`, `color_id`, `size_id` )
         VALUES ('" . $product . "', '" . $description . "', '" . $path . "', '" . $brand . "', '" . $catogory . "', '" . $color . "', '". $size ."')");

         echo ("Success");
     }
     

  }
  
