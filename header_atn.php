<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
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
</body>
</html>
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
	<!-- <div class="menubar">
		<ul >
			<li><a href="./home1.php">Home</a></li>
			<li><a href="./introduction.php">Introduction</a></li>
<!--			<li><a href="">Product</a></li> -->

			<!-- <li class="dropdown">
    			<a href="./product.php" class="dropbtn">Product</a>
    			<div class="dropdown-content">
     				<?php
						//$sql = "select * from country";
						//$country = query($sql);

						//for ($i=0; $i<count($country);$i++)
						{
					?>
						<a href="./productbycountry.php?counid=<?=$country[$i][0]?>">
								Fruits from <?=$country[$i][1]?>								
							</a>
					<?php 
						}
					?>
    			</div>
  			</li>
			<li><a href="./contact.php">Contact</a></li>

			
		</ul>

	</div>	 --> -->