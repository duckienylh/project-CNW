<?php
include './sidebarst.php';
$id = $client_user['user_id'];
?>

<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">

            <div class="d-flex mb-2 mt-2">
                <label class="control-label fw-bolder">lớp:
                <?php
                // $sql = "SELECT c.class_id, c.class_name FROM class c,teacher t
                //         WHERE c.teach_id = '111'";
                $sql = "SELECT class_id, class_name, teach_id FROM classes WHERE st_id = '$id'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <?php echo $row['class_name'];?>
                    <?php
                }
            }
            ?>
                </label>
            </div>


        </div>


        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto ;">

            <table class="table table-primary table-hover table-bordered">
                <thead>
                    <tr>


                        <th scope="col">Tên môn học</th>
                        <th scope="col">Điểm KT 15p</th>
                        <th scope="col">Điểm KT 1 tiết</th>
                        <th scope="col">Điểm KT cuối kỳ</th>
                        <th scope="col">Điểm trung bình </th>


                    </tr>
                </thead>
                <tbody>
                    <!--xuất dữ liệu theo CSDL -->
                    <?php
                           // * B1: mở kết nối
                            include '../config.php';
                            //* B2: Truy vấn
                            $sql = "SELECT b.sb_name,t.ma_hour_test,t.ma_final_exam,t.ma_avarage 
                            FROM marks t,subjects b WHERE t.sb_id=b.sb_id";

                            //? lưu kết quả trả về $result
                            $result = mysqli_query($conn, $sql);
                           

                            //* B3: Phân tích sử lý kết quả,,,,
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                   
                                    echo '<td>' . $row['sb_name'] . '</td>';
                                    // echo '<td>' . $row['ma_avarage'] . '</td>';
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