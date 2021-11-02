<?php
include './sidebar.php';
include "../config.php";
$id = $client_user['user_id'];
$st_id = $_GET['st_id'];
$sb_id = $_GET['sb_id'];
?>
<main class="container">
    <h2>cập nhật điểm học sinh</h2>
    <?php
    $sql = "SELECT * FROM students st, subjects sb, marks m WHERE st.st_id = '$st_id'and sb.sb_id = '$sb_id' and st.st_id = m.st_id";


    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <form method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Họ và Tên</label>
                    <div class="col-sm-10">
                        <input type="text" disabled class="form-control" name="st-name" value="<?php echo $row['st_name']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Điểm 15'</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mini-test" value="<?php echo $row['ma_mini_test']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Điểm giữa kì</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="hour-test" value="<?php echo $row['ma_hour_test']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Điểm cuối kì</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="final-exam" value="<?php echo $row['ma_final_exam']; ?>">
                    </div>
                </div>
        <?php
        }
    }
        ?>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" name="btnupdate" class="btn btn-success">update</button>
            </div>
        </div>
            </form>

</main>
<?php

if (isset($_POST['btnupdate'])) {

    $mini = $_POST['mini-test'];
    $hour = $_POST['hour-test'];
    $final = $_POST['final-exam'];
    $avg = ($mini + $hour * 2 + $final * 3) / 6;
    $avg2 = round($avg, 2);
    $sql = "UPDATE `marks` SET `ma_mini_test`='$mini',`ma_hour_test`='$hour',`ma_final_exam`='$final',`ma_avarage`='$avg2' where st_id = '$st_id' and sb_id = '$sb_id'";

    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
        ?>
        <script>
            window.location.href = 'mark.php';
        </script>
<?php
    } else {
        echo "Lỗi!";
    }
}
?>

<?php
include "./footer.php";
?>