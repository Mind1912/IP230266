<?php
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['save'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $emailAddress = mysqli_real_escape_string($conn,$_POST['emailAddress']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $passwordConfirmation = mysqli_real_escape_string($conn,$_POST['passwordConfirmation']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $state = mysqli_real_escape_string($conn,$_POST['state']);
        $size = mysqli_real_escape_string($conn,$_POST['size']);
        $birthday = mysqli_real_escape_string($conn,$_POST['birthday']);
        $detail = mysqli_real_escape_string($conn,$_POST['detail']);
        $photo = mysqli_real_escape_string($conn,$_POST['photo']);
        $sql = "INSERT INTO "

    }