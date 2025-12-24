<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo date("d-M-Y");
    echo "<br>";

    echo $_POST["name"];
    echo "<br>";
    echo $_POST["email"];
    echo "<br>";
    echo $_REQUEST["mobile"];
    echo "<br>";
    echo $_POST["password"];
    echo "<br>";
    // echo $_POST["date"];
    // echo "<br>";
    // echo $_POST["gender"];
    // echo "<br>";
    // echo $_POST["course"];

    // function hello(){
    //     echo "Hello There";
    // }
    // hello()
    ?>
</body>
</html>