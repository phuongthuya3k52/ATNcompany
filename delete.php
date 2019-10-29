<?php
require("dbconnector.php");
$id = $_POST['productid'];
$sql = "DELETE FROM product WHERE idToy = '$id'";
pg_query($conn,$sql); 
header("Location: /home.php");
?>
