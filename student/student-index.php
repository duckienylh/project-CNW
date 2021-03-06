<?php
include './sidebarst.php';
?>



<div class="col py-3">

    <div class="d-flex justify-content-between bg-light ">
        <div class="col-md-6 mt-2">
            <h2 class="text-primary">Học Sinh</h2>
        </div>
        <form method="post">
            <div class="row">
                <div class="col-md-6 mt-2 d-flex">

                    <!-- <span class="icon"><i class="fa fa-search"></i></span> -->
                    <input type="text" class="form-control col-md-6 me-3" name="search-idstudent" placeholder="Search ID...">
                    <button type="submit" name="btnsearch" class="btn btn-primary">Search</button>

                </div>

            </div>

        </form>

    </div>


    <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #9ec5fe;">
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
                if (isset($_POST['btnsearch'])) {
                    $id_student = $_POST['search-idstudent'];
                    $sql = "SELECT * FROM `students` WHERE st_id ='$id_student'";
                    //* B2: Truy vấn
                    //? lưu kết quả trả về $result
                    $result = mysqli_query($conn, $sql);

                    //* B3: Phân tích sử lý kết quả
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['st_id'] . '</td>';
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['st_birth'] . '</td>';
                            echo '<td>' . $row['st_address'] . '</td>';
                            echo '<td>' . ($row['st_gender'] == 1 ? "Nam" : "Nữ") . '</td>';
                            echo '<td>' . $row['st_phone'] . '</td>';
                            echo '<td>' . $row['st_parent'] . '</td>';
                            echo '<td>' . $row['class_id'] . '</td>';
                            echo '</tr>';
                        }
                    }
                } else {
                    // $id_student = $_POST['search-idstudent'];
                    $sql = "SELECT * FROM `students`";
                    //* B2: Truy vấn
                    //? lưu kết quả trả về $result
                    $result = mysqli_query($conn, $sql);
                    //   echo $id_student;
                    //* B3: Phân tích sử lý kết quả
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['st_id'] . '</td>';
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['st_birth'] . '</td>';
                            echo '<td>' . $row['st_address'] . '</td>';
                            echo '<td>' . ($row['st_gender'] == 1 ? "Nam" : "Nữ") . '</td>';
                            echo '<td>' . $row['st_phone'] . '</td>';
                            echo '<td>' . $row['st_parent'] . '</td>';
                            echo '<td>' . $row['class_id'] . '</td>';
                            echo '</tr>';
                        }
                    }
                }
                //* B4: đóng kết nối
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>

</div>
<?php
include './foorterst.php';
?>