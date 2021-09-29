<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
</html>

<?php
// $host = '127.0.0.1';
// $db   = 'fietsenmaker';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

// $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];

try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker"
    ,"root");
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = " . $_GET['id']);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as &$data){
        echo "Artikelnummer is: " . $data['id'] . "<br>";
        echo "Merk is: " . $data['merk'] . "<br>";
        echo "Type is: " . $data['type'] . "<br>";
        echo "Prijs is: &euro; " . number_format($data["prijs"],2,",",".") . "<br><br>";
    }
  
} catch(PDOException $e) {
    die("Error!: " . $e->getmessage());
}
?>
<a href="negen.php">Terug naar verzameling</a>