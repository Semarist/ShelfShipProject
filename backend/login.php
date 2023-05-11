<?php 
session_start();
include 'db_conn.php';

    // Check if the form has been submitted and data is not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please enter an email";

        header("Location: ../frontend/login.php");
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        //hash the password using md5
        $password = md5($_POST['password']);
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please enter a password";

        header("Location: ../frontend/login.php");
    }

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['email'] === $email && $row['password'] === $password) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['user_type'] = $row['is_library_owner'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../frontend/home.php");
            exit();
        }else{
            // set a session variable
            $_SESSION['error'] = "Incorrect Credentials Entered";

            header("Location: ../frontend/login.php");
            exit();
        }
    }else{
        // set a session variable
        $_SESSION['error'] = "Incorrect Credentials Entered";

        header("Location: ../frontend/login.php");
        exit();
    }
