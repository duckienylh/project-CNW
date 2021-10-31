<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lý học sinh THPT</title>
</head>
<style>
    .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;
        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }

    .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;
        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>

<body>
    <main>
        <form action="process-index.php" method="post">
            <section class="vh-100 bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
                <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="card-body p-5">
                                        <h2 class="text-uppercase text-center mb-5">account login</h2>
                                        <form>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="userName" class="form-control form-control-lg" name="userName">
                                                <label class="form-label">user name</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="password" id="password" class="form-control form-control-lg" name="password">
                                                <label class="form-label">password</label>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body btn-login" name="btnlogin">login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <script src="./assets/js/process-index.js"></script> -->

</body>
<!-- process login -->
<script>
        $(document).ready(function() {
            $('.btn-login').click(function() {
                $userName = $('#userName').val();
                $password = $('#password').val();

                if ($userName == '' || $password == '') {
                    alert("Vui lòng nhập đầy đủ TK và MK");
                } else {
                    $.ajax({
                        url: "process-index.php",
                        method: "POST",
                        data: {
                            btnlogin: "btnlogin",
                            userName: $userName,
                            password: $password
                        },
                        success: function(response) {
                            if (response == "admin") {
                                window.location.href = "admin/dashboard.php";
                            } else if (response == "teacher") {
                                window.location.href = "teacher/list-teacher.php";
                            } else if (response == "student") {
                                window.location.href = "student/student-index.php";
                            } else if (response == "wrong") {
                                alert("Mật khẩu không chính xác !");
                            } else {
                                alert("Tài khoản không tồn tại")
                            }
                        }
                    });


                }

            });
        })
    </script>

</html>