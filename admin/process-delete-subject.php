<?php
    include '../config.php';
    $id = $_GET['id'];
    $sql ="DELETE FROM subjects WHERE  `sb_id` = '$id'" ;
    $result = mysqli_query($conn,$sql);
    if($result>0){
        header("Location:subject.php");
    }else{
        echo 'Lỗi';
    }
    mysqli_close($conn);

?>
