<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">

        <div class="col py-3  "  >
            <div class="container ">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Result</h2>
                    </div>
                </div>
                
                
            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto">
            <div class="row">
                    <div class="float-end py-2">
                        <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                            <i class="fas fa-user-plus"></i> Thêm Điểm
                        </a>
                    </div>
                </div>
            <table class="table table-hover display" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Mã học sinh</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Điểm trung bình</th>
                            <th scope="col">Chức năng</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include '../config.php';
                        $sql = "SELECT  st.st_id, st.st_name, m.ma_avarage FROM students st, marks m 
                        WHERE st.st_id = m.st_id";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $row['st_id']; ?> </th>
                                    <td><?php echo $row['st_name']; ?></td>
                                    <td><?php echo $row['ma_avarage']; ?></td>
                                    <td>
                                    <a class="btn btn-warning" href="">Details</a>
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
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            search: {
                return: true
            }
        });
    });
</script>
<?php
include 'footerad.php';
?>