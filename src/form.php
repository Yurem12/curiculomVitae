<?php 

// affichage des valeurs

foreach ($_POST as $key => $value) {
    $nKey = substr($key,4);
    echo <<<EOD
    $nKey: $value </br>
    EOD; 
}


// sql auth vars

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "testdb";


// création de la connexion
$conn = new mysqli($servername, $user, $pass, $dbname);
// vérification de la conexion
if ($conn->connect_error) {
  die("Echec de la connexion: " . $conn->connect_error);
}

// fonction de vérification de présence de la donnée dans la base de données
$getData = "SELECT * FROM clients";
$result = $conn->query($getData);
print_r($result);
if ($result->num_rows > '0') {


  echo "Cette ligne existe déjà dans la base de donnée.";

  } else {
    // si non inscription des données dans la base de données
    $insertData = "INSERT INTO clients (Nom, Prenom, Mail, Msg)
    VALUES ('$_POST[formSurname]', '$_POST[formName]', '$_POST[formMail]', '$_POST[formMsg]')";
    
  if ($conn->query($insertData) === true) {
    echo "New record created successfully";
  } else {
    echo "Erreur: " . $insertData . "<br>" . $conn->error;
  }

  $conn->close();
  }
?>