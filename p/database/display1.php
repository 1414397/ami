<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Movie</title>

</head>
<body>
<header>


</header>
<main>
    <nav>
        <ul>
            <li><a href="first.php">Home</a></li>
            <li><a href="display1.php<">All Movies</a></li>
            <li><a href="display1.php?display=marvelstudio">Created by Marvel Movie Studio</a></li>
            <li><a href="display1.php?display=after2010">Created After 2010</a></li>
            <li><a href="display1.php?dispaly=xmemfilms">XMen Films</a></li>
        </ul>

    </nav>
    <aside>
        <?php
        include('connection.php');
        $display=$_GET["display"];
        if($display == NULL)
        {
        $sql = "SELECT * FROM marvelmovies1";
        }
        else if($display=="after2010")
        {
        $sql = "SELECT * FROM marvelmovies1 WHERE yearReleased > '2010'";
        }
        else if($display=="xmenfilms")
        {
            $sql = "SELECT * FROM marvelmovies WHERE title= 'X-Men%'";
        }
        else if($display=="marvelstudio")
        {
        $sql = "SELECT * FROM marvelmovies1 WHERE productionStudio='Marvel Studios'";
        }



        $result =mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        echo  $row["marvelMovieID"]. "  " . $row["yearReleased"]. " " . $row["title"].  " " . $row["productionStudio"]." " . $row["notes"]."<br>";
        }
        } else {
        echo "0 results";
        }
        ?>

    </aside>
</main>
<footer class="grid-99">
    <p>Designed by[Ami Jiyani[2016]]</p>
</footer>
</body>
</html>