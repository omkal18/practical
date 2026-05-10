<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation Program</title>
</head>
<body>
    <h1>String Manipulation</h1>
    <hr>
    <?php
        $str="Computer Engineering";
        echo "Original String: ".$str."<br>";

        echo "String Length: ".strlen($str)."<br>";
        echo "Uppercase: ".strtoupper($str)."<br>";
        echo "lowercase: ".strtolower($str)."<br>";
        echo "Reverse String: ".strrev($str)."<br>";
        echo "Substring: ".substr($str,0,8);

    ?>
</body>
</html>