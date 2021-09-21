<!DOCTYPE html>
<html>
    <head>

        <?php 
            include("includes/verzameling.php");
        ?>

        <title>Hoofdstuk 4 | Opdrachten boek</title>
    </head>

    <?php 
        $page = "opdracht14";
    ?>
    <body>

        <?php 
            include("includes/header.php"); 
        ?>
        <br>
        <h3>Hoofdstuk 4</h3>
        <br>
        <h5>Opdracht 14</h5>
        <br>
        <p>
            <?php
                $nummer = 1.609;
                echo "<table border='1'>";
                echo "<th>Miles</th>";
                echo "<th>Kilometers</th>";
                for($i = 1; $i <= 20; $i++){
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . ($i * $nummer) . "</td>";
                    echo "</tr>";
                }
            ?>
        </p>
    </body>
    </body>

    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>