<?php
include 'headerad.php';
?>
<main>
    <div class=" bg-info ">
        <div class="container ">
            <div class="row mt-3 pt-3">
                <div class="col-md-6">
                    <h2>Class</h2>
                </div>
                <div class="col-md-6">

                    <a href="" class="btn btn-md btn-outline-light btn-primary float-end">
                        <i class="fas fa-user-plus"></i> Add New Subject
                    </a>
                </div>
            </div>

        </div>
        <div class="container-fluid py-3">
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
</main>
<?php
include 'footerad.php';
?>