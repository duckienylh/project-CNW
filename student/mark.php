<?php
include './sidebarst.php';
?>

<div class="col py-3">
    <main class="container-fluid" style="min-width: 759px;">
        <div class="d-flex justify-content-between bg-light ">
            <h2 class="text-primary">Mark</h2>

        </div>


        <div class="col-md-12" style="width:100% ; overflow: auto; height: auto">

            <table class="table table-primary table-hover table-bordered">
                <thead class=" text while">
                    <tr >
                        <th scope="col">Student Name</th>
                        <th scope="col">Subject Name</th>
                        <th scope="col">Mark Term</th>
                        <th scope="col">Mark Hour Test</th>
                        <th scope="col">Mark Final Exam</th>
                        <th scope="col">Mark Medium Score</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Nguyen Van A</td>
                        <td>8</td>
                        <td>7</td>
                        <td>9</td>
                        <td>8.2</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php
include './foorterst.php';
?>