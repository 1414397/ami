<?php
/**
 * Created by PhpStorm.
 * User: Aaru
 * Date: 03/05/2016
 * Time: 16:50
 */

include("connection.php");

$fname=$_POST["forname"];
$sname=$_POST["surname"];
$power=$_POST["power"];


$sql="INSERT INTO superheros (firstname,lastname,mainSuperpower) VALUES ('$fname','$sname','$power')";

if(mysqli_query($dp,$sql)){
}
else{
    echo "Error:".$sql."<br>".mysqli_error($db);
}

header("location:index.php");



?>