<!DOCTYPE html>
<html>
    <head>

        <?php 
            include("includes/verzameling.php");
        ?>

        <title>Hoofdstuk 4 deel 2 | Opdrachten boek</title>
    </head>

    <?php 
        $page = "vierr";
    ?>
    <body>

        <?php 
            include("includes/header.php"); 
        ?>
        <br>
        <h3>Hoofdstuk 4</h3>
        <br>
        <h5>Opdracht 13</h5>
        <p>
            <?php
                $number3 = 1.609;
                echo "<table border='1'>";
                echo "<th>Miles</th>";
                echo "<th>Kilometers</th>";
                for($i = 1; $i <= 10; $i++){
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . ($i * $number3) . "</td>";
                    echo "</tr>";
                }
            ?>
        </p>
    </body>

    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>