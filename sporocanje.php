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
    <link rel="stylesheet" href="sporocanje.css">
</head>

<body>
    <ul>
      <li><a href = "inbox.php">Prejeta sporocila</a></li>
        <li><a href = "sent.php">Poslana sporocila</a></li>
        <li><a href = "new_spor.html">Novo sporocilo</a></li>
         <li><a href = "skupine.html">Skupine</a></li>
    </ul>
    <?php
print_r($_SESSION);
print_r($_GET);
?>

</body>
</html>



