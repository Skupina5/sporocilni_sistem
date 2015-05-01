<?php
session_start();
$username = "sporocilni";
$password = "1111";
$database = "sporocilni_sistem";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($mysqli->connect_errno){
    echo "Failed to connect to mysql: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}



?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php    
    $id_sporocila = $_GET["id_sporocila"];
    $q = "select vsebina, posiljatelj_id, tema, datum
        FROM sporocilo WHERE sporocilo_id = ".$id_sporocila;
    $result = $mysqli -> query($q);
     while($finfo = $result->fetch_array(MYSQLI_ASSOC))
    {
        $sporocilo[] = $finfo;
    }
    print_r($sporocilo);
    $q = "select username from uporabniki
    WHERE uporabnik_id=".$sporocilo[0]["posiljatelj_id"];
echo $sporocilo[0]["posiljatelj_id"];
echo $q;
    $result = $mysqli ->query($q);
    while($finfo = $result->fetch_array(MYQSLI_ASSOC)){
        $sporocilo["ime_posiljatelja"] = $finfo;
    }
    print_r($sporocilo);
    ?>
</body>
</html>
<link rel="stylesheet" href="sporocilo.css">



