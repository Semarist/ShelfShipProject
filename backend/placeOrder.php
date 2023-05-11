<?php
include 'db_conn.php';

session_start();
    $book = '';
    if (isset($_GET['id'])){
        $book_id = $_GET['id'];
        // Prepare the SQL query
        $sql = 'SELECT * FROM books WHERE id ='. $book_id;

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check if there is a result
        if(mysqli_num_rows($result) > 0) {
            // Retrieve the book data
            $book = mysqli_fetch_assoc($result);

        } else {
            echo "No book found with ID $book_id";
        }
    }
    // Get the form data
    if (isset($_POST['address']) && !empty($_POST['address'])) {
        $address = $_POST['address'];
    }

    $user_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];
    $price = $book['price'];
    $book_name = $book['book_name'];
    $library = $book['library'];

    //get today's date
    $date = date("Y-m-d");

    // Prepare the SQL query
    $sql = "INSERT INTO orders (date,price, address, book_name, library,user_id, user_name) VALUES ('$date','$price','$address', '$book_name', '$library', '$user_id', '$user_name')";

    // Execute the query
    if(mysqli_query($conn, $sql)) {
        // set a session variable
        $_SESSION['success'] = 'Order placed successfully!';

        header("Location: ../frontend/books.php");
        exit();
    } else {
        // set a session variable
        $_SESSION['error'] = 'Error in placing order!';

        header("Location: ../frontend/books.php");
    }