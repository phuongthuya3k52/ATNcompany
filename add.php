<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">
    <title>Add</title>
</head>
<body>

        <?php 
        require("dbconnector.php");   
        if(isset($_POST["submit"]))
            {   
                $idtoy = $_POST["idtoy"];
                $image = $_POST["image"];
                $name = $_POST["name"];
                $idcat = $_POST["idcat"];
                $brand = $_POST["brand"];
                $price = $_POST["price"];
                $detail = $_POST["detail"];
                if ($name == ""|| $idcat == ""|| $brand == ""|| $price == ""|| $detail == ""||$image==""||$idtoy=="") 
                    {
                        ?>
                        <script>
                            alert("Product information should not be blank!!");
                        </script>
                        <?php
                    }
                else
                    {
                        $sql = "select * from toy where idToy='$idtoy'";
                        $query = pg_query($conn, $sql);
                        if(pg_num_rows($query)>0)
                        {
                        ?> 
                            <script>
                                alert("The product is available!!");
                            </script>
                        <?php
                        }
                        else
                        {
                            $sql = "Insert into Toy (idToy,toyName,idcat,brand,price,image,decrips) values ('$idtoy','$name','$idcat','$brand','$price','$image','$detail')";
                            $res =pg_query($conn, $sql);
                            if(!$res) {
                                echo pg_last_error($conn);
                            } else {
                            ?> 
                                <script>
                                    alert("Added successful!");
                                    window.location.href = "/home.php";
                                </script>
                            <?php
                            }
                        }
                    }
            }
			?>
     <div class ="header">
        <div style="text-align: right;"> <a href="/index.php">Logout</a></div>
    </div>
    <div>
        <table align="center" border ="0px" style="font-size: 24px; width: 70%; text-align: center;" cellspacing="12px" >
            <form action="add.php" method="POST">
                <tr>
                    <td colspan="5" style="text-align:center "><h1 style="background-color: white; font-size:36px; ">Adding New Product Form</h1></td>
                </tr>
                <tr>
                    <td >Product ID: </td>
                    <td ><input type="text" name="idtoy" class="text"></td>
                    <td></td>
                    <td>Product name: </td>
                    <td><input type="text" name="name" class="text"></td>
                </tr>
                <tr>
                    <td >idCat: </td>
                    <td ><input type="text" name="idcat" class="text"></td>
                    <td></td>
                    <td>Brand: </td>
                    <td><input type="text" name="brand" class="text"></td>
                </tr>
                 <tr>
                    <td >Price: </td>
                    <td ><input type="text" name="price" class="text"></td>
                    <td></td>
                    <td>Link Image: </td>
                    <td><input type="text" name="image" class="text"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <br><br><input type="submit" value="Add" name="submit" style="width: 150px; height: 30px; font-size: 18px">              
                    </td>
                    <td style="text-align: center;">
                        <br><br><input type="reset" value="Reset" style="width: 150px; height: 30px; font-size: 18px">
                    </td>
                    <td colspan="2" style="text-align: center ;"><br><br><a href="./home.php">Back to Product List</a></td>
                                    
                </tr>   
            </form>
        </table>        
    </div>
</body>

</html>