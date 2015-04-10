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
else {
    $q = "SELECT * FROM sporocilo WHERE posiljatelj_id = ".$_SESSION["uporabnik_id"];
    $result = $mysqli->query($q);
    while($finfo = $result->fetch_array(MYSQLI_ASSOC))
          $sporocila[]=$finfo;
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
    <ul>
      <li><a href = "inbox.php">Prejeta sporocila</a></li>
        <li><a href = "sent.php">Poslana sporocila</a></li>
    </ul>
    
    <hr>
    SENT:
    <table>
        <tr><td>Prejemnik</td><td>Tema</td><td>Čas</td></tr>
    <?php
    foreach($sporocila as $key => $value){
        $q = "SELECT username FROM uporabniki WHERE uporabnik_ID = ".$value["prejemnik_id"];
        $result = $mysqli->query($q);
        $uporab_ime = $result->fetch_array(MYSQLI_ASSOC);
        echo "<tr>".
            "<td>".$uporab_ime["username"]."</td>".
            "<td>".$value["tema"]."</td>".
            "<td>".$value["datum"]."</td></tr>";
    }
?>
        </table>
</body>
</html>
<link rel="stylesheet" href="inbox.css">
