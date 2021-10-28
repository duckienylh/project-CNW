<?php
include 'headerad.php'
?>
<main>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php
            include 'sidebaradmin.php';
            ?>
            <div class="col py-3 bg-info ">
                <div class="container">
                    <div class="row mt-3 pt-3 border-bottom border-light">
                        <h2>Home</h2>
                    </div>
                    <div class="row mt-3 justify-content-around py-5 mb-3">
                        <div class="col-md-3 col-12 bg-white d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                            <div class="ps-3 my-3">
                                <p>Total Students</p>

                            </div>
                        </div>
                        <div class="col-md-3 col-12 bg-white d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-school"></i></i></div>
                            <div class="ps-3 my-3">
                                <p>Total Classes</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-12 bg-white d-flex mb-2 rounded justify-content-center">
                            <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-book-open"></i></i></div>
                            <div class="ps-3 my-3">
                                <p>Total Subjects</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</main>
<?php
include 'footerad.php';
?>