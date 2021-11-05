<?php
include 'headerad.php';
include '../config.php';
$id = $_GET['id']
?>
<main>
    <?php
    $sql = "SELECT * FROM `classes`,`students` WHERE classes.class_id =students.class_id AND students.st_id= '$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $stname = $row['st_name'];
        $stemail = $row['st_email'];
        $stphone = $row['st_phone'];
        $staddress = $row['st_address'];
        $stgender =($row['st_gender'] == 1 ? "Nam" : "Nữ");
        $stbirth = $row['st_birth'];
        $stparent = $row['st_parent'];
        $classid = $row['class_id'];
    }
    ?>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3  border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Sửa thông tin học sinh</h2>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <form method="POST">
                    <div class="mb-3">
                        <label for="stid" class="form-label">Mã học sinh</label>
                        <input type="text" class="form-control" disabled name="stid" id="stid" value="<?php echo $id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stname" class="form-label">Tên học sinh</label>
                        <input type="text" class="form-control" name="stname" id="stname" value="<?php echo $stname ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stemail" class="form-label">Email</label>
                        <input type="text" class="form-control" name="stemail" id="stemail" value="<?php echo $stemail ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stphone" class="form-label">Số Điện thoại</label>
                        <input type="tel" class="form-control" name="stphone" id="stphone" value="<?php echo $stphone ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stparent" class="form-label">Phụ huynh học sinh</label>
                        <input type="tel" class="form-control" name="stparent" id="stparent" value="<?php echo $stparent ?>">
                    </div>
                    <div class="mb-3">
                        <label for="staddress" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name="staddress" id="staddress" value="<?php echo $staddress ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stgender" class="form-label">Giới tính</label>
                        <input type="text" class="form-control" name="stgender" id="stgender" value="<?php echo $stgender ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stbirth" class="form-label">Ngày sinh </label>
                        <input type="date" class="form-control" name="stbirth" id="stbirth" value="<?php echo $stbirth ?>">
                    </div>
                    <div class="mb-3">
                        <label for="classid" class="form-label">Tên lớp học</label>
                        <select class="form-control" id="classid" name="classid">
                            <?php
                            include '../config.php';
                            $sql2= "SELECT * FROM classes, students where classes.class_id = students.class_id and students.st_id = '$id'";
                            $sql = "SELECT * FROM  classes";
                            $result2 = mysqli_query($conn,$sql2);
                            $clname = mysqli_fetch_assoc($result2);
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result)) {
                                echo '<option value="' . $clname['class_id'] . '">' . $clname['class_name'] . '</option>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['class_id'] . '">' . $row['class_name'] . '</option>';
                                }
                            }
                            ?>

                        </select>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-success" href="class.php">Hủy</a>
                        <button type="submit" class="btn btn-primary" name="btnSave">Thay Đổi</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

</main>
<?php
if (isset($_POST['btnSave'])) {
    $stname = $_POST['stname'];
    $stemail = $_POST['stemail'];
    $stphone = $_POST['stphone'];
    $staddress = $_POST['staddress'];
    $stgender = $_POST['stgender'];
    $stbirth = $_POST['stbirth'];
    $stparent = $_POST['stparent'];
    $classid = $_POST['classid'];
    $sql2 = "UPDATE `students` SET `st_name`='$stname',`st_birth`='$stbirth',`st_address`='$staddress',`st_gender`='$stgender', `st_phone`='$stphone',
    `st_gender`='$stgender', `st_phone`='$stphone',`st_parent`='$stparent',`st_email`='$stemail',`class_id`='$classid'
    WHERE `st_id`='$id' ";

    $result = mysqli_query($conn, $sql2);

    if ($result > 0) {
?>
        <script>
            window.location.href = 'class.php';
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