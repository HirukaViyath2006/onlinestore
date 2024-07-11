<?php

include "connection.php";

$rs = Database::search("SELECT * FROM `user` WHERE `user_type_id` = '2'");
$num = $rs->num_rows;

for ($i = 0; $i < $num; $i++) {
    $d = $rs->fetch_assoc();


?>

<tr>
    <td scope="row"><?php echo $d["id"] ?></th>
    <td scope="row"><?php echo $d["fname"] ?></td>
    <td scope="row"><?php echo $d["lname"] ?></td>
    <td scope="row"><?php echo $d["email"] ?></td>
    <td scope="row"><?php echo $d["mobile"] ?></td>
    <td><?php
        if ($d["status"] == 1) {
            echo ("Active");
        } else {
            echo ("Deactive");
        }
        ?></td>

</tr>
<?php
}

?>