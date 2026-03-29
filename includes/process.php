<?php

require_once "classes/User.php";

$hasil = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = new User(
        $_POST['firstname'],
        $_POST['lastname'],
        $_POST['phone'],
        $_POST['address']
    );

    $hasil = $user->tampilkan();
}