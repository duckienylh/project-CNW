<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class=" col py-3 ">
            <div class="container-fluid ">
                <div class="row mt-3 pt-3 border-bottom border-dark">
                    <div class="col-md-6">
                        <h2>Danh sách giáo viên</h2>
                    </div>
                </div>

            </div>

            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <div class="row">
                    <div class="py-2">
                        <button type="button" class="btn btn-primary btn-md btn-outline-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-user-plus"></i> Thêm giáo viên
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm giáo viên</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Tên đăng nhập</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Tên đăng nhập hệ thống" require>
                                            </div>
                                            <div class="mb-3">
                                                <label for="userpass" class="form-label">Mật khẩu</label>
                                                <input type="password" class="form-control" name="userpass" id="userpass" placeholder="Mật khẩu đăng nhập" require>
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachid" class="form-label">Mã Giáo Viên</label>
                                                <input type="text" class="form-control" name="teachid" id="teachid" placeholder="Nhập mã môn học:Maths,Literature,...." require>
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachname" class="form-label">Tên Giáo Viên</label>
                                                <input type="text" class="form-control" name="teachname" id="teachname" placeholder="Nhập tên môn học:Toán,Văn,...." require>
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachemail" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="teachemail" id="teachemail" placeholder="name@example.com" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachphone" class="form-label">Số điện thoại</label>
                                                <input type="tel" class="form-control" name="teachphone" id="teachphone" placeholder="Nhập số điện thoại: 01214131,...." >
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachaddress" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" name="teachaddress" id="teachaddress" placeholder="Nhập địa chỉ: Hà Nội,..." require>
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachgender" class="form-label">Giới tính</label>
                                                <input type="text" class="form-control" name="teachgender" id="teachgender" placeholder="Nhập giới tính:Nam/Nữ" require>
                                            </div>
                                            <div class="mb-3">
                                                <label for="teachbirth" class="form-label">Ngày Sinh</label>
                                                <input type="date" class="form-control" name="teachbirth" id="teachbirth">
                                            </div>
                                            <div class="mb-3">
                                                <label for="subjid" class="form-label">Mã môn dạy</label>
                                                <input type="text" class="form-control" name="subjid" id="subjid" placeholder="Nhập mã môn học:Maths,Literature,...." require>
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
                            <th scope="col">Tên môn dạy</th>
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
                                        <a class="btn btn-warning" href="edit-teacher.php?id=<?php echo  $row['teach_id'] ?>"><i class="fas fa-user-edit"></i></a>
                                        <a class="btn btn-danger" href="process-delete-teacher.php?id=<?php echo  $row['teach_id'] ?>"><i class="fas fa-user-slash"></i></a>
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
    $teachid = $_POST['teachid'];
    $teachname = $_POST['teachname'];
    $teachemail = $_POST['teachemail'];
    $teachphone = $_POST['teachphone'];
    $teachaddress = $_POST['teachaddress'];
    $teachgender = $_POST['teachgender'];
    $teachbirth = $_POST['teachbirth'];
    $subjid = $_POST['subjid'];
    $username = $_POST['username'];
    $userpass = $_POST['userpass'];

    $sql2 = "INSERT INTO `teachers`(`teach_id`, `teach_name`, `teach_email`, `teach_phone`, `teach_address`, `teach_gender`, `teach_birth`, `sb_id`)
    VALUES ('$teachid','$teachname','$teachemail','$teachphone','$teachaddress','$teachgender','$teachbirth','$subjid')";
   
    $sql3 = "INSERT INTO `users`(`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) 
    VALUES ('$teachid','$username','$teachemail','$userpass','1')";


    $result2 = mysqli_query($conn, $sql3);
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