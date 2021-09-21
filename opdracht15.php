<!DOCTYPE html>
<html>
    <head>

        <?php 
            include("includes/verzameling.php");
        ?>

        <title>Hoofdstuk 4 | Opdrachten boek</title>
    </head>

    <?php 
        $page = "opdracht15";
    ?>
    <body>

        <?php 
            include("includes/header.php"); 
        ?>
        <br>
        <h3>Hoofdstuk 4</h3>
        <br>
        <h5>Opdracht 15</h5>
        <br>
        <p>
            <?php
                echo "Patroon 1";
                echo "<table border='0'>";
                for($i=0;$i<=6;$i++){  
                    for($j=1;$j<=$i;$j++){  
                    echo "$j ";  
                    }  
                    echo "<br>";  
                    }  
                    echo "<br>";
                    echo "<br>";
                    echo "Patroon 2";
                    echo "<br>";
                    echo "<br>";
                for($i=6; $i>=1; $i--){   
                    for($j=1; $j<=$i; $j++){  
                    echo "$j ";   
                    }   
                    echo '<br>';   
                    }   
                    echo "<br>";
            ?>
        </p>
    </body>
    </body>

    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>