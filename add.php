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
    <div>
        <div class = "header">Adding Product Form</div>
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
                        $sql = "select * from toy where toyName='$name'";
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
                            // pg_query($conn,$sql);
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
        <form action="add.php" method="POST">
            <table align="center">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="idtoy"></td>
                
                
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>idCat</td>
                    <td><input type="text" name="idcat"></td>
                
                
                    <td>Brand</td>
                    <td><input type="text" name="brand"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price"></td>

                    <td>Link Image</td>
                    <td><input type="text" name="image"></td>
                </tr>

                <tr>
                    <td colspan="2">Detail</td>
                    <td colspan="2"><input type="text" name="detail"></td>
                </tr>
                <tr>
                    <td><button type="submit" value="Add" name="submit">Add</button></td>
                    <td></td>
                </tr>
            
            </table>
        </form>
        
        <button><a href="/home.php">Back</a></button>
    </div>
</body>

</html>