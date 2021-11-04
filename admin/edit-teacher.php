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
        $teachname = $row['teach_name'];
        $teachemail = $row['teach_email'];
        $teachphone = $row['teach_phone'];
        $teachaddress = $row['teach_address'];
        $teachgender = ($row['teach_gender'] == 1 ? "Nam" : "Nữ");
        $teachbirth = $row['teach_birth'];
        $subjectid = $row['sb_id'];
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
                        <input type="text" class="form-control" name="teachname" id="teachname" value="<?php echo $teachname ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teachemail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="teachemail" id="teachemail" value="<?php echo $teachemail ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teachphone" class="form-label">Số Điện thoại</label>
                        <input type="tel" class="form-control" name="teachphone" id="teachphone" value="<?php echo $teachphone ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teachaddress" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="teachaddress" id="teachaddress" value="<?php echo $teachaddress ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teachgender" class="form-label">Giới tính</label>
                        <input type="text" class="form-control" name="teachgender" id="teachgender" value="<?php echo $teachgender ?>">
                    </div>
                    <div class="mb-3">
                        <label for="teachbirth" class="form-label">Ngày sinh </label>
                        <input type="date" class="form-control" name="teachbirth" id="teachbirth" value="<?php echo $teachbirth ?>">
                    </div>
                    <div class="mb-3">
                        <label for="subjectid" class="form-label">Tên môn học</label>
                        <select class="form-control" id="subjectid" name="subjectid">
                            <?php
                            include '../config.php';
                            $sql = "SELECT * FROM  subjects";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['sb_id'] . '">' . $row['sb_name'] . '</option>';
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-success" href="teacher.php">Hủy</a>
                        <button type="submit" class="btn btn-primary" name="btnSave">Thay Đổi</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

</main>
<?php
if (isset($_POST['btnSave'])) {
    $teachname = $_POST['teachname'];
    $teachemail = $_POST['teachemail'];
    $teachphone = $_POST['teachphone'];
    $teachaddress = $_POST['teachaddress'];
    $teachgender = $_POST['teachgender'];
    $teachbirth = $_POST['teachbirth'];
    $subjectid = $_POST['subjectid'];
    $sql2 = "UPDATE `teachers` SET `teach_name`='$teachname',`teach_email`='$teachemail',
    `teach_phone`='$teachphone',`teach_address`='$teachaddress',`teach_gender`='$teachgender',
    `teach_birth`='$teachbirth',`sb_id`='$subjectid'
    WHERE `teach_id`='$id' ";

    $result = mysqli_query($conn, $sql2);

    if ($result > 0) {
?>
        <script>
            window.location.href = 'teacher.php';
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