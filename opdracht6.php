<!DOCTYPE html>
<html>
    <head>
        <?php
            $db = new PDO("mysql:host=localhost;dbname=bezoekers"
            ,"root");
        ?>
        <?php 
            include("includes/head.php");
        ?>

        <title>Hoofdstuk 9 | Opdracht 6</title>
    </head>
    <?php
        $page = "opdracht6";
    ?>
    <body>
        <?php
            include("includes/header.php");
        ?>

        <br>
        <p>Opdracht 6</p>
        <form method="post" action="">
            <label>Naam</label>
            <input type="text" name="naam"><br>
            <label>Bericht</label>
            <textarea name="bericht" id="bericht" cols="20" rows="3"></textarea>
            <br>
            <input type="submit" name="verzenden" value="Opslaan">
        </form>
        <?php
        echo "<table border='1'>";
            if(isset($_POST['verzenden'])){
                $naam = $_POST['naam'];
                $bericht = $_POST['bericht'];
                $query = $db->prepare("INSERT INTO comments(naam,bericht)
                VALUES(:naam, :bericht)");
                $query->bindParam("naam", $naam);
                $query->bindParam("bericht", $bericht);
                if($query->execute()){
                    echo "goed";
                    $query = $db->prepare("SELECT * FROM comments WHERE datumtijd");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    echo "<tr>";
                    echo "<td>" . $data["naam"] . "</td>";
                    echo "<td>" . $data["bericht"] . "</td>";
                    echo "<td>" . $data["datumtijd"] . "</td>";
                    echo "</tr>";
                }
                }
            }
        ?>
        <br><br>
        <p><a href="negen.php">Terug naar Hoofdstuk 9</a></p>
    </body>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>