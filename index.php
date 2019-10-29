<!DOCTYPE html>
<html>
<head>
	<title>ATN</title>
<!-- 	<link rel="stylesheet" href="./style.php">   -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
  width: 20%;
  background-color: green;
}

/* Middle column */
.column.middle {
  width: 60%;
  overflow: auto;
  float: left;
  height: 1170px;
  background-color:#FFD3DF;

}


.product{
	background-color:#FFD3DF;
	height: 345px;
	width: 30%;
	margin: 1%;
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
	width: 100%;
	}
.price{
	background-color: #D4A5FC;
	font-size: 22px;
	font-weight: bold;
	text-align: center;
	vertical-align: middle;
	height:41.5px;
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
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <!-- Links -->
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="#">Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Contact</a>
	    </li>

	    <!-- Dropdown -->
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
	        Product
	      </a>
	      <div class="dropdown-menu">
	      			<?php
						$sql = "select catname from Category";

						//////////////////////////////////////
						$stmt = $pdo->prepare($sql);

						//execute the query on the server and return the result set
						$stmt->setFetchMode(PDO::FETCH_ASSOC);
						$stmt->execute();
						$resultSet = $stmt->fetchAll();
						
						?>

						<?php
						foreach($resultSet as $row)
						{					

							echo "<a class='dropdown-item' href='#'>".$row["catname"]."</a>";		

						}
						?>	
	      </div>
	    </li>
	  </ul>
	</nav>


	<div class="row">
	    <div class="column side">
	        <h2>Side</h2>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
	    </div>
	  
	    <div class="column middle">
	  		
	  			<?php
					$sql = "select * from Toy";

					//////////////////////////////////////
					$stmt = $pdo->prepare($sql);

					//execute the query on the server and return the result set
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->execute();
					$resultSet = $stmt->fetchAll();
						
				?>
				<?php
					foreach($resultSet as $row)
					{	
				?>
				<div class="product" >
					<?php				
						echo "<div class='name'>".$row["toyname"] ."</div>";		
						echo "<div class='image'><img src='" .$row["image"] ."' alt='' width='100%' height='100%'></div>";
						echo "<div class='price'>".$row["price"] ."</div>";	
					}
					?>	
				</div>
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