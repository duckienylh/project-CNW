<?php
include './sidebarst.php';
$id = $client_user['user_id'];
?>

<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class=" bg-light">
            <div class="d-flex justify-content-between  ">
                <p><i class="fas fa-users"></i> Lớp học
                </p>
            </div>
            <div class="d-flex mb-2  ">
                <LAbel class="control-label fw-bolder">Lớp :

                    <?php
                     // * B1: mở kết nối
                     include '../config.php';
                    $sql1="SELECT c.class_id, c.class_name, st.st_id FROM classes c, students st 
                    WHERE st.class_id=c.class_id and st.st_id='$id'";
                    $result1 = mysqli_query($conn,$sql1);
                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {
                    ?>
                    <?php echo $row['class_name']; ?>
                    <?php
                        }
                    }
                ?>
                </LAbel>
            </div>
        </div>

        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto ;">

            <table class="table table-primary table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Mã học sinh</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">địa chỉ</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">số điện thoại</th>
                        <th scope="col">Phụ huynh</th>
                    </tr>
                </thead>
                <tbody>
                    <!--xuất dữ liệu theo CSDL -->
                    <?php
                           // * B1: mở kết nối
                            include '../config.php';
                            //* B2: Truy vấn
                            $sql = "SELECT st.st_id,st.st_name,st.st_birth,st.st_address,st.st_gender,st.st_phone,st.st_parent 
                            FROM students st,classes c,users u 
                            WHERE st.class_id = c.class_id and st.st_id=u.user_id";

                            //? lưu kết quả trả về $result
                            $result = mysqli_query($conn, $sql);
                           

                            //* B3: Phân tích sử lý kết quả,,,,
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                   
                                    echo '<td>' . $row['st_id'] . '</td>';
                                    echo '<td>' . $row['st_name'] . '</td>';
                                    echo '<td>' . $row['st_birth'] . '</td>';
                                    echo '<td>' . $row['st_address'] . '</td>';
                                    echo '<td>' . $row['st_gender'] . '</td>';
                                    echo '<td>' . $row['st_phone'] . '</td>';
                                    echo '<td>' . $row['st_parent'] . '</td>';
                                    echo '</tr>';
                                }
                            }
                            //* B4: đóng kết nối
                            mysqli_close($conn);
                            ?>

                </tbody>
            </table>
        </div>
    </main>
</div>

<?php
include './foorterst.php';
?>