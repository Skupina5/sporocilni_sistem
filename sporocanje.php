<?php
session_start();
$_SESSION["uporabnik_id"] = $_GET["uporid"];

?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <ul id="meni1">
      <li id="box1"><a href = "inbox.php">Prejeta sporocila</a></li>
        <li id="box1"><a href = "sent.php">Poslana sporocila</a></li>
        <li id="box1"><a href = "new_spor.html">Novo sporocilo</a></li>
        <li id="box1"><a href = "skupine.html">Skupine</a></li>
        <li id="odjava"><a href="index.html"><img id="slika1" src="odjava.gif"</a></a></li>

    </ul>
    <?php

?>

</body>
</html>



