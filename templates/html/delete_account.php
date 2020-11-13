<?php
    echo "hii";
    include '../../mysqli_connect.php';
    session_start();
    $email=$_SESSION['username'];
    $delete_query="delete from user where email='$email'";
    if (mysqli_query($link,$delete_query)) {
        header("location:login.php");
    } else {
    echo "Error deleting record: " . mysqli_error($link);
    }
    
?>