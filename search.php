<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
	<title>Search product</title>
</head>
<body>
	<?php 
        require("dbconnector.php");
    ?>
    <div>
		<?php 
			$se=$_GET['search'];
			if (isset($_GET['search'])) 
			{
				$sql = "select * from Toy where toyname like '%" .$se ."%'";  
				$stmt = $pdo->prepare($sql); 
        		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
        		$stmt->execute();
        		$resultSet = $stmt->fetchAll();
        		if (count($resultSet)>0) {
		?>
					<br>
					<div >Results returned with the keyword "<?php echo $se ?>": </div><br> 
					<?php			
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
				}
				else
				{
					echo ('<span style="color:red; text-align:center; font-size:26px;">No results were found!</span>');
				}										
			}
			else 
			{
				echo "Enter the content to search";
			}
		?>	
		</div>

	



</body>
</html>