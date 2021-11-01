<?php
// session_start();
// // if (isset($_POST['btnlogin'])) { //phải bấm đăng nhập thì mới vào được trang này
//     $userName = $_POST['userName'];
//     $password = $_POST['password'];

//     include 'config.php';
//     $sql = "SELECT * FROM users WHERE user_name = '$userName'";
//     $result = mysqli_query($conn, $sql);

//     //Xác thực
//     if (mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         // $pass_hash = $row['user_pass'];
//         $level = $row['user_level'];
//         // if (password_verify($password, $pass_hash))
//         if ($password == $row['user_password']) {
//             //cấp session
//             // $_SESSION['current_user'] = $userName;
//             $_SESSION['loginOK'] = $userName;
//             if ($level == 0) { //Kiểm tra user level
//                 echo "admin";  //admin
//             } else if ($level == 1) {
//                 echo "teacher"; //teacher
//             } else {
//                 echo "student";
//             }
//         } else {
//             echo "wrong"; //sai password
//         header('location:index.php');

//         }
//     } else {
//         header('location:index.php');
//     }
// // } else header('location:index.php'); //chuyển về trang đăng nhập


session_start();
include 'config.php';
$username = $_POST['userName'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user_name = '$username'"; //câu lệnh sql kiểm tra người dùng tồn tại hay ko
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) { // vòng if kiểm tra câu lệnh truy vấn
    // $password_hashed = $row['user_pass']; // lấy password hash ở trên db
    // if (password_verify($password, $password_hashed)) { // kiểm tra password nhập vào từ form so với mật khẩu đã lấy trên db
        // $sql1 = "SELECT * FROM users WHERE user_name = '$username'";
        // // $sql1 = "SELECT * FROM  db_users where user_name = '$username' AND user_pass ='$password';";
        // $result1 = mysqli_query($conn, $sql1); // truy vấn 2 bảng dữ liệu để lấy ra tất cả thông tin người dùng ứng vs user đã nhập vào 

        // $user = mysqli_fetch_assoc($result);
        if ($user['user_password'] == $password) { // Kiểm tra tài khoản xác thực
            $_SESSION['current_user'] = $user;
            if($user['user_level'] == 0){
                echo json_encode(array(
                    'status' => 1,
                    'level' => 0,
                    'message' => 'Đăng nhập thành công'
                ));    
            }
            else if($user['user_level'] == 1){
                echo json_encode(array(
                    'status' => 1,
                    'level' => 1,
                    'message' => 'Đăng nhập thành công'
                ));
            }
            else if($user['user_level'] == 2){
                echo json_encode(array(
                    'status' => 1,
                    'level' => 2,
                    'message' => 'Đăng nhập thành công'
                ));
            }
            exit;
        } else {
            echo json_encode(array(
                'status' => 0,
                'message' => 'Sai mật khẩu'
            ));
        }
} else {
    echo json_encode(array(
        'status' => 0,
        'message' => 'Người dùng không tồn tại'
    ));
    exit;
}

mysqli_close($conn); 