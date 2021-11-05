<?php
include 'headerad.php';
include '../config.php';
$stid = $_GET['stid'];
$sbid = $_GET['sbid'];
?>
<main>
    <?php
    $sql = "SELECT * FROM marks m, subjects sb, students st WHERE st.st_id = '$stid' AND sb.sb_id = '$sbid' and  m.st_id=st.st_id and m.sb_id=sb.sb_id ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $mintest = $row['ma_mini_test'];
        $hourtest = $row['ma_hour_test'];
        $finaltest = $row['ma_final_exam'];
    }
    ?>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3  border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Sửa điểm môn học</h2>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <form method="POST">
                    <div class="mb-3">
                        <label for="stid" class="form-label">Mã học sinh</label>
                        <input type="text" class="form-control" disabled name="stid" id="stid" value="<?php echo $stid ?>">
                    </div>
                    <div class="mb-3">
                        <label for="sbid" class="form-label">Mã môn học</label>
                        <input type="text" class="form-control" disabled name="sbid" id="sbid" value="<?php echo $sbid ?>">
                    </div>
                    <div class="mb-3">
                        <label for="mintest" class="form-label">Điểm 15 phút</label>
                        <input type="text" class="form-control" name="mintest" id="mintest" value="<?php echo $mintest ?>">
                    </div>
                    <div class="mb-3">
                        <label for="hourtest" class="form-label">Điểm 1 tiết</label>
                        <input type="text" class="form-control" name="hourtest" id="hourtest" value="<?php echo $hourtest ?>">
                    </div>
                    <div class="mb-3">
                        <label for="finaltest" class="form-label">Điểm cuối kỳ</label>
                        <input type="text" class="form-control" name="finaltest" id="finaltest" value="<?php echo $finaltest ?>">
                    </div>
                    <div class="text-center">
                        <a class="btn btn-success" href="result.php">Hủy</a>
                        <button type="submit" class="btn btn-primary" name="btnSave">Thay Đổi</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

</main>
<?php
if (isset($_POST['btnSave'])) {
    $mintest = $_POST['mintest'];
    $hourtest = $_POST['hourtest'];
    $finaltest = $_POST['finaltest'];
    $avg = ($mintest + $hourtest * 2 + $finaltest * 3) / 6;
    $sql2 = "UPDATE `marks` SET `ma_mini_test`='$mintest',
    `ma_hour_test`='$hourtest',`ma_final_exam`='$finaltest',`ma_avarage`='$avg'
     WHERE `st_id`='$stid' and `sb_id`='$sbid' ";

    $result = mysqli_query($conn, $sql2);

    if ($result > 0) {
?>
        <script>
            window.location.href = 'result.php';
        </script>
<?php
    } else {
        echo "Lỗi!";
    }

    mysqli_close($conn);
}

?>

<?php
include 'footerad.php'
?>