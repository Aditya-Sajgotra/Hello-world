<!DOCTYPE html>

<html>

<head>
    <title>Form</title>
</head>

<body>

    <h1>PHP Form</h1>

    <form action="phpForm.php" method="POST">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="passwd">Password</label><br>
        <input type="password" id="passwd" name="pass"><br><br>

        <button type="Submit">Submit</button>

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        echo "You Entered: $name <br>";
        echo "You Entered: $pass ";
        $file = fopen("data.txt", "a");
        fwrite($file, $name.$pass . "\n");
        fclose($file);
    }
    ?>
</body>

</html>