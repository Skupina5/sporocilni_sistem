<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<div id="login_form">
      <div id="register_form">
<form action = "check_register.php" method = "post">
     
            <input id = "username" placeholder="Uporabnisko Ime" type="text" name="username">
    <br>
        
            <input id = "password" placeholder="Geslo" type="password" name="password">
    <br>
        <input id = "login" type="submit" value="Register!">
</form>
    </div>
    <?php
if(isset($_COOKIE["register"]))
    echo "uporabi drugo ime/geslo";
?>
</div>
</body>
                                                           
</html>
<link rel="stylesheet" href="index.css">