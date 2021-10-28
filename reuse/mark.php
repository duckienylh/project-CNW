<?php
include './sidebar.php';
?>
<!-- body -->
<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <p><i class="fas fa-keyboard"></i> Nhập điểm môn học</p>
            <button type="submit" class="btn btn-primary">cập nhật</button>
        </div>

        <div class="d-flex mb-2 mt-2">
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
        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

            <table class="table table-bordered">
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
    </main>
</div>
<?php
include './footer.php';
?>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 30px;">
        <div class="container-fluid">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" ><i class="fas fa-school"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" ><i class="fas fa-users"></i> lớp học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" ><i class="fas fa-user-graduate"></i> học sinh</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" ><i class="fas fa-keyboard"></i> nhập điểm</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->