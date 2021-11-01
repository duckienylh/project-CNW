<?php
include 'headerad.php';
$id = $_GET['classid']
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3  border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Danh sách học sinh lớp <?php echo $id; ?> </h2>
                    </div>
                    <div><a class="btn btn-success float-end" href="class.php">Quay lại</a></div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">

                <table class="table table-hover table-striped">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Mã học sinh</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Phụ huynh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT st_id, st_name, st_birth, st_address, st_gender, st_phone, st_parent FROM students
                        WHERE students.class_id = '$id'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['st_id']; ?> </th>
                                    <td><?php echo $row['st_name']; ?></td>
                                    <td><?php echo $row['st_birth']; ?></td>
                                    <td><?php echo $row['st_address']; ?></td>
                                    <td><?php echo $row['st_gender']; ?></td>
                                    <td><?php echo $row['st_phone']; ?></td>
                                    <td><?php echo $row['st_parent']; ?></td>
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
<?php
include 'footerad.php'
?>