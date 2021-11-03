<?php
include './sidebarst.php';
include "../config.php";
// $id = $client_user['user_id'];
?>

<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <h2 class="text-primary">Kết quả</h2>
            <form method="post">
                <div class="row">
                    <div class="form-group row">
                        <div class="container-1">
                            <!-- <span class="icon"><i class="fa fa-search"></i></span> -->
                            <input type="text" class="form-control" name="search-name" placeholder="Search name...">
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


        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

            <table class="table table-primary table-hover table-bordered">
                <thead class=" text while">
                    <tr>
                        <!-- <th class="text-center">#</th> -->
                        <th>Mã học sinh</th>
                        <th>Tên học sinh</th>
                        <th>Tên môn học</th>
                        <th>Điểm Kiểm tra 15p</th>
                        <th>Điểm Kiểm tra 1 tiết</th>
                        <th>Điểm cuối kỳ</th>
                        <th>Điểm trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <!--xuất dữ liệu theo CSDL -->
                    <?php
                           // * B1: mở kết nối
                            include '../config.php';
                            if (isset($_POST['btnsearch'])){
                                $id_name = $_POST['search-name'];
                               
                                 //* B2: Truy vấn
                                $sql = "SELECT st.st_id,st.st_name,sb.sb_name,m.ma_mini_test,m.ma_hour_test,m.ma_final_exam,m.ma_avarage 
                                FROM marks m, students st, subjects sb 
                                WHERE m.st_id=st.st_id and m.sb_id=sb.sb_id and st.st_name like'%$id_name%'";
                                 //? lưu kết quả trả về $result
                                $result = mysqli_query($conn, $sql);
                                //* B3: Phân tích sử lý kết quả
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo '<td>' . $row['st_id'] . '</td>';
                                        echo '<td>' . $row['st_name'] . '</td>';
                                        echo '<td>' . $row['sb_name'] . '</td>';
                                        echo '<td>' . $row['ma_mini_test'] . '</td>';
                                        echo '<td>' . $row['ma_hour_test'] . '</td>';
                                        echo '<td>' . $row['ma_final_exam'] . '</td>';
                                        echo '<td>' . $row['ma_avarage'] . '</td>';
                                        echo '</tr>';
                                    }
                                }
                                }
                                else {
                                    $sql = "SELECT st.st_id,st.st_name,sb.sb_name,m.ma_mini_test,m.ma_hour_test,m.ma_final_exam,m.ma_avarage 
                                    FROM marks m, students st, subjects sb 
                                    WHERE m.st_id=st.st_id and m.sb_id=sb.sb_id";
                                      //? lưu kết quả trả về $result
                                    $result = mysqli_query($conn, $sql);
                                    //* B3: Phân tích sử lý kết quả
                                        if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo '<td>' . $row['st_id'] . '</td>';
                                            echo '<td>' . $row['st_name'] . '</td>';
                                            echo '<td>' . $row['sb_name'] . '</td>';
                                            echo '<td>' . $row['ma_mini_test'] . '</td>';
                                            echo '<td>' . $row['ma_hour_test'] . '</td>';
                                            echo '<td>' . $row['ma_final_exam'] . '</td>';
                                            echo '<td>' . $row['ma_avarage'] . '</td>';
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