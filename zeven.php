<!DOCTYPE html>
<html>
    <head>
        
        <?php 
            include("includes/head.php");
            require("includes/link.php");
        ?>

        <title>Hoofdstuk 7 | Opdrachten boek</title>
    </head>

    <?php
        $page = "zeven";
    ?>

    <body>
        <?php
            include("includes/header.php");
        ?>

        <br>
        <h3>Hoofdstuk 7</h3>
        <form method="post" action="">
            <h6>Opdracht 1</h6>
            <label>Bedrag exclusief BTW</label>
            <input type="text" name="bedrag"><br>
            <label>Laag, 6%
                <input type="radio" name="laag"><br>
            <label>
                
            <label>Hoog, 21%
                <input type="radio" name="hoog"><br>
            <label>
            <br>
            <input type="submit" name="uitrekenen" value="Uitrekenen">
            <br><br>
        </form>
        <?php
            if(isset($_POST['uitrekenen'])){
                $bedrag = $_POST['bedrag'];
                $nieuwebedrag = $bedrag * 1.06;
                $nieuwebedrag2 = $bedrag * 1.21;
                if(isset($_POST['laag'])){
                    $laag = $_POST['laag'];
                    echo "Bedrag inclusief 6% BTW: €" . number_format("$nieuwebedrag");
                } else {
                    $hoog = $_POST['hoog'];
                    echo "Bedrag inclusief 21% BTW: €" . number_format("$nieuwebedrag2");
                }
            }
                
                
            ?>
        <br>
        <h6>Opdracht 6</h6>
        <br>
        <form method="post" action="">

            <label>Cijfer:
            <input type="text" name="usernumber"><br>
            <label>
            <br>
            <input type="submit" name="toevoegen" value="Toevoegen">
            <br><br>
        </form>
        <?php
        if(isset($_POST['toevoegen'])){
            $usernumber = filter_input(INPUT_POST, 'usernumber', FILTER_SANITIZE_NUMBER_INT);

            $query = $db->prepare("INSERT INTO zes(number)
                VALUE($usernumber)");
            if($query->execute()){
                echo "goed";
            }
        }
        ?>


        <br>
        <h6>Opdracht 7</h6>

        <br>
        <h6>Opdracht 8</h6>

</body>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>