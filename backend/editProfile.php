<?php

    include "db_conn.php";

    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['id'];

    // Check if the form has been submitted and data is not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    else{
        $_SESSION['error'] = "Please enter an email";

        header("Location: ../frontend/register.php");
    }
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    else{

        $_SESSION['error'] = "Please enter a name";

        header("Location: ../frontend/register.php");
    }
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please enter a phone number";

        header("Location: ../frontend/register.php");
    }

    // Update user data
    $sql = "UPDATE users SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$user_id'";

    if(mysqli_query($conn, $sql)) {
        // Redirect to profile page
        header("Location: ../frontend/profile.php");
        exit();
    }
