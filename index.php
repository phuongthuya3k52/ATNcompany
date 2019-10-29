<!DOCTYPE html>
<html>
<head>
	<title>ATN</title>
<!-- 	<link rel="stylesheet" href="./style.php">   -->
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
  background-color: green;
}

/* Middle column */
.column.middle {
  width: 50%;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
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
	<div class="header">
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

	<div class="topnav">
  		<a href="#">Home</a>
  		<div class="dropdown">
  			<a href="#">Product</a>
			<div class="dropdown-content">
     				<?php
						$sql = "select catname from Category";

						//////////////////////////////////////
						$stmt = $pdo->prepare($sql);

						//execute the query on the server and return the result set
						$stmt->setFetchMode(PDO::FETCH_ASSOC);
						$stmt->execute();
						$resultSet = $stmt->fetchAll();
						

						foreach($resultSet as $row)
						{

							echo "<a>".$row["catname"]."</a>";		

						}
					?>		
    		</div>
    	</div>
  <a href="#">Contact</a>
</div>

<div class="row">
  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
  
  <div class="column middle">
    
  </div>
  
  <div class="column side">
    <h2>Side</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
  </div>
</div>

<div class="footer">
  <table align="center" cellspacing="15px;">
  		<td> 
			<li>20 Hai Ba Trung street, Hoan Kiem distric <br>   024 36320669/ 0961205601 </li>
					
		</td>
		<td>
			<li>100 Cau Giay street, Cau Giay distric <br>   024 36320669/ 0961205601</li>
		
		</td>
	</table>
</div>

</body>
</html>