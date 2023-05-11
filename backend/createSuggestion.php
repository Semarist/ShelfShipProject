<?php
    include 'db_conn.php';

    session_start();

    // Check if the form has been submitted and data is not empty
    if (isset($_POST['book_id']) && !empty($_POST['book_id'])) {
        $book_id = $_POST['book_id'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please choose a book";

        header("Location: ../frontend/createSuggestions.php");
    }
    // Check if the form has been submitted and data is not empty
    if (isset($_POST['user_id']) && !empty($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
    }
    else{
        // set a session variable
        $_SESSION['error'] = "Please choose a user";

        header("Location: ../frontend/createSuggestions.php");
    }

    // Prepare the SQL query
    $sql = "INSERT INTO suggestions (user_id, book_id) VALUES ('$user_id', '$book_id')";

    // Execute the query
    if(mysqli_query($conn, $sql)) {

        // set a session variable
        $_SESSION['success'] = 'Suggestion created successfully!';

        header("Location: ../frontend/createSuggestions.php");
        exit();
    } else {
        // set a session variable
        $_SESSION['error'] = 'Error in creating suggestion!';

        header("Location: ../frontend/createSuggestions.php");
        exit();
    }