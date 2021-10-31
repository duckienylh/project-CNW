<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Class</h2>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-3">
                <div class="row">
                    <div class="float-end py-2">
                        <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                            <i class="fas fa-user-plus"></i> Thêm Lớp Học
                        </a>
                    </div>
                </div>
                <table class="table table-hover table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Mã Lớp Học</th>
                            <th scope="col">Tên Lớp Học</th>
                            <th scope="col">Giáo Chủ Nhiệm</th>
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
                                        <a class="btn btn-warning" href="">Chi Tiết</a>
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
include 'footerad.php';
?>