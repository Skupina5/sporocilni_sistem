<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
        <?php


    $username = "sporocilni";
    $password = "1111";
    $database = "sporocilni_sistem";
    mysql_connect("localhost",$username,$password);
    @mysql_select_db($database) or die( "Unable to select database");
print_r($_POST);
    $query="INSERT INTO uporabniki VALUES (NULL, ".'"'.$_POST["username"].'"'.', "'.$_POST["password"].'", "uporabnik");';
  echo $query;
    if(mysql_query($query)){
        setcookie("register",2,time()+120);
        header("Location: index.html");
    }
    else{
        setcookie("register",0,time()+120);
        header("Location: register.php");
    }
    ?>
    
</body>
</html>
<link rel="stylesheet" href="">

