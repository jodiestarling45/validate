<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $accountUser = '/^[_0-9a-z]{6,}+$/';
    $acc = $_POST["acc"];
    if (preg_match($accountUser,$acc)){
        echo "welcome";
    }else {
        echo "doesn't exist";
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
    account : <input type="text" name="acc" required><br>
    <input type="submit">
</form>
</body>
</html>
