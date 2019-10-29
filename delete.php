<?php
require("dbconnector.php");
$id = $_POST['idtoy'];
$sql = "DELETE FROM product WHERE idtoy = '$id'";
pg_query($conn,$sql); 
header("Location: /home.php");
?>
