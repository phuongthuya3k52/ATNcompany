<div class="top">
		<table width="1239px">
			<tr>
				<td><a href="./home1.php"><img src="./images/logo.jpg" alt="" width="160px" height="160px"></a></td>
				<td style= "font-weight:bold; font-size:50px; text-align: center;">
					Welcome to Imported Fruits
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
	<div class="menubar">
		<ul >
			<li><a href="./home1.php">Home</a></li>
			<li><a href="./introduction.php">Introduction</a></li>
<!--			<li><a href="">Product</a></li> -->

			<li class="dropdown">
    			<a href="./product.php" class="dropbtn">Product</a>
    			<div class="dropdown-content">
     				<?php
						$sql = "select * from country";
						$country = query($sql);

						for ($i=0; $i<count($country);$i++)
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

	</div>	