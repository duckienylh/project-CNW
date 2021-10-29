<?php
include 'headerad.php';
?>
<main>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
            include 'sidebaradmin.php';
            ?>
            <div class="col py-3 bg-info ">
                <div class="container ">
                    <div class="row mt-3 pt-3 border-bottom border-light">
                        <div class="col-md-6">
                            <h2>Teacher</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="float-end py-2">
                            <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                                <i class="fas fa-user-plus"></i> Add New Teacher
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
                <div class="container-fluid py-3">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Teacher ID</th>
                                <th scope="col">Teacher Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Position</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>Otto</td>
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
    </div>
</main>
<?php
include 'footerad.php';
?>