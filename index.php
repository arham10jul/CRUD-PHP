<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Name</label>
    <input type="text" name="txtname">
    <input type="Submit" name="btnAdd" value="add record">
</form>    
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","crud");
if(isset($_POST["btnAdd"]))
{
    $name=$_POST["txtname"];
    $check=mysqli_query($conn,"INSERT INTO `myfirst`(`id`, `name`) VALUES ('','$name')");
    if($check>0)
    {
        echo "data is inserted!";
    }
    else
    {
        echo "data is not inserted!";
    }
}


?>