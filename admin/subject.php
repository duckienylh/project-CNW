<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container-fluid ">
                <div class="row mt-3 pt-3 border-bottom border-dark">
                    <div class="col-md-6">
                        <h2>Danh sách môn học</h2>
                    </div>
                </div>


            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <div class="row">
                    <div class="py-2">
                        <button type="button" class="btn btn-primary btn-md btn-outline-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-user-plus"></i> Thêm Môn Học
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm Môn Học</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label for="subjectid" class="form-label">Mã Môn Học</label>
                                                <input type="text" class="form-control" name="subjectid" id="subjectid" placeholder="Nhập mã môn học:SB01,SB02....">
                                            </div>
                                            <div class="mb-3">
                                                <label for="subjectname" class="form-label">Tên Môn Học</label>
                                                <input type="text" class="form-control" name="subjectname" id="subjectname" placeholder="Nhập tên môn học:Toán,Văn,....">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                            <button type="submit" class="btn btn-primary" name="btnSave">Thêm</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-hover table-striped " id="example">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Mã Môn Học</th>
                            <th scope="col">Tên Môn Học</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT  sb_id, sb_name FROM subjects sb ";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sb_id']; ?> </th>
                                    <td><?php echo $row['sb_name']; ?></td>
                                    
                                    <td>
                                        <a class="btn btn-warning" href="edit-subject.php?id=<?php echo  $row['sb_id'] ?>"><i class="fas fa-user-edit"></i></a>
                                        <a class="btn btn-danger" href="process-delete-subject.php?id=<?php echo  $row['sb_id'] ?>"><i class="fas fa-user-slash"></i></a>
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
    $subjectid = $_POST['subjectid'];
    $subjectname = $_POST['subjectname'];
    $sql2 = "INSERT INTO `subjects`(`sb_id`, `sb_name`)
    VALUES ('$subjectid','$subjectname') ";

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