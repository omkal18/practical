<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Elements</title>
</head>
<body>
    <h1>
        Array Elements
    </h1>
    <hr>
    <?php
    $students=array("om","hari","shivam","yash");
    echo "elements of array:<br>";
    for($i=0;$i<count($students);$i++)
        {
            echo $students[$i]."<br>";
        }
    ?>
</body>
</html>