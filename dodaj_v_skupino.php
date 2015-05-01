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
    $q = "SELECT uporabnik_id FROM uporabniki WHERE username = '".$_POST["ime_uporabnika"]."'";
    echo $q;
    echo "<hr>";
    $q1 = "SELECT skupina_id FROM skupine WHERE ime_skupine = '".$_POST["ime_skupine"]."'";
    echo $q1;
    $result = $mysqli->query($q);
    $id = $result->fetch_array(MYSQLI_ASSOC);
    $id_uporabnika = $id['uporabnik_id'];
    echo $id_uporabnika;
    $result = $mysqli->query($q1);
    $id = $result->fetch_array(MYSQLI_ASSOC);
    $id_skupine = $id['skupina_id'];
    echo $id_skupine;
    $q3= "INSERT INTO skupine_vmesna values (".$id_uporabnika.", ".$id_skupine.")";
    if($mysqli->query($q3))
    header('Location: skupine.html');
    else
        header('Location: skupine.html');
    
    

}
?>

