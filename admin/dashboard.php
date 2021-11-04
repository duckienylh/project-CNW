<?php
include 'headerad.php';
include '../config.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3 ">
            <div class="container">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <h2>Trang chủ</h2>
                </div>


                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-envelope"></i> Gửi Email</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="email" class="col-form-label fw-bolder">Người nhận: Toàn bộ học sinh trong trường</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailtitle" class="col-form-label">Chủ đề:</label>
                                        <input title="text" trai class="form-control" name="title" id="emailtitle">
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailContent" class="col-form-label">Nội dung:</label>
                                        <textarea class="form-control" name="content" id="emailContent"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">đóng</button>
                                    <button type="submit" class="btn btn-primary" id="send" name="btnsend">Gửi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 py-md-5  justify-content-around">
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                        <div class="ps-3 my-3">
                            <p>Tổng số học sinh</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(st_id) AS st_sum FROM students;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['st_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                        <div class="ps-3 my-3">
                            <p>Tổng số giáo viên</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(teach_id) AS st_sum FROM teachers;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['st_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-around">
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-school"></i></div>
                        <div class="ps-3 my-3">
                            <p>Tổng số lớp</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(class_id) AS st_sum FROM classes;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['st_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 bg-info d-flex mb-2 rounded justify-content-center">
                        <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-book-open"></i></div>
                        <div class="ps-3 my-3">
                            <p>Tổng số môn học</p>
                            <p class="text-center fw-bold fs-2">
                                <?php

                                $sql = "SELECT COUNT(sb_id) AS st_sum FROM subjects;";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <?php echo $row['st_sum']; ?>
                                <?php
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</main>
<?php
if (isset($_POST['btnsend'])) {

    $sql = "SELECT `st_email` FROM students"; //câu lệnh sql kiểm tra người dùng tồn tại hay ko
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) { // vòng if kiểm tra câu lệnh truy vấn

        while ($row = mysqli_fetch_assoc($result)) {
            $email = $row['st_email'];
            // $_SESSION['emailall'] = $email1;

?>
            <script>
                
                $(document).ready(function() {
                    //? truyền địa chỉ email
                    $('#send').click(function() {
                        console.log('kien');
                        // $email = $("#email").val();
                        // $email = $_SESSION['emailall'];
                        $emailtitle = $('#emailtitle').val();
                        $emailContent = $('#emailContent').val();

                        if ($emailtitle == '' || $emailContent == '') {
                            alert("Vui lòng nhập đầy đủ chủ đề và nội dung");
                        } else {

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
<?php
        }
    } else {
        echo 'ko có email để gửi';
        exit;
    }
    mysqli_close($conn);
}
?>
<?php
include 'footerad.php';
?>