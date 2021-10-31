<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Quản Lý Học Sinh</title>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class="fas fa-bars text" style="color: #e685b5;" id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" style="background-color: #e685b5;" id="nav-bar">
        <nav class="nav">
            <div>
                <span class=" nav_logo nav_logo-name"></span>
                <div class="nav_list">
                    <a href="./list-teacher.php" class="nav_link "> <i class="fas fa-school text-dark"></i> <span class="nav_name">Home</span> </a>
                    <a href="#" class="nav_link"> <i class="fas fa-users text-dark"></i> <span class="nav_name">kì học</span> </a>
                    <a href="./list-student.php" class="nav_link"> <i class="fas fa-users text-dark"></i> <span class="nav_name">lớp học</span> </a>
                    <a href="./mark.php" class="nav_link"> <i class="fas fa-keyboard text-dark"></i> <span class="nav_name">nhập điểm</span> </a>
                    <a href="#" class="nav_link"> <i class="fas fa-user-graduate text-dark"></i> <span class="nav_name">liên hệ</span> </a>
                </div>
            </div>
            <!-- <a href="#" class="nav_link"> <span class="nav_name">SignOut</span> </a> -->
            <div class="dropdown pb-4 ps-3">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.githubusercontent.com/u/90234391?s=48&v=4" alt="hugenerd" class=" header_img rounded-circle">
                    <span class="d-none d-sm-inline mx-1 text-dark"> Đức Kiên</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                    
                    <li><a class="dropdown-item" href="#">Thông tin</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Thoát</a></li>
                </ul>
            </div>
        </nav>
    </div>