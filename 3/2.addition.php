<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="2.addition.php" method="POST">

        <div>
            <input type="text" name="num1" placeholder="number 1">
        </div>
        <div>
            <input type="text" name="num2" placeholder="number 2">
        </div>
        <button type="submit" name="Submit">ADD</button>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        if ($_POST['num1'] && $_POST['num2'])
            echo $_POST['num1'] + $_POST['num2'];
        else
            echo "Can't be empty";
    }
    ?>
</body>

</html>