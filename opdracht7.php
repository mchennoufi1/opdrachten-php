<!DOCTYPE html>
<html>
    <head>
        <?php
            $db = new PDO("mysql:host=localhost;dbname=polls"
            ,"root");
        ?>
        <?php 
            include("includes/head.php");
        ?>

        <title>Hoofdstuk 9 | Opdracht 7</title>
    </head>
    <?php
        $page = "opdracht7";
    ?>
    <body>
        <?php
            include("includes/header.php");
        ?>

        <br>
        <p>Opdracht 7</p>
        <br><br>
        <?php
            if(isset($_POST)){
                $query = $db->prepare("SELECT * FROM poll");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    $vraag = $data["vraag"];
                }
                $query = $db->prepare("SELECT * FROM optie WHERE id=1");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    $optie1 = $data["optie"];
                }
                $query = $db->prepare("SELECT * FROM optie WHERE id=2");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    $optie2 = $data["optie"];
                }
                $query = $db->prepare("SELECT * FROM optie WHERE id=3");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    $optie3 = $data["optie"];
                }
                $query = $db->prepare("SELECT * FROM optie WHERE id=4");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_ASSOC);
                foreach($result as &$data){
                    $optie4 = $data["optie"];
                }
            }
            $stemmen = 1;
            if(isset($_POST['verzenden'])){
                $query = $db->prepare("INSERT INTO optie WHERE id=1(stemmen)
                VALUE(:stemmen)");
                $query->execute();
            }
        ?>
        <form method="post" action="">
            <p>Stelling van de maand: <?php echo $vraag;?></p>
            <label><?php echo $optie1;?></label>
            <input name="opties" type="radio" id="opties"></input>
            <br>
            <label><?php echo $optie2;?></label>
            <input name="opties" type="radio" id="opties"></input>
            <br>
            <label><?php echo $optie3;?></label>
            <input name="opties" type="radio" id="opties"></input>
            <br>
            <label><?php echo $optie4;?></label>
            <input name="opties" type="radio" id="opties"></input>
            <br>
            <input type="submit" name="verzenden" value="Verzenden">
        </form>
        <br><br>
        <p><a href="negen.php">Terug naar Hoofdstuk 9</a></p>
    </body>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
</html>