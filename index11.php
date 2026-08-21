    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>

<?php 
    //define('MY_AGE', 23);
    //echo MY_AGE;
    const A = "aa";
    echo A;
$a = 5;
$a = 6;
echo $a;
$price = 1200;
$wallet = 100;
if ($price<=$wallet) {
    echo "<b>Благодарим вас за покупку</b> ";
    echo " <br> Lorem ipsum dolor \" sit amet consectetur adipisicing elit.</br>";
} else {
    echo "Error " . $wallet . $price;
    echo strval($a);
}


?>
</body>
</html>

