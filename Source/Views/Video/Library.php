<?php
    // if(!isset($_COOKIE["username"])){
    //     header("Location: ../SignIn_SignUp/SignIn.php");
    //     exit();
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/style_home.css">
    <link rel="stylesheet" href="../../assets/css/style_common.css">
    <link rel="stylesheet" href="../../assets/css/style_form_video.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
    <!-- navbar -->
    <div class="navbar-main">
        <!-- menu -->
        <div class="navbar-main-menu "><i class="fa-solid fa-bars"></i></div>
        <!-- logo -->
        <a href="../../Views/Home/Home.php" class="navbar-main-logo"><img src="../../assets/images/logo.png" alt=""></a>
        <!-- search -->
        <div class="search-box">
            <!-- search input -->
            <input type="text" name="search-input" placeholder="Search...">
            <!-- search button - looking event-->
            <a href="#">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <!-- change theme -->
        <div class="change-theme-btn">
            <i class="light-theme fa-solid fa-lightbulb d-none"> light</i>
            <i class="dark-theme fa-solid fa-moon"> dark</i>
            </div>
        <!-- log up -->
        <a href="../../Views/SignIn_SignUp/SignUp.php" class="log-up-btn button-57" style="margin-left: 12px;"><span class="text">Log
                up</span><span>Create Account!</span></a>
        <!-- log in -->
        <a href="../../Views/SignIn_SignUp/SignIn.php" class="log-in-btn button-57"><span class="text">Log in</span><span>Exist Account
            </span></a>
    </div>
    <!-- body -->
    <!-- navbar-main slider -->
    <div class="navbar-main-slider">
        <!-- main slider -->
        <div class="nav-title">
            Si-zu-ka
        </div>
        <div class="stick"></div>
        <!-- MAIN's elements -->
        <!-- home -->
        <a href="../../Views/Home/Home.php" class="nav-items">
            <i class="fa-solid fa-house"></i>
            <div class="nav-items-title">Home</div>
        </a>
        <!-- trending -->
        <a href="../../Views/Video/Trending.php" class="nav-items">
            <i class="fa-solid fa-fire-flame-curved"></i>
            <div class="nav-items-title">Trending</div>
        </a>
        <!-- libary -->
        <a href="../../Views/Video/Library.php" class="nav-items active">
            <i class="fa-solid fa-photo-film"></i>
            <div class="nav-items-title">Libary</div>
        </a>
        <!-- subcribed -->
        <a href="../../Views/Video/Following-channels.php" class="nav-items">
            <i class="fa-solid fa-circle-nodes"></i>
            <div class="nav-items-title">Following Channels</div>
        </a>
        <!-- history -->
        <a href="../../Views/Video/History.php" class="nav-items">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <div class="nav-items-title">History</div>
        </a>
        <!-- like videos -->
        <a href="../../Views/Video/Favorite-videos.php" class="nav-items ">
            <i class="fa-solid fa-thumbs-up"></i>
            <div class="nav-items-title">Favorite videos</div>
        </a>
        <!-- My list -->
        <a href="../../Views/Video/My-list.php" class="nav-items">
            <i class="fa-solid fa-video"></i>
            <div class="nav-items-title">My list</div>
        </a>

        <!-- MANAGER -->
        <div class="nav-title">
            Manager
        </div>
        <div class="stick"></div>
        <!-- MANAGER's elements -->
        <!-- profile -->
        <a href="../../Views/User/Profile.php" class="nav-items">
            <i class="fa-solid fa-address-card"></i>
            <div class="nav-items-title">Profile</div>
        </a>
        <!-- uploads -->
        
        <a href="../../Views/User/UploadVideo.php" class="nav-items">
            <i class="fa-solid fa-upload"> </i>
            <div class="nav-items-title">Uploads</div>
        </a>
    </div>


    </div>
    <!-- conatin videos -->
    <h3 class="contain-video-title">Library</h3>
    <div class="contain-video">
        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../../assets/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../../assets/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#">
                        <p class="name-user">User-name</p>
                    </a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>
            </div>
        </div>

        

    </div>
    <!-- pagination  -->
    <nav aria-label="Page navigation example" style="margin-top: 15vh">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>


    <script>
        const navbarMenu = document.querySelector('.navbar-main-menu');
        const navbarSlider = document.querySelector('.navbar-main-slider');
        const navbarItems = document.querySelectorAll('.nav-items');

        // show and hide the navbar slider
        navbarMenu.addEventListener('click', function () {
            navbarSlider.classList.toggle('open')
        })
        //active the items in navbar slider
        navbarItems.forEach(items => {
            items.addEventListener('click', function () {
                console.log('chose')
                navbarItems.forEach(item => {
                    item.classList.remove('active')
                })
                items.classList.add('active')

            })
        }
        )
        



    </script>
</body>
 <!-- loading page -->
 <link rel="stylesheet" href="../../assets/css/Page-loading.css">
    <script src="../../assets/scripts/Page-loading.js"></script>
    <!-- change theme color -->
    <script src="../../assets/scripts/Change-theme-background-color-video.js"></script>
</html>