<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'train');

    if (!$connect) {
        die('Error connect to DataBase');
    }