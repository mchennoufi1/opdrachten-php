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
    $query = $db->prepare("SELECT * FROM fietsen");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data){
        echo "<a href='detail.php?id=" . $data['id'] . "'>";
        echo $data["merk"] . " " . $data["type"];
        echo "</a>";
        echo "<br>";
    }  
} catch(PDOException $e) {
    die("Error!: " . $e->getmessage());
}
?>