<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Quản Lý Học Sinh</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle "> <i class="fas fa-bars " style="color: #e35d6a;" id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar" style="background-color: #e35d6a;">
        <nav class="nav">
            <div>
                <span class=" nav_logo nav_logo-name"></span>
                <div class="nav_list">
                    <a href="dashboard.php" class="nav_link  "> <i class="fas fa-chart-line nav_icon"></i> <span class="nav_name">Home</span> </a>
                    <a href="class.php" class="nav_link "> <i class="fas fa-school nav_icon"></i> <span class="nav_name">Lớp Học</span> </a>
                    <a href="subject.php" class="nav_link "> <i class="fas fa-book-reader nav_icon"></i> <span class="nav_name">Môn Học</span> </a>
                    <a href="teacher.php" class="nav_link "> <i class="fas fa-graduation-cap nav_icon"></i> <span class="nav_name">Giáo Viên</span> </a>
                    <a href="result.php" class="nav_link "> <i class="fas fa-marker nav_icon"></i> <span class="nav_name">Kết Quả Điểm</span> </a>
                </div>
            </div>
            <!-- <a href="#" class="nav_link"> <span class="nav_name">SignOut</span> </a> -->
            <div class="dropdown pb-4 ps-3">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://avatars.githubusercontent.com/u/90233548?s=400&u=2b4d5b064fad28a227f756af09b5ad9cfb4bb4a1&v=4" alt="hugenerd" class=" header_img rounded-circle">
                    <span class="d-none d-sm-inline mx-1">Chương Đức</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-light shadow">
                    <li><a class="dropdown-item nav_link" href="#"> <span class="nav_name">Thông Tin Tài Khoản</span></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item nav_link" href="../index.php"><span class="nav_name">Thoát</span></a></li>
                </ul>
            </div>
        </nav>
    </div>