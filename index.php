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
  		<a href="#">Link</a>
  		<a href="#">Link</a>
  		<a href="#">Link</a>
	</div>


</body>
</html>