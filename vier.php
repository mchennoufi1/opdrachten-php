<!DOCTYPE html>
<html>
    <head>

        <?php 
            include("includes/verzameling.php");
        ?>

        <title>Hoofdstuk 4 | Opdrachten boek</title>
    </head>

    <?php 
        $page = "vier";
    ?>
    <body>

        <?php 
            include("includes/header.php"); 
        ?>
        <br>
        <h3>Hoofdstuk 4</h3>
        <br>
        <h4>4.4</h4>
        <br>
        <h5>Opdracht 1</h5>
        <br>
        <p>
            <?php
            date_default_timezone_set("Europe/Amsterdam");
            $time = date("H:i");
            if(($time < 12) && ( $time >= 06)){
                echo "het is ochtend";
            } else if(($time >= 12) && ($time < 18)){
                echo "het is middag";
            } else if(($time >= 18) && ($time < 24)){
                echo "het is avond";
            } else {
                echo "het is nacht";
            }
            ?>
        </p>
        <br>
        <h5>Opdracht 2</h5>
        <br>
        <p>
            <?php
            switch($time){
                case 06 : echo "Het is ochtend"; break;
                case 12 : echo "Het is middag"; break;
                case 18 : echo "Het is avond"; break;
                case 24 : echo "Het is nacht"; break;
            }
            ?>
        </p>
        <br>
        <h5>Opdracht 3</h5>
        <br>
        <p>
            <?php
                $var = 7;
                $var2 = 24;
                if($var < $var2){
                    $uitkomst = $var2 * 2 + $var;
                    echo "uitkomst is: " . "$uitkomst";
                }
            ?>
        </p>
        <br>
        <h5>Opdracht 4</h5>
        <br>
        <p>
            <?php
                $oudePrijs = 100;
                if($oudePrijs < 55){
                    $nieuwePrijs = $oudePrijs * 0.11 + $oudePrijs;
                    echo "Oude prijs: €" . 
                    "$oudePrijs" . 
                    ". Na verhoging van 11% is de prijs: €" . 
                    "$nieuwePrijs";
                } else if($oudePrijs > 150){
                    $nieuwePrijs = $oudePrijs * 0.19 + $oudePrijs;
                    echo "Oude prijs: €" . 
                    "$oudePrijs" . 
                    ". Na verhoging van 19% is de prijs: €" . 
                    "$nieuwePrijs";
                } else {
                    $nieuwePrijs = $oudePrijs * 0.16 + $oudePrijs;
                    echo "Oude prijs: €" . 
                    "$oudePrijs" . 
                    ". Na verhoging van 16% is de prijs: €" . 
                    "$nieuwePrijs";
                }
                
            ?>
        </p>
        <br>
        <h5>Opdracht 5</h5>
        <br>
        <p>
            <?php
                $getal = 6;
                if($getal % 2 == 00 )
                {
                    echo "is het getal " . "$getal" . " even? " . "ja";
                } else {
                    echo "is het getal " . "$getal" . " even? " . "nee";
                }
            ?>
        </p>
        <br>
        <h5>Opdracht 6</h5>
        <br>
        <p>
            <?php
                $number = 12;
                if(($number % 5 == 00) && ($number % 6 == 00))
                {
                    echo "Het getal " . "$number" . "<br>" . 
                    "Wel deelbaar door 5 en door 6. ";
                }
                 else if($number % 5 == 00)
                {
                    echo "Het getal " . "$number" . "<br>" . 
                    "Wel deelbaar door 5 en niet door 6. ";
                } else if($number % 6 == 00) {
                    echo "Het getal " . "$number" . "<br>" . 
                    "Niet deelbaar door 5 en wel door 6. ";
                } else {
                    echo "Het getal " . "$number" . "<br>" . 
                    "Niet deelbaar door 5 en niet door 6. ";
                }
            ?>
        </p>
        <br>
        <h5>Opdracht 7</h5>
        <br>
        <p>
            <?php
                
            ?>
        </p>
    </body>
    </body>

    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>