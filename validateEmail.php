<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $emailUser=$_POST["email"];
    $email = '/^[a]+[a-zA-Z0-9]*\@[a-zA-Z]+(\.[a-z]+)$/';
    if (preg_match($email,$emailUser)){
        echo "welcome ";
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
    <table>
        <tr>
            <td><label for="">name :</label></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>
                <label for="">password</label>
                <input type="text" name="pass">
            </td>
        </tr>
    </table>
    <input type="submit">
</form>
</body>
</html>
