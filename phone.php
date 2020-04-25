<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $phoneValidate='/^0+[0-9]{9}$/';
    $phoneNumber = $_POST["phone"];
    if (preg_match($phoneValidate,$phoneNumber)){
        echo "oke";
    }else{
        echo "not avaible";
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
    phone : <input type="text" name="phone">
    <input type="submit">
</form>
</body>
</html>
