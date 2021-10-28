<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-1 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fas fa-school text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fas fa-users text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">kì học</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#"> <span class="d-none d-sm-inline text-white">kì</span> 1</a>
                                </li>
                                <li>
                                    <a href="#"> <span class="d-none d-sm-inline text-white">kì</span> 2</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fas fa-users text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">lớp học</span> </a>
                        </li>
                        <!-- <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fas fa-user-graduate text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">học sinh</span> </a>
                        </li> -->
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fas fa-keyboard text-white"></i><span class="ms-1 d-none d-sm-inline text-white">nhập điểm</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fas fa-user-graduate text-white"></i> <span class="ms-1 d-none d-sm-inline text-white">Contact</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.githubusercontent.com/u/90234391?v=4" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1"> Kiên</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>