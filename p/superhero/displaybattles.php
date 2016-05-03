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


        if(isset($_GET['id'])) {
            $superheroID = $_GET['id'];
            $sql_query = "SELECT * FROM superherobattles where superheroID = '$superheroID'";
        }
        else {
            $sql_query = "SELECT * FROM superherobattles";
        }
        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $mainSuperpower = $row['mainSuperPower'];
            $villanFought = $row['villanFought'];
            echo "<article>
            <p> The superhero known as <strong>{$firstname} {$lastname}</strong> recently fought <strong>{$villanFought}</strong> using <strong>{$mainSuperpower}</strong> </p>";
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