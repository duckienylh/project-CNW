<?php
include './sidebarst.php';
?>



<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <h2 class="text-primary">Student</h2>

        </div>


        <div class=" col-md-12" style="width:100% ; overflow: auto; height: auto">

                <table class="table table-primary table-hover table-bordered">
                    <thead class=" text while">
                        <tr  >
                            <th scope="col">Mã học sinh</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tên phụ huynh</th>
                            <th scope="col">Mã lớp</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                           // * B1: mở kết nối
                            include '../config.php';
                            //* B2: Truy vấn
                            $sql = "SELECT * FROM `students`";

                            //? lưu kết quả trả về $result
                            $result = mysqli_query($conn, $sql);
                            

                            //* B3: Phân tích sử lý kết quả
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo '<td>' . $row['st_id'] . '</td>';
                                    echo '<td>' . $row['st_name'] . '</td>';
                                    echo '<td>' . $row['st_birth'] . '</td>';
                                    echo '<td>' . $row['st_address'] . '</td>';
                                    echo '<td>' . $row['st_gender'] . '</td>';
                                    echo '<td>' . $row['st_phone'] . '</td>';
                                    // echo '<td>' . $row['ma_final_exam'] . '</td>';
                                    // echo '<td>' . $row['ma_avarage'] . '</td>';
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