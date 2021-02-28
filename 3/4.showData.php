<?php

$connection = mysqli_connect('localhost', 'root', '', 'Web');
if ($connection)
    echo "success connection<br>";
else
    echo "failed connection";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result)
    die("Query failed");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    // while ($row = mysqli_fetch_assoc($result)) {
    //     print_r($row);
    // }


    ?>

    <table>
        <tr>
            <th>Id</th>
            <th>username</th>
            <th>email</th>
            <th>city</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['city'] ?></td>
            </tr>
            <?php }
            ?>
    </table>


</head>

<body>


</body>

</html>