<?php
require("dbconnector.php");
$id = $_POST['idtoy'];
$sql = "DELETE FROM Toy WHERE idtoy = '$id'";
pg_query($conn,$sql); 
header("Location: /home.php");
?>
