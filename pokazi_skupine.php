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
       <ul id="sidemeni">
      <li id="box2"><a href = "inbox.php">Prejeta sporocila</a></li>
        <li id="box2"><a href = "sent.php">Poslana sporocila</a></li>
        <li id="box2"><a href = "new_spor.html">Novo sporocilo</a></li>
        <li id="box2"><a href = "skupine.html">Skupine</a></li>
    </ul>
    
    <hr>
    <p id="skupine">Skupine:</p>
    <table id="tabela2">
    <?php  
    foreach($skupine as $key => $value){
        echo "<tr><td><li>";
        echo $value['ime_skupine'];
<<<<<<< HEAD
        echo "</td>";
        echo"</tr>";
=======
        echo "</td></tr></li>";
>>>>>>> origin/master
    }


?>
        </table>
</body>
</html>
<link rel="stylesheet" href="index.css">

