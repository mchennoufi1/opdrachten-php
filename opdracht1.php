<!DOCTYPE html>
<html>
    <head>
        <?php
            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker"
            ,"root");
        ?>
        <?php 
            include("includes/head.php");
        ?>

        <title>Hoofdstuk 9 | Opdracht 1</title>
    </head>
    <?php
        $page = "opdracht1";
    ?>
    <body>
        <?php
            include("includes/header.php");
        ?>

        <br>
        <p>Opdracht 1</p>
        <?php
            echo "<table border='1'>";
            $query = $db->prepare("SELECT * FROM fietsen");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as &$data){
                echo "<tr>";
                echo "<td>" . $data["merk"] . "</td>";
                echo "<td>" . $data["type"] . "</td>";
                echo "<td>&euro; " . number_format($data["prijs"],2,".",".") . "</td>";
                echo "</tr>";
            }
        ?>
        <p><a href="negen.php">Terug naar Hoofdstuk 9</a></p>
    </body>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>