<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>superhero home page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css" >
    <link href='https://fonts.googleapis.com/css?family=Amiri:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <h1>Superhero system</h1>
    </p>
</header>
<main class="grid-container">
    <nav class="grid-33">
        <ul id="mainlist">
            <li> <a href="insertsuperhero.php">Superhero form</a> </li>
            <li> <a href="showsuperhero.php">Show Superheros</a>  </li>
            <li> <a href="battle.php">Battele form</a> </li>
            <li> <a href="displaybattles.php">Show Battles</a>  </li>
        </ul>

    </nav>
    <aside class="grid-66">
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

        ?>
    </aside>
</main>
<footer>
    <hr>
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>
</body>
</html>