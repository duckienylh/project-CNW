<?php
include './sidebar.php';
?>
<!-- body -->
<div class="col py-3 ">

    <div class="d-flex justify-content-between bg-light">
        <p><i class="fas fa-keyboard"></i> Nhập điểm môn học</p>
        <button type="submit" class="btn btn-primary">cập nhật</button>
    </div>

    <div class="d-flex mb-2 mt-2 flex-wrap">
        
        <label class="control-label fw-bolder">lớp: </label>
        <div class="me-3">
            <select class="ms-1">
                <option value="">lớp 10</option>
                <option value="">lớp 11</option>
                <option value="">lớp 12</option>
            </select>
        </div>
        <label class="control-label fw-bolder">môn học: </label>
        <div class="me-3">
            <select class="ms-1">
                <option value="">lớp 10</option>
                <option value="">lớp 11</option>
                <option value="">lớp 12</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 portlet" style="width:100% ; overflow: auto; height: auto; ">

        <table class="table table-bordered table-striped">
            <thead>
                <tr style="background-color: #9ec5fe;">
                    <!-- <th scope="col">STT</th> -->
                    <th scope="col">Mã học sinh</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">điểm 15'</th>
                    <th scope="col">Điểm giữa kì</th>
                    <th scope="col">Điểm cuối kì</th>
                    <th scope="col">Điểm tb</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                include "../config.php";
                $sql = "SELECT * FROM students st,subjects s,marks m
                        WHERE st.st_id = m.st_id and s.sb_id = m.sb_id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['st_id']; ?> </th>
                            <td><?php echo $row['st_name']; ?></td>
                            <td><?php echo $row['st_birth']; ?></td>
                            <td><?php echo $row['st_gender']; ?></td>
                            <td><?php echo $row['ma_mini_test']; ?></td>
                            <td><?php echo $row['ma_hour_test']; ?></td>
                            <td><?php echo $row['ma_final_exam']; ?></td>
                            <?php
                                $mini = $row['ma_mini_test'];
                                $hour = $row['ma_hour_test'];
                                $final = $row['ma_final_exam'];
                                $avg = ($mini+$hour*2+$final*3)/7;
                            ?>
                            <td><?php echo round($avg,2); ?></td>

                            
                        </tr>
                <?php
                    }
                }
                ?>

                </tr>
            </tbody>
        </table>
    </div>

</div>
<?php
include './footer.php';
?>