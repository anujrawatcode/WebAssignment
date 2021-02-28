<?php

$connection = mysqli_connect('localhost', 'root', '', 'Web');
if ($connection)
    echo "success connection";
else
    echo "failed connection";


if (isset($_POST['Submit'])) {


    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $query = "INSERT INTO users(username, email, gender, city) ";
    $query .= "VALUES ('$username','$email','$gender','$city')";

    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        die("Query Failed");
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>

    <form action="3.formStore.php" method="POST">
        
        <div>
            <input type="text" placeholder="username" name="username">
        </div>

        <div>
            <input type="text" placeholder="email" name="email">
        </div>

        <div>
            <p>Please select your gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
        </div>

        <div>
            <input type="text" placeholder="city" name="city">
        </div>

        <button type="submit" name="Submit">Submit</button>

    </form>

</body>

</html>