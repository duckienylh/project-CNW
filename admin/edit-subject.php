<?php
include 'headerad.php';
include '../config.php';
$id = $_GET['id']
?>
<main>
    <?php
        $sql = "SELECT * FROM subjects WHERE sb_id = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $subjectname= $row['sb_name'];
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
                        <label for="subjectid" class="form-label">Mã Môn Học</label>
                        <input type="text" class="form-control" disabled name="subjectid" id="subjectid" value="<?php echo $id ?>">
                    </div>
                    <div class="mb-3">
                        <label for="subjectname" class="form-label">Tên Môn Học</label>
                        <input type="text" class="form-control" name="subjectname" id="subjectname" value="<?php echo $subjectname ?>">
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