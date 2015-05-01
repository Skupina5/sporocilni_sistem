<?php
session_start();

print_r($_SESSION);
print_R($_POST);
$username = "sporocilni";
$password = "1111";
$database = "sporocilni_sistem";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($mysqli->connect_errno){
    echo "Failed to connect to mysql: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}
else 
{
$ime_skupine = $_POST["ime_skupine"];
$q = "SELECT skupina_id FROM skupine WHERE ime_skupine = '".$ime_skupine."'";
$result = $mysqli -> query($q);
$id = $result->fetch_array(MYSQLI_ASSOC);
    $id_skupine = $id["skupina_id"];
    echo $id_skupine;
$q = "SELECT clan_id FROM skupine_vmesna WHERE skupina_ID =".$id_skupine;
    echo "<hr>";
    echo $q;
     echo "<hr>";
    $result = $mysqli->query($q);
     while($uporabniki = $result->fetch_array(MYSQLI_ASSOC))
    {
        $sporocilo[] = $uporabniki;
    }
    foreach($sporocilo as $key => $value)
    {
         $q = 'INSERT INTO sporocilo (sporocilo_id, posiljatelj_id, prejemnik_id, vsebina, datum, prebrano, tema) VALUES (NULL, '.$_SESSION["uporabnik_id"].', '. $value["clan_id"].', "'.$_POST["sporocilo"].'", CURRENT_TIMESTAMP, NULL, "'.$_POST["tema"].'")';
        
        if($mysqli->query($q)){
        echo "sporocilo poslano!";
    header('Location: sporocanje.php?uporid='.$_SESSION["uporabnik_id"]);
    }
        else
            echo "nekaj je slo narobe";
    
}}
?>



