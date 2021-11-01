<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container-fluid ">
                <div class="row mt-3 pt-3 border-bottom border-dark">
                    <div class="col-md-6">
                        <h2 >Danh sách lớp</h2>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <div class="row">
                    <div class="py-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-md btn-outline-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-user-plus"></i> Thêm Lớp Học
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm Lớp Học</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label for="classid" class="form-label">Mã Lớp Học</label>
                                                <input type="text" class="form-control" name="classid" id="classid" placeholder="Nhập mã lớp học:10,11,12">
                                            </div>
                                            <div class="mb-3">
                                                <label for="classname" class="form-label">Tên Lớp Học</label>
                                                <input type="text" class="form-control" name="classname" id="classname" placeholder="Nhập tên lớp học:10A1,11A1,12A1,....">
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachid" class="form-label">Nhập mã giáo viên chủ nhiệm</label>
                                                <input type="text" class="form-control" name="teachid" id="teachid" placeholder="Nhập mã giáo viên:GV01,GV02,...">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary" name="btnSave">Lưu thay đổi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <table class="table table-hover table-striped" id="example">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Mã Lớp Học</th>
                            <th scope="col">Tên Lớp Học</th>
                            <th scope="col">Giáo Viên Chủ Nhiệm</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT  cl.class_id, cl.class_name, t.teach_name FROM classes cl, teachers t 
                            WHERE cl.teach_id = t.teach_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['class_id']; ?> </th>
                                    <td><?php echo $row['class_name']; ?></td>
                                    <td><?php echo $row['teach_name']; ?></td>
                                    <td>
                                        <a class="btn btn-warning"  href="detail-class.php?classid=<?php echo  $row['class_id'] ?>">Chi Tiết</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?php
if (isset($_POST['btnSave'])) {
    $classid = $_POST['classid'];
    $classname = $_POST['classname'];
    $teachid = $_POST['teachid'];
    $sql2 = "INSERT INTO `classes`(`class_id`, `class_name`, `teach_id`)
     VALUES ('$classid','$classname','$teachid') ";

    $result = mysqli_query($conn, $sql2);

    if ($result > 0) {
?>
    <script>
        location.reload();
    </script>
<?php
    } else {
        echo "Lỗi!";
    }

    mysqli_close($conn);
}

?>
<?php
include 'footerad.php';
?>