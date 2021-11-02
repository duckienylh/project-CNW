<?php
include 'headerad.php';
include '../config.php';
$id = $_GET['id']
?>
<main>
    <?php
        $sql = "SELECT * FROM teachers t, subjects sb WHERE t.teach_id = $id AND t.sb_id = sb.sb_id ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $teachname= $row['teach_name'];
            $teachemail= $row['teach_email'];
            $teachphone= $row['teach_phone'];
            $teachaddress= $row['teach_address'];
            $teachgender= $row['teach_gender'];
            $teachbirth= $row['teach_birth'];
            $teachname= $row['teach_name'];
            $subjectname = $row['sb_name'];
        }
    ?>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3  border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Sửa thông tin môn học</h2>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <form method="POST">
                    <div class="mb-3">
                        <label for="teachid" class="form-label">Mã giáo viên</label>
                        <input type="text" class="form-control" disabled name="teachid" id="teachid" value="<?php echo $id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teachname" class="form-label">Tên giáo viên</label>
                        <input type="text" class="form-control" name="teachname" id="teachname" value="<?php echo $subjectname ?>">
                    </div>
                    <div class="text-center">
                        <a class="btn btn-success" href="subject.php">Hủy</a>
                        <button type="submit" class="btn btn-primary" name="btnSave">Thay Đổi</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

</main>
<?php
if (isset($_POST['btnSave'])) {
    $subjectname = $_POST['subjectname'];
    $sql2 = "UPDATE `subjects` SET `sb_name`='$subjectname' WHERE `sb_id`='$id' ";

    $result = mysqli_query($conn, $sql2);

    if ($result > 0) {
        ?>
        <script>
            window.location.href = 'subject.php';
        </script>
    <?php
    } else {
        echo "Lỗi!";
    }

    mysqli_close($conn);
}

?>
?>
<?php
include 'footerad.php'
?>