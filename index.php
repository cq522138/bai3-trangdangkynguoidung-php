<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
ten nguoi dung <input type="text" name="ten"> </br>
email <input type="text" name="email"> </br>
sdt <input type="text" name="sdt"> </br>
<input type="submit" value="register">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ten=$_POST["ten"];
    $email = $_POST["email"];
    $sdt = $_POST["sdt"];
    $has_error = false;
    if(empty($ten)){

    }
}
