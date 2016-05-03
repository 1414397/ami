<?php

include("connection.php");


$sql="SELECT * FROM superheros" ;


$result =mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p>" . $row['superheroID']."    " . $row['firstName'] . "    " .$row['lastName'] ."    " . $row['mainSuperpower'] ."<p>";
    }
}
else {
    echo "0 results";
}

$result->close();
$db->close();

header("location:index.html");
?>