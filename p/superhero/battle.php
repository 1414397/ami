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
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // execute if requested using HTTP GET Method
            ?>
            <form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
                <label>Select the superhero that faught in this battle</label>
                <select name="superhero">
                    <?
                    include ("connection.php");
                    $sql= "SELECT * FROM superheros";
                    $result =mysqli_query($db, $sql) ;
                    while($row = $result->fetch_array()) {
                        $firstname = $row['firstName'];
                        $lastname = $row['lastName'];
                        $superheroID = $row['superheroID'];
                        echo "<option value='{$superheroID}'>{$firstname} {$lastname}</option>";
                    }
                    ?>
                </select><br>
                 <br><br>
                <label>The villan fought</label><input type="text" name="villan" maxlength="50" required>
                <br><br><input type="submit" value="Submit">
            </form>
            <?
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // execute if requested using HTTP POST Method


            include("connection.php");

            $superheroID=$_POST["superheroID"];
            $villan=$_POST["villan"];


        $sql = "INSERT INTO battles (superheroID, villanFought) VALUES ('$superheroID', '$villan')";
            if (mysqli_query($db, $sql)) {
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
            header("location:displaybattles.php");


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
