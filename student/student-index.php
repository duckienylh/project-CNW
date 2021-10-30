<?php
include './sidebarst.php';
?>



<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <h2 class="text-primary">Student</h2>

        </div>


        <div class=" col-md-12" style="width:100% ; overflow: auto; height: auto">

                <table class="table table-primary table-hover table-bordered">
                    <thead class=" text while">
                        <tr  >
                            <th scope="col">Mã học sinh</th>
                            <th scope="col">Tên học sinh</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tên phụ huynh</th>
                            <th scope="col">Mã lớp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Nguyen Van A</td>
                            <td>Nam</td>
                            <td>2007-12-7</td>
                            <td>Ha Noi</td>

                        </tr>
                    </tbody>
                </table>
        </div>
    </main>
</div>
<?php
include './foorterst.php';
?>