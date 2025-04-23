<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name : <input type="text" name="name" required><br><br>
        Age  : <input type="number" name="age"required><br><br>
        <input type="submit" value="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'Name :'.$_POST['name'].'<br>';
        echo 'Age  :'.$_POST['age'];
    }

    ?>
</body>
</html>
