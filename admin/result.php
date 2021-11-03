<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">

        <div class="col py-3  ">
            <div class="container-fluid ">
                <div class="row mt-3 pt-3 border-bottom border-dark">
                    <div class="col-md-6">
                        <h2>Bảng điểm</h2>
                    </div>
                </div>


            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto">
                <div class="row">
                    <div class=" py-2">
                        <button type="button" class="btn btn-primary btn-md btn-outline-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-user-plus"></i> Thêm Điểm
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm Điểm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">

                                            <div class="mb-3">
                                                <label for="studentid" class="form-label">Mã học sinh</label>
                                                <input type="text" class="form-control" name="studentid" id="studentid" placeholder="Nhập mã học sinh:HS01,HS02,HS03....">
                                            </div>
                                            <div class="mb-3">
                                                <label for="subjectid" class="form-label">Mã môn học</label>
                                                <input type="text" class="form-control" name="subjectid" id="subjectid" placeholder="Nhập mã môn học:Maths,Literature,....">
                                            </div>
                                            <div class="mb-3">
                                                <label for="min-test" class="form-label">Điểm 15 phút</label>
                                                <input type="text" class="form-control" name="min-test" id="min-test" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="hourtest" class="form-label">Điểm 1 tiết</label>
                                                <input type="text" class="form-control" name="hourtest" id="hourtest" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="finaltest" class="form-label">Điểm cuối kỳ</label>
                                                <input type="text" class="form-control" name="finaltest" id="finaltest" placeholder="">
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
                            <th scope="col">Mã học sinh</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Điểm trung bình</th>
                            <th scope="col">Chức năng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT  st.st_id, st.st_name, m.ma_avarage, sb.sb_name, sb.sb_id FROM students st, marks m, subjects sb
                        WHERE st.st_id = m.st_id and sb.sb_id=m.sb_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['st_id']; ?> </th>
                                    <td><?php echo $row['st_name']; ?></td>
                                    <td><?php echo $row['sb_name']; ?></td>
                                    <td><?php echo $row['ma_avarage']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="detail-result.php?stid=<?php echo $row['st_id'] ?>&sbid=<?php echo $row['sb_id'] ?>">Chi Tiết</a>
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
    $studentid = $_POST['studentid'];
    $subjectid = $_POST['subjectid'];
    $mintest = $_POST['min-test'];
    $hourtest = $_POST['hourtest'];
    $finaltest = $_POST['finaltest'];
    $avg = ($mintest + $hourtest * 2 + $finaltest * 3) / 6;
    $sql2 = "INSERT INTO `marks`(`st_id`, `sb_id`, `ma_mini_test`, `ma_hour_test`, `ma_final_exam`, `ma_avarage`) 
    VALUES ('$studentid',' $subjectid','$mintest','$hourtest',' $finaltest','$avg')";

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
include 'footerad.php';
?>