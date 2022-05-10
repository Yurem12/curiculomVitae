<?php 

// sql auth vars

$user = "root";
$pass = "";

try {
    $db = new PDO('mysql:host=localhost;dbname=testdb', $user,$pass);



} catch (PDOException $e) {
    print "erreur :" . $e->getMessage() . "</br>";
    die;
}

// affichage des valeurs

foreach ($_POST as $key => $value) {
    $nKey = substr($key,4);
    echo <<<EOD
    $nKey: $value </br>
    EOD; 
}

?>