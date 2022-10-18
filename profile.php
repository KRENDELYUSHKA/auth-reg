<?php
include('connect.php');
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}

$connect = mysqli_connect('localhost', 'root', 'root', 'train');
$sql = mysqli_query($connect, "SELECT * FROM tag");
$row = mysqli_fetch_array($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
    <?
        echo("<p>"."<h1>".$row["h1"]."</h1>"."</p>");
        echo("<p>".$row["content"]."</p>");?>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>