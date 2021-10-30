<?php
session_start();
if (isset($_POST['btnlogin'])) {
    $username = $_POST['txtname'];
    $password = $_POST['txtpass'];

    include 'config.php';

    $sql = "SELECT *FROM user WHERE user_name = '$username' and user_password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loginOK'] = $username;
        header("location:./teacher/list-teacher.php");
    } 
    else {
        header("location:./index.php");
    }
}
?>