<?php

include("connection.php");


$sql_query ="SELECT * FROM superheros" ;


$result = $db->query($sql_query);

while($row = $result ->fetch_array())
{
    echo "<p>" . $row['superheroID'] . $row['firstName'] . $row['lastName'] . $row['mainSuperpower'] ."<p>";
}

$result->close();
$db->close();

header("location:index.php");


?>