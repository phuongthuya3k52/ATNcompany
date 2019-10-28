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
			.dropdown {display: inline-block;}
			.dropdown:hover .dropdown-content {display: block;}
			.dropbtn {
  				display: inline-block;  				
  				text-align: center;
  				text-decoration: none;
  				background-color: #359722;
			}
			.dropdown-content {
  				display: none;
 			 	position: absolute;
 			 	background-color: #f9f9f9;
			 	min-width: 170px;
 			 	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  				z-index: 1;
			}

			.dropdown-content a {
 			 	color: black;
  				padding: 5px 15px;
  				text-decoration: none;
  				display: block;
  				text-align: left;
			}

			.dropdown-content a:hover {background-color: #C6C6C6;}

	.content{
			height:1170px;
			width: 100%;
			float:left;
			background-color:yellow;
			overflow: visible;
		}
		.leftmain{
				height: 1170px;
				width: 300px;
				float:left;	
				background-color: white;		
			}
			.leftmain div{
				position: sticky;
				top:50px;
				text-align: center;
			}
		.main{
				overflow: auto;
				width: 1277px;
				float:left;
				height: 1170px;
				background-color:#FFD3DF;	
			}
			.button1 {
				height: 400px;
				width: 400px;
  				background-color: white; 
 				color: black; 
  				border: 10px solid #4CAF50;
  				float: right;
				}
			.title{
				font-size: 26px; width: 100%; text-align: center; font-weight: bold;
			}
			.product{
				background-color:#FFD3DF;
				height: 345px;
				width: 297px;
				margin: 0.5%;
				float:left;
			}
			.name{
				background-color: #D4A5FC;
				font-size: 20px;
				font-weight: bold;
				text-align: center;
				vertical-align: middle;
				vertical-align: middle;
				height:42.5px;
			}
			.image{
				background-color:#FFFFFF;
				height:225px;
			}
			.price{
				background-color: #D4A5FC;
				font-size: 22px;
				font-weight: bold;
				text-align: center;
				vertical-align: middle;
				height:41.5px;
			}
			.button2{
				height: 41.5px;
				width: 120px;
  				background-color: white; 
 				color: red; 
 				font-weight:bold;
 				font-size:24px;
  				border: 5px solid #4CAF50;
  				float: right;
			}
			.imgdetail{
				height: 500px;
				width: 700px;
				background-color: white;
				float: left;
				border: 1px solid black;
			}
			.imginfo{
				height: 500px;
				width:400px;
				background-color: white;
				float: right;
				margin-right: 80px;
				border: 1px solid black;
			}
				.imginfo th{
					font-size: 40px;
					font-weight: bolder;
					color: purple;
				}
				.imginfo li {
					font-size: 22px;
					font-weight: bolder;
					color: green;
					margin-left: 20px;
				}
				.imginfo td{
					font-size: 20px;
				}
				.button3{
				height: 50px;
				width: 170px;
				margin-left: 20px;
  				background-color: red; 
 				color: white; 
 				font-weight:bold;
 				font-size:26px;
 				text-align: center;
 				vertical-align: middle;
  				border: 3px solid black;
  				float: left;
  				text-decoration: none;
			}
			.detai{
				float: left;
				height: 400px;
				width: 1200px;
				text-align: justify;
			}
				.detai li{
					font-weight:bold;
					font-size: 22px;
					color: green;
				}
				.detai div{
					font-size: 20px;
				}
				
			.text{
				height: 25px; width: 250px;
			}	
			.text1{
				height: 300px; width: 250px; overflow: auto;
			}

			.pagenumber{
				text-align: center; float: left; width: 100%;
			}
				.pagenumber a{
					text-decoration: none;
					color: black;
				}
			
			.rightmain{
				height: 1170px;
				width: 310px;
				float:right;	
				background-color: white;				
			}
				.rightmain div{
					position: sticky;
					top:50px;
					text-align: center;
				}
	.footer{
			height:150px;
			clear:both;
			background-color:#EAE6E6;
			color:black;
		}
		.footer a{
				text-decoration: none;
			}
		.footer th{
				font-size: 20px;				
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
		<div class="menubar">
		<ul >
			<li><a href="./home1.php">Home</a></li>
			 <li class="dropdown">
    			<a href="./product.php" class="dropbtn">Product</a>
    			<div class="dropdown-content">
     				<?php
						$sql = "select * from Category";
						//////////////////////////////////////
						$stmt = $pdo->prepare($sql);
						//execute the query on the server and return the result set
						$stmt->setFetchMode(PDO::FETCH_ASSOC);
						$stmt->execute();
						$resultSet = $stmt->fetchAll();
						$resultSet as $Category;
				

						for ($i=0; $i<count($Category);$i++)
						{
					?>
						<a href="./productbycat.php?idCat=<?=$Category[$i][0]?>">
								<?=$Category[$i][1]?>								
							</a>
					<?php 
						}
					?>
    			</div>
  			</li>
			<li><a href="./contact.php">Contact</a></li>

			
		</ul>

	</div>	 

</div>
		
		
	
	<div class="content">
		<div class="leftmain">
			<!-- <div ><img src="./images/Baner.jpg" alt="" width="250px"></div> -->
		</div>
		

		<div class="main">
			<!-- <div></div>
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
					</div>
				</div>	
					
			</div>	 -->	

		</div>


		<div class="rightmain">
			<!-- <div><img src="./images/Baner.jpg" alt="" width="250px"></div>  -->
		</div>
	</div>


	
<!-- link Footer -->
	<div class="footer">
		<table align="center" cellspacing="15px;" >
			<tr>
							
				<th>Introduction</th>
				<td></td>
				<th colspan="2">Address</th>
				
						
			</tr>
			<tr>
				
				<td>
					The system of Imported Fruits fresh fruit stores <br>
					provides high quality fruits imported from reputable <br>
					countries from the US, Australia, Canada, South Africa, <br>
					New Zealand, Japan, Korea... 
					<a href="introduction.php"><i>more</i></a>			
					
 				</td>
				<td></td>

				<td> 
					<li>20 Hai Ba Trung street, Hoan Kiem distric <br>   024 36320669/ 0961205601 </li>
					
				</td>
				<td>
					<li>100 Cau Giay street, Cau Giay distric <br>   024 36320669/ 0961205601</li>
					
				</td>
				<td>
						
<!--						<li><a href="">Shopping cart</a></li>  -->
				</td>
			
			</tr>
		</table>
	</div> 
	
</body>
</html>