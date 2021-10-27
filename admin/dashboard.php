<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../asset/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div>
                <ul class="nav justify-content-center border-bottom border-2 border-dark">
                    <li class="nav-item">
                        <a class="nav-link " href="">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">Subject</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="">Result</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            User
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Manage Account</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=" bg-info ">
        <div class="container ">
            <div class="row mt-3">
                <h2>Home</h2>
            </div>
            <div class="row mt-3 justify-content-around py-5">
                <div class="col-md-2 col-12 bg-white d-flex mb-2 rounded">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-user-graduate"></i></div>
                    <div class="ps-3 mt-3 mb-3">
                        <p>Total Students</p>
                    </div>
                </div>
                <div class="col-md-2 col-12 bg-white d-flex mb-2  rounded">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-school"></i></i></div>
                    <div class="ps-3 mt-3 mb-3">
                        <p>Total Classes</p>
                    </div>
                </div>
                <div class="col-md-2 col-12 bg-white d-flex mb-2  rounded">
                    <div class="mt-3 mb-3" style="font-size: 1.875rem"><i class="fas fa-book-open"></i></i></div>
                    <div class="ps-3 mt-3 mb-3">
                        <p>Total Subjects</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>