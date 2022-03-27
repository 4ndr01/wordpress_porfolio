<?php
var_dump($_GET);
if (!empty($_GET['mail'])){
    echo $_GET['mail'];
}
?>


<!doctype html>
<html xmlns:input="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="email" name="email" id="">
    <input type="text" name="object" id="">
    <input type="text" name="message" id="">
    <input type="submit">
</form>
<h1>Message</h1>

</body>
</html>
