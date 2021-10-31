<?php
session_start();
if (isset($_POST['btnlogin'])) { //phải bấm đăng nhập thì mới vào được trang này
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    include 'config.php';
    $sql = "SELECT * FROM users WHERE user_name = '$userName'";
    $result = mysqli_query($conn, $sql);

    //Xác thực
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // $pass_hash = $row['user_pass'];
        $level = $row['user_level'];
        // if (password_verify($password, $pass_hash))
        if ($password == $row['user_password']) {
            //cấp session
            // $_SESSION['current_user'] = $userName;
            if ($level == 0) { //Kiểm tra user level
                echo "admin";  //admin
                $_SESSION['loginOK'] = $userName;
            } else if ($level == 1) {
                echo "teacher"; //teacher
                $_SESSION['loginOK'] = $userName;
            } else {
                echo "student";
                $_SESSION['loginOK'] = $userName;
            }
        } else {
            echo "wrong"; //sai password
        }
    } else {
        header('location:index.php');
    }
} else header('location:index.php'); //chuyển về trang đăng nhập