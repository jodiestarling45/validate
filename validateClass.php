<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $class= '/^[C|A|P]+[0-9]{4}+[G|H|I|K|L|M]+$/';
    $userClass = $_POST["class"];
    if (preg_match($class,$userClass)){
        echo " oke you are in ";
    }else{
        echo "wrong niggar";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    class : <input type="text" name="class" required><br>
    <input type="submit">
</form>
</body>
</html>
