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
        require("./dbconnector.php");
    ?>
    <div class="content">
		<?php 
			$se=$_GET['search'];
			if (isset($_GET['search'])) 
			{
				$sql = "select * from Toy where toyname like '%" .$se ."%'";  
				$rows = pg_query($sql);
				if(pg_num_rows($rows)>0){
		?>
					<br><h1 style="text-align: center;" >Results returned with the keyword "<?php echo $se ?>": </h1><br>

					<div>
						<table border ="1px solid #333" style="text-align:center">
							<tr>
								<th>No.</th>
								<th class="Bz">ID</th> 
								<th class="Bz">Image</th>
								<th class="Bz">Name</th>
								<th class="Bz">ID Category</th>
								<th class="Bz">Brand</th>
								<th class="Bz">Price($)</th>
								<th class="Bz">Detail</th>
								<th></th>
							</tr>
						<?php  
							require_once 'connect.php';
							$sql1 = "select * from Toy where toyname like '%" .$se ."%'";
							$stmt = $pdo->prepare($sql1); 
					        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
					        $stmt->execute();
					        $resultSet = $stmt->fetchAll();
					        $i=0;
							foreach ($resultSet as $row) {
								$i++;
						?> 
								<tr>
									<td><?=$i?></td>
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
						</table>
					</div>
				<?php
				} else{
				?>
					<script>
                		alert("No results were found!");
               			window.location.href = "/home.php";
            		</script>
            	<?php
				}
			}
			?>
	</div>

	



</body>
</html>