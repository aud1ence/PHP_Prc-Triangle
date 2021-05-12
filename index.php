<?php
use src\Shape;
use src\Triangle;
include_once "vendor/autoload.php";
//include_once "src/Shape.php";
//include_once "src/Triangle.php";

$triangle1 = new Triangle;
echo $triangle1->toString(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Triangle</title>
</head>
<body>
<form method="post">
    <input type="text" placeholder="Goc cua tam giac">
    <input type="text" placeholder="Do dai 3 canh">
</form>
</body>
</html>
