<?php
include './sidebar.php';
?>

<!-- body -->
<div class="col py-3">
    
        <div class="d-flex justify-content-between bg-light ">
            <p><i class="fas fa-users"></i> lớp học</p>
        </div>

        <div class="d-flex mb-2 mt-2">
            <label class="control-label fw-bolder">lớp: 10A1</label>
        </div>

        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

            <table class="table table-bordered">
                <thead>
                    <tr style="background-color: #e685b5;">
                        <th scope="col">STT</th>
                        <th scope="col">Mã học sinh</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">địa chỉ</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">số điện thoại</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
</div>
<?php
include './footer.php';
?>