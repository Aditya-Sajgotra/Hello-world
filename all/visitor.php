<?php
$File = 'visitor_count.txt';

if (!file_exists($File)) {
    file_put_contents($File, '0');
}

$visitorCount = (int)file_get_contents($File);
$visitorCount++;

file_put_contents($File, $visitorCount);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitor Count</title>
</head>
<body>
<h1>Welcome to Our Page</h1>
<p>Hope you have a great experience here.</p>

<h2>Visitor Count is below</h2>
<p>Total number of visitors: <?php echo $visitorCount; ?></p>

<h2>Today's Date: <?php echo date("d-m-Y"); ?></h2>
</body>
</html>
