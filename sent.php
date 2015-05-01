<?php
    session_start();
   
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
 <script src="sorttable.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
    <title></title>
</head>

<body>
   <ul id="sidemeni">
      <li id="box2"><a href = "inbox.php">Prejeta sporocila</a></li>
        <li id="box2"><a href = "sent.php">Poslana sporocila</a></li>
        <li id="box2"><a href = "new_spor.html">Novo sporocilo</a></li>
          <li id="box2"><a href = "skupine.html">Skupine</a></li>
          <li id="odjava"><a href="index.html"><img id="slika1" src="odjava.gif"</a></a></li>

    </ul>
    
    <hr>
    SENT:
   <table class=sortable id="tabela1">
        <tr id="vrstica1"><td id="stolpec1">Posiljatelj</td><td id="stolpec1">Tema</td><td id="stolpec1">Čas</td></tr>
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