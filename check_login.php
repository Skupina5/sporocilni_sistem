<?php
$username = "sporocilni";
$password = "1111";
$database = "sporocilni_sistem";
$mysqli = new mysqli("localhost", $username, $password, $database);
if($mysqli->connect_errno){
    echo "Failed to connect to mysql: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}
else{
    $q = "SELECT * FROM uporabniki";
    $result = $mysqli->query($q);
    while($finfo = $result->fetch_array(MYSQLI_ASSOC))
    {
        $uporabniki[] = $finfo;
    }
    ////spravm vse iz baze v tabelo uporabniki kle gor glej
    ////zdej pa preverjam če se pravilno se vpisal
    foreach($uporabniki as $key => $value){
        if($value["username"] === $_POST["username"] && $value["password"] === $_POST["password"])
        {
            echo " uspesna prijava kuscar";
            header('Location: sporocanje.php?uporid='.$value["uporabnik_id"]);
            break;
        }
    }
    echo "trot napis praviln gesu";
    
}

    
?>