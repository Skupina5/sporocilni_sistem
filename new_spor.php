<?php
session_start();
$username = "sporocilni";
$password = "1111";
$database = "sporocilni_sistem";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($mysqli->connect_errno){
    echo "Failed to connect to mysql: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}

else{
    print_r($_POST);
    $posiljatelj = $_SESSION["uporabnik_id"];
    $prejemnik = $_POST["ime_prej"];
    $tema = $_POST["tema"];
    $sporocilo = $_POST["sporocilo"];
    $q = 'SELECT uporabnik_id from uporabniki where username ="'.$prejemnik.'"';
    $result = $mysqli->query($q);
    $id = $result->fetch_array(MYSQLI_ASSOC);
    $prejemnik=$id["uporabnik_id"];
    $q = 'INSERT INTO sporocilo (sporocilo_id, posiljatelj_id, prejemnik_id, vsebina, datum, prebrano, tema) VALUES (NULL, '.$posiljatelj.', '. $prejemnik.', "'.$sporocilo.'", CURRENT_TIMESTAMP, NULL, "'.$tema.'")';
    echo $q;
    if($mysqli->query($q)){
        echo "sporocilo poslano!";
    header('Location: sporocanje.php?uporid='.$value["uporabnik_id"]);
    }
    else
        echo "nekaj je slo narobe!";
    
}

?>