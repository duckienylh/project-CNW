<?php
include './sidebar.php';
?>
<!-- body -->
<div class="col py-3 ">
    
        <div class="d-flex justify-content-between bg-light">
            <p><i class="fas fa-keyboard"></i> Nhập điểm môn học</p>
            <button type="submit" class="btn btn-primary">cập nhật</button>
        </div>

        <div class="d-flex mb-2 mt-2 flex-wrap">
            <label class="control-label fw-bolder">khối: </label>
            <div class="me-3">
                <select class="ms-1">
                    <option value="">lớp 10</option>
                    <option value="">lớp 11</option>
                    <option value="">lớp 12</option>
                </select>
            </div>
            <label class="control-label fw-bolder">lớp: </label>
            <div class="me-3">
                <select class="ms-1">
                    <option value="">lớp 10</option>
                    <option value="">lớp 11</option>
                    <option value="">lớp 12</option>
                </select>
            </div>
            <label class="control-label fw-bolder">môn học: </label>
            <div class="me-3">
                <select class="ms-1">
                    <option value="">lớp 10</option>
                    <option value="">lớp 11</option>
                    <option value="">lớp 12</option>
                </select>
            </div>
        </div>
        <div class="col-md-12 portlet" style="width:100% ; overflow: auto; height: auto; ">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="table-success">
                        <th scope="col">STT</th>
                        <th scope="col">Mã học sinh</th>
                        <th scope="col">Họ và Tên</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">điểm 15'</th>
                        <th scope="col">Điểm giữa kì</th>
                        <th scope="col">Điểm cuối kì</th>
                        <th scope="col">Điểm tb</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    
                    </tr>
                </tbody>
            </table>
        </div>
    
</div>
<?php
include './footer.php';
?>


