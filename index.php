<!DOCTYPE html>
<html>
<head>
	<title>Imported Fruits</title>
	<link rel="stylesheet" href="./css/style01.css"> 
</head>
<body>
	<?php 
		require_once("./db.php"); //link đến file kết nối database
		require_once("./header.php");
	?>
		
		
	
	<div class="content">
		<?php 
			require_once("./left.php");
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
			require_once("./right.php");
		?>
	</div>


	
<!-- link Footer -->
	<?php 
		require_once("./footer.php");
	?>
	
</body>
</html>