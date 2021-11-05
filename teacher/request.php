
<?php
include './sidebar.php';
include "../config.php";
$id = $client_user['user_id'];
$class_name = $_GET['class_name'];
$class_id = $_GET['class_id'];
?>
<!-- body -->
<div class="col py-3 ">

    <div class="d-flex justify-content-between bg-light">
        <p><i class="fas fa-keyboard"></i> Nhập điểm môn học</p>
        
    </div>

    <div class="d-flex mb-2 mt-2 flex-wrap">
        <label class="control-label fw-bolder">lớp: </label>
        <div class="me-3 ms-1">       
            <?php echo $class_name?>

        </div>
        <label class="control-label fw-bolder">môn học: </label>
        <div class="ms-1 fw-bolder">
            <?php

            $sql2 = "SELECT * FROM subjects sb,teachers t WHERE t.teach_id = '$id' AND sb.sb_id = t.sb_id ";
            $result2 = mysqli_query($conn, $sql2);

            if (mysqli_num_rows($result2)) {
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo  $row2['sb_name'];
                }
            }
            ?>

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
                    <th scope="col">Thêm điểm</th>
                </tr>
            </thead>
            <tbody id="list">
                <?php


                $sql = "SELECT * FROM students st,subjects s,marks m,teachers t, classes c
                        WHERE st.st_id = m.st_id and s.sb_id = m.sb_id and t.teach_id = '$id' and t.sb_id = s.sb_id and st.class_id = '$class_id' GROUP by st.st_id ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['st_id']; ?> </th>
                            <td><?php echo $row['st_name']; ?></td>
                            <td><?php echo $row['st_birth']; ?></td>
                            <td><?php echo ($row['st_gender'] == 1 ? "Nam" : "Nữ"); ?></td>
                            <td><?php echo $row['ma_mini_test']; ?></td>
                            <td><?php echo $row['ma_hour_test']; ?></td>
                            <td><?php echo $row['ma_final_exam']; ?></td>
                            <td><?php echo $row['ma_avarage']; ?></td>
                            <td class="text-center"><a href="update-mark.php?st_id=<?php echo $row['st_id']?>&sb_id=<?php echo $row['sb_id']?>"><button type="submit" class="btn btn-primary">cập nhật</button></a></td>

                        </tr>
                <?php
                    }
                }
                ?>

                </tr>
            </tbody>
        </table>
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</div>
<?php
include './footer.php';
?>