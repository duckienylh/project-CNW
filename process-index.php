<?php
session_start();
if (isset($_POST['btnlogin'])) {
    $username = $_POST['txtname'];
    $password = $_POST['txtpass'];

    $conn = mysqli_connect('localhost', 'root', '', 'danhba_dt');
    if (!$conn) {
        die("khong ket noi dc");
    }

    $sql = "SELECT *FROM db_users WHERE user_name = '$username' and user_pass = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['loginOK'] = $username;
        header("location:./reuse/header.php");
    } 
    // else {
    //     header("location:./index.php");
    // }
}
?>