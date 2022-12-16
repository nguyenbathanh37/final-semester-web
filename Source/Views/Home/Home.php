<?php
    if(!isset($_COOKIE["username"])){
        header("Location: SignIn.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="../Source/images/logo.png" />
    <!-- css -->
    <link rel="stylesheet" href="../Source/CSS/style_home.css">
    <link rel="stylesheet" href="../Source/CSS/style_common.css">
    <link rel="stylesheet" href="../Source/CSS/style_form_video.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- loading page -->
    <link rel="stylesheet" href="../CSS/Page-loading.css">
    <script src="../Javascript/Page-loading.js"></script>

</head>

<body>
    <!-- navbar -->
    <div class="navbar-main">
        <!-- menu -->
        <div class="navbar-main-menu "><i class="fa-solid fa-bars"></i></div>
        <!-- logo -->
        <a href="#" class="navbar-main-logo"><img src="images/logo.png" alt=""></a>
        <!-- search -->
        <div class="search-box">
            <!-- search input -->
            <input type="text" name="search-input" placeholder="Search...">
            <!-- search button - looking event-->
            <a href="#">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <!-- log up -->
        <a href="./SignUp.html" class="log-up-btn button-57" style="margin-left: 12px;"><span class="text">Log
                up</span><span>Create Account!</span></a>
        <!-- log in -->
        <a href="./SignIn.html" class="log-in-btn button-57"><span class="text">Log in</span><span>Exist Account
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
        <a href="../Source/Home.html" class="nav-items">
            <i class="fa-solid fa-house"></i>
            <div class="nav-items-title">Home</div>
        </a>
        <!-- trending -->
        <a href="../Source/Trending.html" class="nav-items">
            <i class="fa-solid fa-fire-flame-curved"></i>
            <div class="nav-items-title">Trending</div>
        </a>
        <!-- libary -->
        <a href="../Source/Libary.html" class="nav-items">
            <i class="fa-solid fa-photo-film"></i>
            <div class="nav-items-title">Libary</div>
        </a>
        <!-- subcribed -->
        <a href="../Source/Following-channels.html" class="nav-items">
            <i class="fa-solid fa-circle-nodes"></i>
            <div class="nav-items-title">Following Channels</div>
        </a>
        <!-- history -->
        <a href="../Source/History.html" class="nav-items">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <div class="nav-items-title">History</div>
        </a>
        <!-- like videos -->
        <a href="../Source/Favorite-videos.html" class="nav-items">
            <i class="fa-solid fa-thumbs-up"></i>
            <div class="nav-items-title">Favorite videos</div>
        </a>
        <!-- My list -->
        <a href="../Source/My-list.html" class="nav-items">
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
        <a href="../Source/Profile.html" class="nav-items">
            <i class="fa-solid fa-address-card"></i>
            <div class="nav-items-title">Profile</div>
        </a>
        <!-- uploads -->
        <a href="../Source/UploadVideo.html" class="nav-items">
            <i class="fa-solid fa-upload"> </i>
            <div class="nav-items-title">Uploads</div>
        </a>
    </div>


    </div>
    <!-- conatin videos -->
    <div class="contain-video">

        <div class="form-video">
            <!-- link chanel of account -->
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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
            <a href="#"><img src="../Source/images/Thumbnails-img.jpg" alt=""></a>

            <div class="summary-video">
                <!-- click move to chanel -->
                <a href="#"><img src="../Source/images/none-avt.jpg" title="name-account" alt="" class="icon-user"></a>
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

</html>