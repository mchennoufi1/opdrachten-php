<!DOCTYPE html>
<html>
    <head>
        <?php
            $db = new PDO("mysql:host=localhost;dbname=school"
            ,"root");
        ?>
        <?php 
            include("includes/head.php");
        ?>

        <title>Hoofdstuk 9 | Opdracht 3</title>
    </head>
    <?php
        $page = "opdracht3";
    ?>
    <body>
        <?php
            include("includes/header.php");
        ?>

        <br>
        <p>Opdracht 3</p>

        <?php
            echo "<table border='1'>";
            echo "<th>Leerling</th>";
            echo "<th>Cijfer</th>";
            $query = $db->prepare("SELECT * FROM cijfers");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as &$data){
                echo "<tr>";
                echo "<td>" . $data["leerling"] . "</td>";
                echo "<td>" . $data["cijfer"] . "</td>";
                echo "</tr>";
            }
        ?>
        <p><a href="negen.php">Terug naar Hoofdstuk 9</a></p>
    </body>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>