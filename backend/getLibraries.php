<?php

    include 'db_conn.php';

    session_start();

    // Prepare the SQL query to get the libraries
    $sql = "SELECT * FROM libraries";
    $result1 = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result1) > 0) {
        $libraries = array();
        while ($row = mysqli_fetch_assoc($result1)) {
            $libraries[] = $row;
        }
    } else {
        $libraries = null;
    }

    echo json_encode($libraries);
