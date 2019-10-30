<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
	<title>edit</title>
</head>
<body>
	<div>aaaa</div>
	<?php 
        require("dbconnector.php");   
        if(isset($_GET['id']))
        {
        	$tid=$_GET['id'];
           	$sql = "select * from Toy where where idToy='" .$tid . "'";
			$stmt = $pdo->prepare($sql1); 
			$stmt->setFetchMode(PDO::FETCH_ASSOC); 
			$stmt->execute();
			$resultSet = $stmt->fetchAll();
			foreach ($resultSet as $row) {
	?>
			<table align="center" border ="0px" style="font-size: 24px; width: 70%; text-align: center;" cellspacing="12px" >
            	<form action="" method="POST">
	                <tr>
	                    <td colspan="5" style="text-align:center "><h1 style="background-color: white; font-size:36px; ">Edit Product Information Form</h1></td>
	                </tr>
	                <tr>
	                	<td class="Bz"> <img src=" <?= $row['image']?>" alt="" width="100%" height="100%"></td> 
	                    <td >Product ID: </td>
	                    <td ><input type="text" name="idtoy" class="text" value="<?= $row['idtoy']?>"></td>
	                    <td></td>
	                    <td>Product name: </td>
	                    <td><input type="text" name="name" class="text" value="<?= $row['toyname']?>"></td>
	                </tr>
	                <tr>
	                	<td></td>
	                    <td >idCat: </td>
	                    <td ><input type="text" name="idcat" class="text" value="<?= $row['idcat']?>"></td>
	                    <td></td>
	                    <td>Brand: </td>
	                    <td><input type="text" name="brand" class="text" value="<?= $row['brand']?>"></td>
	                </tr>
	                 <tr>
	                 	<td></td>
	                    <td >Price: </td>
	                    <td ><input type="text" name="price" class="text" value="<?= $row['price']?>"></td>
	                    <td></td>
	                    <td>Link Image: </td>
	                    <td><input type="text" name="image" class="text" value="<?= $row['image']?>"></td>
	                </tr>
	                <tr>
	                    <td colspan="2" style="text-align: center;">
	                        <br><br><input type="submit" value="Save" name="submit" style="width: 150px; height: 30px; font-size: 18px">              
	                    </td>
	                    <td style="text-align: center;">
	                        <br><br><input type="reset" value="Reset" style="width: 150px; height: 30px; font-size: 18px">
	                    </td>
	                    <td colspan="2" style="text-align: center ;"><br><br><a href="./home.php">Back to Product List</a></td>             
	                </tr>   
	            </form>
        	</table>
		}
	<?php	
		if(isset($_POST["submit"]))
        {   
            $idtoy = $_POST["idtoy"];
            $image = $_POST["image"];
            $name = $_POST["name"];
            $idcat = $_POST["idcat"];
            $brand = $_POST["brand"];
            $price = $_POST["price"];
            $detail = $_POST["detail"];
            if ($name == ""|| $idcat == ""|| $brand == ""|| $price == ""|| $detail == ""||$image==""||$idtoy=="") 
            {
    ?>
                    <script>
                        alert("Product information should not be blank!!");
                    </script>
            <?php
            }
            else
            {
                $sql = "select * from toy where idToy='$idtoy'";
                $query = pg_query($conn, $sql);
                if(pg_num_rows($query)>0)
                {
            ?> 
                        <script>
                        	alert("The product ID is available!!");
                        </script>
            	<?php
                }
                else
                {
                    $sql = "Update Toy set idToy='" .$idtoy ."',idcat=" .$idcat .",toyName='" .$name ."',brand=" .$brand .",price=" .$price .",image='" .$image ."',decrips='" .$detail ."' where idToy='" .$idtoy . "'"  ;
                    $res =pg_query($conn, $sql);
                    if(!$res) {
                        echo pg_last_error($conn);
                    } 
                    else 
                    {
                ?> 
                            <script>
                                alert("Edit successful!");
                                window.location.href = "/home.php";
                            </script>
                        <?php
                    }
                }
            }
        }
	?>
</body>
</html>