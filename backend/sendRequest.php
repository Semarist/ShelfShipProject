<?php
include 'db_conn.php';

session_start();

    // Get the form data
    if (isset($_POST['author']) && !empty($_POST['author'])) {
        $author = $_POST['author'];
    }
    if (isset($_POST['book_name']) && !empty($_POST['book_name'])) {
        $book_name = $_POST['book_name'];
    }

    // Prepare the SQL query
    $sql = "INSERT INTO requests (book_name, author) VALUES ('$book_name', '$author')";

    // Execute the query
    if(mysqli_query($conn, $sql)) {

        // set a session variable
        $_SESSION['success'] = 'Request Sent successfully!';

        header("Location: ../frontend/books.php");
        exit();
    } else {
        // set a session variable
        $_SESSION['error'] = 'Error sending Request!';

        header("Location: ../frontend/sendRequest.php");
        exit();    }