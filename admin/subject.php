<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Subject</h2>
                    </div>
                </div>


            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <div class="row">
                    <div class="float-end py-2">
                        <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                            <i class="fas fa-user-plus"></i> Thêm Môn Học
                        </a>
                    </div>
                </div>
                <table class="table table-hover display" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Mã Môn Học</th>
                            <th scope="col">Tên Môn Học</th>
                            <th scope="col">Giáo Viên</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT  sb.sb_id, sb.sb_name, t.teach_name FROM subjects sb, teachers t 
                            WHERE sb.sb_id = t.sb_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['sb_id']; ?> </th>
                                    <td><?php echo $row['sb_name']; ?></td>
                                    <td><?php echo $row['teach_name']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href=""><i class="fas fa-user-edit"></i></a>
                                        <a class="btn btn-danger" href=""><i class="fas fa-user-slash"></i></a>
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
        $('#example').DataTable({
            search: {
                return: true
            }
        });
    });
</script>
<?php
include 'footerad.php';
?>