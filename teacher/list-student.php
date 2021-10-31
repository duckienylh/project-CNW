<?php
include './sidebar.php';
include "../config.php";
// $id = $_GET['id']
?>

<!-- body -->
<div class="col py-3">

    <div class="d-flex justify-content-between bg-light ">
        <p><i class="fas fa-users"></i> lớp học</p>
    </div>

    <div class="d-flex mb-2 mt-2">
    <label class="control-label fw-bolder">lớp:
            <?php
            // $sql = "SELECT c.class_id, c.class_name FROM class c,teacher t
            //         WHERE c.teach_id = '111'";
            $sql = "SELECT class_id, class_name, teach_id FROM classes WHERE teach_id = '112'";
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

    <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #9ec5fe;">
                    <!-- <th scope="col">STT</th> -->
                    <th scope="col">Mã học sinh</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">địa chỉ</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">số điện thoại</th>
                    <th scope="col">Phụ huynh</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql2 = "SELECT * FROM  students st,teachers t,classes c
                        WHERE st.class_id = c.class_id and c.teach_id = t.teach_id";
                $result2 = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($result2) > 0) {
                    while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['st_id']; ?> </th>
                            <td><?php echo $row['st_name']; ?></td>
                            <td><?php echo $row['st_birth']; ?></td>
                            <td><?php echo $row['st_address']; ?></td>
                            <td><?php echo $row['st_gender']; ?></td>
                            <td><?php echo $row['st_phone']; ?></td>
                            <td><?php echo $row['st_parent']; ?></td>


                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
<?php
include './footer.php';
?>