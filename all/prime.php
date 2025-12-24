<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Checking prime number</h1>
    <?php
    $num = 23;
    $isPrime = TRUE;
    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            $isPrime = FALSE;
        }
    }
    if ($isPrime) {
        echo $num;
        echo " is Prime";
    }
    else{
        echo $num;
        echo " is not Prime";
    }
?>
</body>
</html>


