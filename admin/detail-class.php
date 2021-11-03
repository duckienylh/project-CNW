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
                    <div><a class="btn btn-success " href="class.php">Quay lại</a></div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
            <div class="row">
                    <div class=" py-2">
                        <button type="button" class="btn btn-primary btn-md btn-outline-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fas fa-user-plus"></i> Thêm học sinh
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm học sinh</h5>
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
                                                <label for="classid" class="form-label">Mã lớp học</label>
                                                <input type="text" disabled class="form-control" name="classid" id="classid" value="<?php echo $id?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentid" class="form-label">Mã học sinh</label>
                                                <input type="text" class="form-control" name="studentid" id="studentid" placeholder="Nhập mã học sinh:HS01,HS02,HS03....">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentname" class="form-label">Tên học sinh</label>
                                                <input type="text" class="form-control" name="studentname" id="studentname" placeholder="Nhập mã môn học:Maths,Literature,....">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentbirth" class="form-label">Ngày sinh</label>
                                                <input type="date" class="form-control" name="studentbirth" id="studentbirth" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentaddress" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" name="studentaddress" id="studentaddress" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentgender" class="form-label">Giới tính</label>
                                                <input type="text" class="form-control" name="studentgender" id="studentgender" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentphone" class="form-label">Số điện thoại</label>
                                                <input type="tel" class="form-control" name="studentphone" id="studentphone" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentparent" class="form-label">Tên phụ huynh</label>
                                                <input type="text" class="form-control" name="studentparent" id="studentparent" placeholder="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="studentemail" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="studentemail" id="studentemail" placeholder="abc@gmail.com">
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
                <table class="table table-hover table-striped">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Mã học sinh</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phụ huynh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT st_id, st_name, st_birth, st_address, st_gender, st_phone, st_parent, st_email FROM students
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
                                    <td><?php echo $row['st_email']; ?></td>
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
if (isset($_POST['btnSave'])) {
    $stid=$_POST['studentid'];
    $stname=$_POST['studentname'];
    $stbirth=$_POST['studentbirth'];
    $staddress=$_POST['studentaddress'];
    $stgender=$_POST['studentgender'];
    $stphone=$_POST['studentphone'];
    $stparent=$_POST['studentparent'];
    $studentemail=$_POST['studentemail'];
    $username = $_POST['username'];
    $userpass = $_POST['userpass'];

    $sql2 = "INSERT INTO `students`(`st_id`, `st_name`, `st_birth`, `st_address`, `st_gender`, `st_phone`, `st_parent`, `st_email`, `class_id`)
    VALUES ('$stid','$stname','$stbirth','$staddress','$stgender','$stphone','$stparent','$studentemail', '$id') ";
    
    $sql3 = "INSERT INTO `users`(`user_id`, `user_name`, `user_email`, `user_password`, `user_level`) 
    VALUES ('$stid','$username',' $studentemail','$userpass','2')";

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
include 'footerad.php'
?>