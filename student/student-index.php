<?php
include './sidebarst.php';
?>



<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <div class="col-md-6">
                <h2 class="text-primary">Student</h2>
            </div>
            <form method="post">
                <div class="row">
                    <div class="form-group row  mt-1 ">
                        <div class="container-1">
                            <!-- <span class="icon"><i class="fa fa-search"></i></span> -->
                            <input type="text" class="form-control" name="search-idstudent" placeholder="Search...">
                        </div>
                    </div>
                    <div class="col-md-3 mt-1">
                        <div class="form-group row ">
                            <div class="col-sm-10 ">
                                <button type="submit" name="btnsearch" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>


        <div class=" col-md-12" style="width:100% ; overflow: auto; height: auto">
            <table class="table table-primary table-hover table-bordered">
                <thead class=" text while">
                    <tr>
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
                            if (isset($_POST['btnsearch'])){
                                $id_student = $_POST['search-idstudent'];
                                 $sql = "SELECT * FROM `students` WHERE st_id ='$id_student'";
                                  //* B2: Truy vấn
                                //? lưu kết quả trả về $result
                                $result = mysqli_query($conn, $sql);
                                echo $id_student;
                                //* B3: Phân tích sử lý kết quả
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<tr>';
                                        echo '<td>' . $row['st_id'] . '</td>';
                                        echo '<td>' . $row['st_name'] . '</td>';
                                        echo '<td>' . $row['st_birth'] . '</td>';
                                        echo '<td>' . $row['st_address'] . '</td>';
                                        echo '<td>' . $row['st_gender'] . '</td>';
                                        echo '<td>' . $row['st_phone'] . '</td>';
                                        echo '<td>' . $row['st_parent'] . '</td>';
                                        echo '<td>' . $row['class_id'] . '</td>';
                                        echo '</tr>';
                                    }
                                }
                            }else {
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
                                      echo '<td>' . $row['st_gender'] . '</td>';
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
    </main>
</div>
<?php
include './foorterst.php';
?>