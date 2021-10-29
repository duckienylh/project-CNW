<?php
include 'headerad.php';
?>
<main>
    <div class="height-100 bg-light">
        <div class="col py-3  "  style="background-color: #f1aeb5;">
            <div class="container ">
                <div class="row mt-3 pt-3 border-bottom border-light">
                    <div class="col-md-6">
                        <h2>Subject</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="float-end py-2">
                        <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                            <i class="fas fa-user-plus"></i> Add New Subject
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="d-flex justify-content-end ">
                        <label for="searchclass" class="d-flex">Search:
                            <input type="search" class="form-control form-control-sm ms-2" placeholder="" aria-controls="list">
                        </label>
                    </div>
                </div>

            </div>
            <div class="container-fluid py-3" style="width:100% ; overflow: auto; height: auto;">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Subject ID</th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a class="btn btn-warning" href=""><i class="fas fa-user-edit"></i></a>
                                <a class="btn btn-danger" href=""><i class="fas fa-user-slash"></i></i></a>
                            </td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<?php
include 'footerad.php';
?>