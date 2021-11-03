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
                <div class="row mt-3 justify-content-around py-5 mb-3">
                    <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
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
                    <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
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
                    <div class="col-md-3 col-12 bg-info d-flex mb-2 rounded justify-content-center">
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
include 'footerad.php';
?>