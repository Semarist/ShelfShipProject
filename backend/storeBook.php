<?php
include 'db_conn.php';

session_start();

// Check if the form has been submitted and data is not empty
if (isset($_POST['book_name']) && !empty($_POST['book_name'])) {
    $book_name = $_POST['book_name'];
}
else{

    // set a session variable
    $_SESSION['error'] = "Please enter an book name";

    header("Location: ../frontend/uploadBook.php");
}
if (isset($_POST['price']) && !empty($_POST['price'])) {
    $price = $_POST['price'];
}
else{

    // set a session variable
    $_SESSION['error'] = "Please enter a price";

    header("Location: ../frontend/uploadBook.php");
}
if (isset($_POST['rating']) && !empty($_POST['rating'])) {
    //hash the password using md5
    $rating = $_POST['rating'];
}
else{
    // set a session variable
    $_SESSION['error'] = "Please enter a rating";

    header("Location: ../frontend/uploadBook.php");
}
if (isset($_POST['author']) && !empty($_POST['author'])) {
    $author = $_POST['author'];
}
else{

    // set a session variable
    $_SESSION['error'] = "Please enter a author";

    header("Location: ../frontend/register.php");
}
if (isset($_POST['date']) && !empty($_POST['date'])) {
    $date = $_POST['date'];
}
else{

    // set a session variable
    $_SESSION['error'] = "Please enter a date";
    header("Location: ../frontend/uploadBook.php");
}
if (isset($_POST['category']) && !empty($_POST['category'])) {
    $category = $_POST['category'];
}
else{

    // set a session variable
    $_SESSION['error'] = "Please select a user date";
    header("Location: ../frontend/uploadBook.php");
}
if (isset($_POST['image']) && !empty($_POST['image'])) {
    $image = $_POST['image'];
}
else{
    // set a session variable
    $_SESSION['error'] = "Please select an image name";
    header("Location: ../frontend/uploadBook.php");
}

    $library = $_SESSION['name'];
    $image_path = "../frontend/images/".$image.".png";

    // Insert user data into database
    mysqli_query($conn, "INSERT INTO books (book_name, author, library, price,rating, category, date, image) VALUES ('$book_name', '$author', '$library', '$price','$rating', '$category', '$date', '$image_path')");


    // set a session variable
    $_SESSION['success'] = "Book Uploaded Successfully!";
    // Redirect to login page
    header("Location: ../frontend/uploadBook.php");