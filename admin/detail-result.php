<?php
include 'headerad.php';
$stid = $_GET['stid'];
$sbid = $_GET['sbid'];
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  ">
            <div class="container ">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Chi tiết điểm học sinh <?php echo $stid; ?> </h2>
                    </div>
                    <div><a class="btn btn-success float-end" href="result.php">Quay lại</a></div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">

                <table class="table table-hover table-striped">
                    <thead>
                        <tr class="table-info">
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Điểm 15 phút</th>
                            <th scope="col">Điểm 1 tiết</th>
                            <th scope="col">Điểm cuối kỳ</th>
                            <th scope="col">Điểm trung bình</th>
                            <th scope="col">Chức năng</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT st.st_name,sb.sb_name,m.ma_mini_test,m.ma_hour_test,m.ma_final_exam,m.ma_avarage, st.st_id, sb.sb_id
                        FROM marks m, students st, subjects sb 
                        WHERE m.st_id=st.st_id and m.sb_id=sb.sb_id and st.st_id=$stid and sb.sb_id=$sbid";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td scope="row"><?php echo $row['st_name']; ?> </td>
                                    <td><?php echo $row['sb_name']; ?></td>
                                    <td><?php echo $row['ma_mini_test']; ?></td>
                                    <td><?php echo $row['ma_hour_test']; ?></td>
                                    <td><?php echo $row['ma_final_exam']; ?></td>
                                    <td><?php echo $row['ma_avarage']; ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="edit-result.php?stid=<?php echo $row['st_id']?>&sbid=<?php echo $row['sb_id']?>"><i class="fas fa-user-edit"></i></a>
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
<?php
include 'footerad.php'
?>