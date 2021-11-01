<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class=" col py-3 ">
            <div class="container ">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Teacher</h2>
                    </div>
                </div>

            </div>

            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <div class="row">
                    <div class="float-end py-2">
                        <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                            <i class="fas fa-user-plus"></i> Thêm Giáo Viên
                        </a>
                    </div>
                </div>
                <table class="table table-hover table-striped" id="example">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Mã giáo viên</th>
                            <th scope="col">Tên giáo viên</th>
                            <th scope="col">Email</th>
                            <th scope="col">SĐT</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        include "../config.php";
                        $sql = "SELECT t.teach_id, t.teach_name, t.teach_email, t.teach_phone, t.teach_address, t.teach_gender, t.teach_birth, sb.sb_name 
                        FROM teachers t, subjects sb
                        WHERE t.sb_id = sb.sb_id";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['teach_id']; ?> </th>
                                    <td><?php echo $row['teach_name']; ?></td>
                                    <td><?php echo $row['teach_email']; ?></td>
                                    <td><?php echo $row['teach_phone']; ?></td>
                                    <td><?php echo $row['teach_address']; ?></td>
                                    <td><?php echo $row['teach_gender']; ?></td>
                                    <td><?php echo $row['teach_birth']; ?></td>
                                    <td><?php echo $row['sb_name']; ?></td>
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
        $('#example').DataTable();
    });
</script>
<?php
include 'footerad.php';
?>