<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="unsemantic-grid-responsive-tablet.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Amiri:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>

    <a href="in.php"> <img src="logo.png" id="logo"></a>
    <h1>Bug Tracker</h1>
    <h3>Keeping trackof all the pesky little bugs</h3>

</header>
<main class="grid-container">
    <nav class="grid-33">
        <ul id="mainlist">
            <li><a href="showbugs.php">All Bug Items</a></li>
            <li><a href="showBugs.php?category=Android Bugs">Android Bugs</a></li>
            <li><a href="showbugs.php?category=iOS Bugs">iOS Bugs</a></li>
            <li><a href="showbugs.php?category=Windows Bugs">Windows Bugs</a></li>
            <li><a href="addbugs.php">Insert Bugs</a></li>
        </ul>

    </nav>
    <aside class="grid-66">
        <?php
        /**
         * Created by PhpStorm.
         * User: Aaru
         * Date: 25/04/2016
         * Time: 21:52
         */
        include('connection.php');
        $category=$_GET["category"];
        $sql = "SELECT * FROM bugs WHERE bugCategory='$category'";

        $result =mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo  "Bub ID:  ".$row["bugID"]. "<br>Bug Name:  " . $row["bugName"]. "<br>Bug Summary:  " . $row["bugSummary"].  "<br>Bug Category " . $row["bugCategory"]." " ."<br>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </aside>
</main>
<footer>
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>

</body>
</html>