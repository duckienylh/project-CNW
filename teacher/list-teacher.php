<?php
include './sidebar.php';
?>

<!-- body -->
<div class="col py-3">
    <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #9ec5fe;">
                    <!-- <th scope="col">STT</th> -->
                    <th scope="col">Mã giáo viên</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">giới tính</th>
                    <th scope="col">email</th>
                    <th scope="col">số điện thoại</th>
                    <th scope="col">địa chỉ</th>
                    <th scope="col">ngày sinh</th>
                    <th scope="col">môn dạy</th>

                </tr>
            </thead>
            <tbody>
                <?php

                include "../config.php";
                $sql = "SELECT * FROM teachers t, subjects sb
                        WHERE t.sb_id = sb.sb_id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['teach_id']; ?> </th>
                            <td><?php echo $row['teach_name']; ?></td>
                            <td><?php echo ($row['teach_gender'] == 1 ? "Nam" : "Nữ"); ?></td>
                            <td><?php echo $row['teach_email']; ?></td>
                            <td><?php echo $row['teach_phone']; ?></td>
                            <td><?php echo $row['teach_address']; ?></td>
                            <td><?php echo $row['teach_birth']; ?></td>
                            <td><?php echo $row['sb_name']; ?></td>
                            <!-- <td><a href="editEmployee.php?id=<?php //echo $row['emp_id']; 
                                                                    ?>"><i class="fas fa-user-edit"></i></a></td> -->

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    </main>
</div>
<?php
include './footer.php';
?>