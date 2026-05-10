<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post method example</title>
</head>
<body>
    <h1>User Information Form</h1>
    <hr>
    <form method="POST">
        <p>
            Name:
            <input type="text" name="name">
        </p>
        <p>
            Email:
            <input type="email" name="email">
        </p>
        <button type="submit">Submit</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $name=$_POST['name'];
                $email=$_POST['email'];

                echo "<h4>submitted data:</h4>";
                echo "Name: ".$name."<br>";
                echo "Email: ".$email;
            }
    ?>   
</body>
</html>