<?php
include './sidebar.php';
?>

<!-- <div class="col py-3">

    <div class="container ">
        <div class="row  ">
            <div class="col-md-6 mt-3">
                <h2>Student</h2>
            </div>

        </div>

    </div>
    <div class="container-fluid py-3  ">
        <table class="table table-hover  table-bordered border border-dark ">
            <thead class="bg-dark">
                <tr style="color:white;">
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Gender</th>
                    <th scope="col">Student Birth</th>
                    <th scope="col">Student Address</th>
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
                </tr>
            </tbody>
        </table>
    </div>

</div> -->

<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
        <h2>Student</h2>

        </div>


        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

            <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Gender</th>
                    <th scope="col">Student Birth</th>
                    <th scope="col">Student Address</th>
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