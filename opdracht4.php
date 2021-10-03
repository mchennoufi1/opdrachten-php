<!DOCTYPE html>
<html>
    <head>
        
        <?php 
            include("includes/head.php");
            require("includes/link.php");
        ?>
        <title>Hoofdstuk 9 | Opdrachten 4 en 5</title>
    </head>

    <?php
        $page = "vier-vijf";
    ?>
    <body>
        <?php
            include("includes/header.php");
        ?>
        <br>
        <p>Opdracht 4 en 5</p>
        <?php
            try{
                $db = new PDO("mysql:host=localhost;dbname=fietsenmaker"
                ,"root");
                if(isset($_POST['inloggen'])) {
                    $username = $_POST['username'];
                    $password = sha1($_POST['password']);
                    $query = $db->prepare("SELECT * FROM gebruikers WHERE 
                    username = :user AND password = :pass");
                    $query->bindParam("user", $username);
                    $query->bindParam("pass", $password);
                    $query->execute();
                    if($query->rowCount() == 1) {
                        echo "Juiste gegevens!";
                    } else {
                        echo "Onjuiste gegevens!";
                    }
                    echo "<br>";
                }
            } catch(PDOException $e) {
                die("Error!: " . $e->getmessage());
            }
            echo "<br><br>";
        ?>
        <form method="post" action="">
            <label>Username</label>
            <input type="text" name="username"><br>


            <label>Password</label>
            <input type="password" name="password"><br>

            <input type="submit" name="inloggen" value="Inloggen">
        </form>
            <br><br>
        <p><a href="negen.php">Terug naar Hoofdstuk 9</a></p>
    </body>
    <script src="js/mdb.min.js"></script>
    <script src="js/mdb.min.js.map"></script>
<html>