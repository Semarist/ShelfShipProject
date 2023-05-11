<?php
include "db_conn.php";
session_start();

//clear all session variables
session_unset();
session_destroy();

header("Location: ../frontend/login.php");