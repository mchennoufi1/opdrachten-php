<!DOCTYPE html>
<html>
    <head>

        <?php 
            include("includes/head.php");
        ?>

        <title> Hoofdstuk 3 | Opdrachten boek </title>
    </head>

    <?php 
        $page = "drie";
    ?>
    <body>

        <?php 
            include("includes/header.php"); 
        ?>
        <br>
        <h3>Hoofdstuk 3</h3>
        <br>
        <h4>3.6</h4>
        <br>
        <p>
            <?php
                echo "Het is vandaag: " . date("l j F Y") . "<br>" ;
                echo "Vandaag is het de " . date("z") . "e dag van het jaar" . "<br>" ;
                echo date("l") . " is de " . date("w") . "e dag van de week" . "<br>" ;
                echo "De maand " . date("F") . " heeft in totaal " . date("t") . " dagen" . "<br>" ;
                if(date("L") == 1){
                    echo "Het jaar " . date("Y") . " is een schrikkeljaar" . "<br>";
                } else {
                    echo "Het jaar " . date("Y") . " is geen schrikkeljaar" . "<br>";
                }
            ?>
        </p>

    </body>

    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>