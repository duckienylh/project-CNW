<?php
include './sidebar.php';
include "../config.php";

$id = $client_user['user_id'];
?>

<!-- body -->
<div class="col py-3">

    <div class="d-flex justify-content-between bg-light ">
        <p><i class="fas fa-users"></i> lớp học</p>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-envelope"></i></button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="email" class="col-form-label">Người nhận:</label>
                                <select class="form-control" id="email" name="email">
                                    <?php
                                    $sql = "SELECT * FROM  students st,teachers t,classes c
                                WHERE st.class_id = c.class_id and c.teach_id = t.teach_id and t.teach_id = '$id'";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['st_id'] . '">' . $row['st_email'] . '</option>';
                                        }
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="emailtitle" class="col-form-label">Chủ đề:</label>
                                <input title="text" trai class="form-control" name="title" id="emailtitle">
                            </div>
                            <div class="mb-3">
                                <label for="emailContent" class="col-form-label">Nội dung:</label>
                                <textarea class="form-control" name="content" id="emailContent"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                        <button type="submit" class="btn btn-primary" id="send">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex mb-2 mt-2">
        <label class="control-label fw-bolder">lớp:
            <?php
            // $sql = "SELECT c.class_id, c.class_name FROM class c,teacher t
            //         WHERE c.teach_id = '111'";
            $sql = "SELECT class_id, class_name, teach_id FROM classes WHERE teach_id = '$id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <?php echo $row['class_name']; ?>
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
                    <th scope="col">emai</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $sql2 = "SELECT * FROM  students st,teachers t,classes c
                        WHERE st.class_id = c.class_id and c.teach_id = t.teach_id and t.teach_id = '$id'";
                $result2 = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($result2) > 0) {
                    while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row['st_id']; ?> </th>
                            <td><?php echo $row['st_name']; ?></td>
                            <td><?php echo $row['st_birth']; ?></td>
                            <td><?php echo $row['st_address']; ?></td>
                            <td><?php echo ($row['st_gender'] == 1 ? "Nam" : "Nữ"); ?></td>
                            <td><?php echo $row['st_phone']; ?></td>
                            <td><?php echo $row['st_parent']; ?></td>
                            <td><?php echo $row['st_email']; ?></td>


                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            //? truyền địa chỉ email
            $('#send').click(function() {
                $email = $("#email").val();
                
                $emailtitle = $('#emailtitle').val();
                $emailContent = $('#emailContent').val();

                if ($emailtitle == '' || $emailContent == '') {
                    alert("Vui lòng nhập đầy đủ chủ đề và nội dung");
                } else {
                    console.log('kien');

                    $.ajax({
                        type: "post",
                        url: "../email/sendmail.php",
                        data: {
                            emailAddress: $email,
                            emailtitle: $emailtitle,
                            emailContent: $emailContent,
                        },
                        success: function(response) {
                            if (response == 'success') {
                                alert("Đã gửi");
                            } else if (response == 'error') {
                                alert("Gửi không thành công");
                            }
                        }
                    });
                }

            });
        })
    </script>
</div>
<?php
include './footer.php';
?>