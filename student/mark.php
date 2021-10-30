<?php
include './sidebarst.php';
?>

<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <h2 class="text-primary">Mark</h2>

        </div>


        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

            <table class="table table-primary table-hover table-bordered">
                <thead class=" text while">
                    <tr>
                        <th scope="col">Mã học sinh</th>
                        <th scope="col">Mã môn học</th>
                        <th scope="col">Điểm KT 1 tiết</th>
                        <th scope="col">Điểm cuối kỳ</th>
                        <th scope="col">Điểm trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <!--xuất dữ liệu theo CSDL -->
                    <?php
                           // * B1: mở kết nối
                            include '../config.php';
                            //* B2: Truy vấn
                            $sql = "SELECT * FROM marks";

                            //? lưu kết quả trả về $result
                            $result = mysqli_query($conn, $sql);
                            $gender;

                            //* B3: Phân tích sử lý kết quả
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo '<td>' . $row['st_id'] . '</td>';
                                    echo '<td>' . $row['sb_id'] . '</td>';
                                    echo '<td>' . $row['ma_hour_test'] . '</td>';
                                    echo '<td>' . $row['ma_final_exam'] . '</td>';
                                    echo '<td>' . $row['ma_avarage'] . '</td>';
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