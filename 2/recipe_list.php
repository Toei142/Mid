<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    session_start();
    if ($_SESSION['type'] == 0) {
        echo  "<h1>User :" . $_SESSION['user'] . " Login Success</h1>";
    ?>
        <pre>
<a href="">แสดงสูตรอาหาร</a> | <a href="">เพิ่มสูตรอาหาร</a> | <a href="logout.php">Log out</a>|
        </pre>
    <?php

    } else {
        echo  "<h1>ADMIN Login Success</h1>";
    ?>
        <pre>
<a href="manager.php">User Manager</a> | <a href="recipe_list.php">สูตรอาหารรวม</a> | <a href="logout.php">Log out</a>|
          </pre>
    <?php
    }

    require_once "class.php";
    $mycon = new Database();
    $mycon->connect();
    $mycon->show_foodAll();
    ?>

</body>

</html>