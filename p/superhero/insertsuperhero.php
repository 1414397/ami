
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
            <li> <a href="battle.php"></a> </li>
            <li> <a href="displaybattles.php"></a>  </li>
        </ul>

    </nav>
    <aside class="grid-66">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // execute if requested using HTTP GET Method
        ?>
        <form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
            <label> Name</label><br>
            <label>Forename</label><input type="text" name="forename" maxlength="50" required>
            <label>Surname</label><input type="text" name="surname" maxlength="50" required><br><br>
            <label>Main Superhero Power</label><input type="text" name="power" maxlength="50" required>
            <br><br><input type="submit" value="Submit">
        </form>
        <?
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // execute if requested using HTTP POST Method
            include("connection.php");

            $fname=$_POST["forename"];
            $sname=$_POST["surname"];
            $power=$_POST["power"];


            $sql="INSERT INTO superheros (firstname,lastname,mainSuperpower) VALUES ('$fname','$sname','$power')";
            if (mysqli_query($db, $sql)) {
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
            header("location:showsuperhero.php");


        }
        else {

            header("location:index.html");
        }
        ?>

    </aside>
</main>
<footer>
    <hr>
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>
</body>
</html>
