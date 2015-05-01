<?php
session_start();
print_r($_SESSION);
$username = "sporocilni";
$password = "1111";
$database = "sporocilni_sistem";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($mysqli->connect_errno){
    echo "Failed to connect to mysql: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}

else{
    print_r($_POST);
    print_r($_SESSION);
    $uporabnik_id= $_SESSION["uporabnik_id"];
    $ime_skupine = $_POST["ime_skupine"];
    echo $uporabnik_id;
    $q = 'INSERT INTO skupine values (null, '.$uporabnik_id.', "'.$ime_skupine.'")';
    echo $q;
    if($mysqli->query($q)){
        echo "skupina ustvarjena!!";
        header('Location: sporocanje.php?uporid='.$_SESSION["uporabnik_id"]);
    }

    else
        echo "nekaj je slo narobe!";
    
}

?>