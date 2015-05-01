<?php
session_start();
$username = "sporocilni";
$password = "1111";
$database = "sporocilni_sistem";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($mysqli->connect_errno){
    echo "Failed to connect to mysql: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}


$id_sporocila  = $_GET["id_sporocila"];
$q = "SELECT vsebina FROM sporocilo WHERE sporocilo_id = $id_sporocila";
$result = $mysqli->query($q);
$sporocilo = $result->fetch_array(MYSQLI_ASSOC);
$vsebina = $sporocilo["vsebina"];
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    VSEBINA: <hr>
    <?php
    echo $vsebina;
?>
</body>
</html>
<link rel="stylesheet" href="sporocilo.css">



