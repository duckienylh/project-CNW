<?php
    include '../config.php';
    $id = $_GET['id'];
    $sql ="DELETE FROM students WHERE `st_id` = '$id'" ;
    $sql1 = "DELETE FROM `users` WHERE `user_id` = '$id'";

    $result1 = mysqli_query($conn,$sql1);
    $result = mysqli_query($conn,$sql);
    if($result>0){
        header("Location:class.php");
    }else{
        echo 'Lỗi';
    }
    mysqli_close($conn);

?>