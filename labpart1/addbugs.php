<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Amiri:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>

    <p><a href="in.php"> <img src="logo.png" id="logo"></a>
    <h1>Bug Tracker</h1>
    <h3>Keeping track of all the pesky little bugs</h3>
    </p>

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
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // execute if requested using HTTP GET Method
            ?>
            <form action="<? echo $_SERVER['PHP_SELF'];?>" method="post">
                    <label >Bug Name       </label><input type="text" name="bugname" size="45" REQUIRED> <br><br>
                    <label>Bug Summary</label><textarea name="summary" cols="45" rows="5" required></textarea><br>
                    <label>Bug Category</label>
                    <select name="category" required>
                        <option value="">select category</option>
                        <option value="android">Android Bugs</option>
                        <option value="ios">iOS Bugs</option>
                        <option value="windows">Windows Bugs</option>
                    </select>
                <p><input type="submit" value="Submit"></p>
            </form>
            <?
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // execute if requested using HTTP POST Method
        include("connection.php");
        $bugName = $_POST["bugname"];
        $bugSummary = $_POST["summary"];
        $bugCategory=$_POST["category"];
        $sql = "INSERT INTO bugs (bugName, bugSummary, bugCategory) VALUES ('$bugName',' $bugSummary', '$bugCategory')";
        if (mysqli_query($db, $sql)) {
        }
        else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        header("location:showbugs.php");


        }
        else {

            header("location:in.php");
        }
        ?>

    </aside>
</main>
<footer class="grid-99">
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>
</body>
</html>