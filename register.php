<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
      <div id="register_form">
<form action = "check_register.php" method = "post">
        Username:
            <input id = "username" type="text" name="username">
    <br>
        Password:
            <input id = "password" type="password" name="password">
    <br>
        <input id = "login" type="submit" value="Register!">
</form>
    </div>
    <?php
if(isset($_COOKIE["register"]))
    echo "uporabi drugo ime/geslo";
?>
</body>
                                                           
</html>
<link rel="stylesheet" href="register.css">