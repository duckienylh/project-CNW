<?php
session_start();
if (!isset($_SESSION['current_user'])) {
    header("location:../index.php");
}
include '../config.php';
$client_user = $_SESSION['current_user'];
$id = $client_user['user_id'];
if (isset($_POST['sortby'])) {
    $class = $_POST['sortby'];
    $sql = "SELECT * FROM students st,subjects s,marks m,teachers t,classes c
    WHERE st.st_id = m.st_id and s.sb_id = m.sb_id and t.teach_id = '$id' and t.sb_id = s.sb_id and c.class_name = '$class'"; //sql
} else {
    $sql = "SELECT * FROM students st,subjects s,marks m,teachers t
                        WHERE st.st_id = m.st_id and s.sb_id = m.sb_id and t.teach_id = '$id' and t.sb_id = s.sb_id";
}

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
                            $avg = ($mini + $hour * 2 + $final * 3) / 7;
                            ?>
                            <td><?php echo round($avg, 2); ?></td>


                        </tr>
                <?php
                    }
                }
                ?>