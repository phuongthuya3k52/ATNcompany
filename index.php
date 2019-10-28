<!DOCTYPE html>
<html>
<head>
	<title>Imported Fruits</title>
<!-- 	<link rel="stylesheet" href="./style.php">   -->
<style type="text/css">
	.top{
			width: 100%;
			height:170px;
			background-color:white;
			margin: 0 0 0 300px;
		}
			.top li{
				display: inline-block;
				margin-left: 840px;
				font-size: 20px;
			}
			.menubar{
				background-color: #359722;
				font-weight: bold;
				position: sticky;
				top:0;

			}
			.menubar ul{
				padding: 0;
				margin: 0 0 0 325px;
				list-style-type: square;
			}
			.menubar li{
				display: inline-block;
				color: #383EB1;
			}
			.menubar a{
				width: 60%
				color:red;
				font-size: 24px;
				line-height:50px;
				text-decoration: none;
				padding: 0 10px;
				display: inline-block;
			}
			.menubar a:hover{
				background-color:#FFFFFF ;
				color:#B60B0B;
			}
</style>
</head>
<body>
	<?php 
	//Refer to database
		$db = parse_url(getenv("DATABASE_URL"));

		$pdo = new PDO("pgsql:" . sprintf(
   			"host=%s;port=%s;user=%s;password=%s;dbname=%s",
   			$db["host"],
    		$db["port"],
  			$db["user"],
    		$db["pass"],
    		ltrim($db["path"], "/")
		));
	?>


<div class="top">
		<table width="1239px">
			<tr>
				<td><img src="https://seekvectorlogo.net/wp-content/uploads/2018/08/atn-asian-radio-vector-logo.png" alt="" width="160px" height="160px"></a></td>
				<td style= "font-weight:bold; font-size:50px; text-align: center;">
					Welcome to ATN
				</td>
				<td style="text-align: right; vertical-align: bottom; padding: 20px" >
					<form action="search.php" method="GET">
					<div style="font-size: 24px; color: red; font-weight: bold;">Hotline to order: <br>024 36320669 or 024 36320669</div> <br>
					<input type="text" name="search"> <input type="submit" value="Search">
					
					</form>
				 </td>
			</tr>
		</table>

</div>
		
		
	
	<!-- <div class="content">
		<?php 
			require_once("./left_atn.php");
		?>
		

		<div class="main">
			<div></div>
			<p>
				<img src="./images/fruits.jpg" alt="" height="400px" width="800px">
				<button class="button1">
						<div style="color: green; font-weight: bold; font-size:60px; text-align: center;"> Hotline to order:</div> 
						<br>

						<div style="color: red; font-weight: bold; font-size:50px; text-align: center;">
							024 36320669<br> 024 36320669
						</div>
				</button>
			</p>
			<div style="border-bottom: 2px solid green; font-weight: bold; font-size: 24px ">Bestsellers</div>
			<div>
				<?php 
				$sql = "select * from product";
				$pros = query($sql);

				//////////////
				$stmt = $pdo->prepare($sql);
				//execute the query on the server and return the result set
				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$stmt->execute();
				$resultSet = $stmt->fetchAll();
				?>

				?>
				<div class="product">
					<div class="name"><?=$pros[0][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[0][0]?>">
							<img src="<?=$pros[0][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[0][4]?>$
						
					</div>
				</div>

				<div class="product">
					<div class="name"><?=$pros[7][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[7][0]?>">
							<img src="<?=$pros[7][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[7][4]?>$
						
					</div>
				</div>

				<div class="product">
					<div class="name"><?=$pros[1][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[1][0]?>">
							<img src="<?=$pros[1][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[1][4]?>$
						
					</div>
				</div>

				<div class="product">
					<div class="name"><?=$pros[14][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[14][0]?>">
							<img src="<?=$pros[14][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[14][4]?>$
				
					</div>
				</div>	

				<div class="product">
					<div class="name"><?=$pros[19][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[19][0]?>">
							<img src="<?=$pros[19][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[19][4]?>$
						
					</div>
				</div>	
				
				<div class="product">
					<div class="name"><?=$pros[15][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[15][0]?>">
							<img src="<?=$pros[15][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[15][4]?>$
						
					</div>
				</div>

				<div class="product">
					<div class="name"><?=$pros[5][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[5][0]?>">
							<img src="<?=$pros[5][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[5][4]?>$
						
					</div>
				</div>				

				<div class="product">
					<div class="name"><?=$pros[2][2]?></div>
					<div class="image">
						<a href="./productdetail.php?pid=<?=$pros[2][0]?>">
							<img src="<?=$pros[2][5]?>" alt="" width="100%" height="100%">
						</a>				
					</div>
					<div class="price">
						Price: <?=$pros[2][4]?>$
					<!--	<button class="button2"><a href=""></a>Buy</button>  -->
					</div>
				</div>	
					
			</div>		

		</div>


		<?php 
			require_once("./right_atn.php");
		?>
	</div>


	
<!-- link Footer -->
	<?php 
		require_once("./footer_atn.php");
	?> -->
	
</body>
</html>