<?php 
require_once './dbconnector.php';  
if(isset($_POST["username"]) && isset($_POST["pass"]))
{
	$user = $_POST["username"];
	$pass = $_POST["pass"];
	$sql ="SELECT * FROM Account WHERE username = '$user' AND password= '$pass'";
	$rows = pg_query($sql);
	if(pg_num_rows($rows)==1) { ?>
		<script>
            alert("Login successfully!!");
        </script>
    <?php
    } else { 
        ?>
            <script>
                alert("Wrong Username/Password");
                window.location.href = "/index.php";
            </script>
        <?php }
}
?>
<!DOCTYPE html>
<html>
<head>

	<title>ATN Store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<div class="header"><h1>Product</h1></div>
		<div class="content">
			<form action="search.php" method="GET">
				<div style="text-align: right">
					<input type="text" name="search" style="background-color: white; border:1px solid"> <input type="submit" value="Search" style="background-color: white; border:1px solid">
				</div>	
			<br>
			</form>

			<table border ="1px solid #333" style="text-align:center" >
			<tr>
				<th class="Bz">ID</th> 
				<th class="Bz">Image</th>
				<th class="Bz">Name</th>
				<th class="Bz">ID Category</th>
				<th class="Bz">Brand</th>
				<th class="Bz">Price($)</th>
				<th class="Bz">Detail</th>
			</tr>
	<?php
        require_once 'connect.php';
        $sql = "SELECT * FROM Toy"; 
        $stmt = $pdo->prepare($sql); 
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
        foreach ($resultSet as $row) {
        ?>
			<tr>
				<td class="Bz"><?= $row['idtoy']?></td> 
				<td class="Bz"> <img src=" <?= $row['image']?>" alt="" width="100%" height="100%"></td> 
				<td class="Bz"><?= $row['toyname']?></td>
				<td class="Bz"><?= $row['idcat']?></td>
				<td class="Bz"><?= $row['brand']?></td>
				<td class="Bz"><?= $row['price']?></td>
				<td class="Bz"><?= $row['decrips']?></td>
				<td>
				<form action='/delete.php' method="POST">
		        	<input type='hidden' name='idtoy' value='<?php echo $row['idtoy']?>'>
		        	<input class="edit-btn" type='submit' value='Delete'>
		        </form> <br>
		        </td>
			</tr>
	<?php
	}
	?>
			</table></br>
		</div>
		<div class="last"><button><a href="/add.php" style="font-weight: 1px, font-size: 22px">Add</a></button></div>
</body>
</html>