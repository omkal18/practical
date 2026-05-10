<!-- Write a PHP script to display a “Welcome” message along with the
current system date and time. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disoplay html document</title>
</head>
<body>
    <h1>
        To Display msg
    </h1>
    <hr>
    <?php
    date_default_timezone_set("asia/kolkata");
    echo "<h1>Welcome to php</h1>";
    echo "Current Date: ".date("d-m-y")."<br>";
    echo "Current Time: ".date("h:i:s a");
    ?>
</body>
</html>
