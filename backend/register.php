<?php
include 'db_conn.php';

session_start();

    // Check if the form has been submitted and data is not empty
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please enter an email";

        header("Location: ../frontend/register.php");
    }
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please enter a name";

        header("Location: ../frontend/register.php");
    }
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        //hash the password using md5
        $password = md5($_POST['password']);
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please enter a password";

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
    if (isset($_POST['image']) && !empty($_POST['image'])) {
        $image = $_POST['image'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please select an image name";
        header("Location: ../frontend/uploadBook.php");
    }

    //we are not checking is isset since it wil always be set
    $user_type = $_POST['user_type'];
    $image_path = "../frontend/images/users/".$image.".png";

    //check if email used before
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($result) > 0) {

        $_SESSION['error'] = "Email already registered";

        header("Location: ../frontend/register.php");
    }
    else {
        //check if name used before
        $result = mysqli_query($conn, "SELECT * FROM users WHERE name='$name'");
        if (mysqli_num_rows($result) > 0) {
            // set a session variable
            $_SESSION['error'] = "Name is already used";

            header("Location: ../frontend/register.php");
        }
        else{
            // Insert user data into database
            mysqli_query($conn, "INSERT INTO users (email, name, password, phone,is_library_owner, image) VALUES ('$email', '$name', '$password', '$phone','$user_type', '$image_path')");

            if($user_type == 1){
                mysqli_query($conn, "INSERT INTO libraries (name, image) VALUES ('$name', '$image_path')");
            }
            // Redirect to login page
            header("Location: ../frontend/login.php");
        }
    }