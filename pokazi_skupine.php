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
    $q = "SELECT * FROM skupine WHERE uporabnik_id = ".$_SESSION["uporabnik_id"];
    $result = $mysqli->query($q);
    while($finfo = $result->fetch_array(MYSQLI_ASSOC))
          $skupine[]=$finfo;
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
        <li><a href = "new_spor.html">Novo sporocilo</a></li>
        <li><a href = "skupine.html">Skupine</a></li>
    </ul>
    
    <hr>
    Skupine:
    <table>
    <?php  
    foreach($skupine as $key => $value){
        echo "<tr><td>";
        echo $value['ime_skupine'];
        echo "</td></tr>";
    }

    
?>
        </table>
</body>
</html>
<link rel="stylesheet" href="index.css">

