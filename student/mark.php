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
                        <th scope="col">Mã Học sinh</th>
                        <th scope="col">Mã môn học</th>
                        <th scope="col">Điểm miệng</th>
                        <th scope="col">Điểm KT 1 tiết</th>
                        <th scope="col">Điểm cuối kỳ</th>
                        <th scope="col">Điểm trung bình</th>
                        <th scope="col">Xếp loại</th>
                    </tr>
                </thead>
                <tbody>
                    <!--xuất dữ liệu theo CSDL -->
                    <?php
                            //* B1: mở kết nối
                            // include '../config.php';
                            // //* B2: Truy vấn
                            // $sql = "SELECT * FROM `ma` WHERE bd_id = '$id' ";

                            // //? lưu kết quả trả về $result
                            // $result = mysqli_query($conn, $sql);
                            // $gender;

                            // //* B3: Phân tích sử lý kết quả
                            // if (mysqli_num_rows($result) > 0) {
                            //     while ($row = mysqli_fetch_assoc($result)) {
                            //         echo "<tr>";
                            //         echo '<th scope="row">' . $row['bd_id'] . '</th>';
                            //         echo '<td>' . $row['bd_name'] . '</td>';
                            //         echo '<td>' . $row['bd_sex'] . '</td>';
                            //         echo '<td>' . $row['bd_age'] . '</td>';
                            //         echo '<td>' . $row['bd_bgroup'] . '</td>';
                            //         echo '<td>' . $row['bd_reg_date'] . '</td>';
                            //         echo '<td>' . $row['bd_phno'] . '</td>';
                            //         echo '<td>
                            //                 <a href="process/edit.php?id=' . $id . '" class="btn btn-primary">Sửa</a>
                            //                 <a href="process/delete.php?id=' . $id . '" class="btn btn-danger">Xoá</a>
                            //             </td>';
                            //         echo '</tr>';
                            //     }
                            // }
                            // //* B4: đóng kết nối
                            // mysqli_close($conn);
                            ?>
                    <!-- <tr>
                        <td>Mark</td>
                        <td>Nguyen Van A</td>
                        <td>8</td>
                        <td>7</td>
                        <td>9</td>
                        <td>8.2</td>

                    </tr> -->
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php
include './foorterst.php';
?>