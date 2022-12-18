<?php
    // require_once "../../connectdb.php";
    // // $username = $_COOKIE["username"];
    // $id_video = 31;
    // $sql = "SELECT v.*, u.fullname, u.img FROM feature f, video v, user u WHERE f.id_video = v.id_video and v.username = u.username and v.id_video = $id_video";
    // $result = mysqli_query($conn, $sql);
    // $data = array();
    // if($result->num_rows > 0){
    //     while($r = $result->fetch_assoc()){
    //         $view = (int)$r["view"];
    //         $view_format = '';
    //         while($view > 1000){
    //             $remain = $view%1000;
    //             $view = (int)($view/1000);
    //             $view_format = ','.$remain.$view_format;
    //         }
    //         $view_format = $view.$view_format;
    //         $data[] = ["id_video"=>$r["id_video"],"namevideo"=>$r["namevideo"],"view"=>$view_format,"dayupload"=>$r["dayupload"],"thumbnail"=>$r["thumbnail"], "mode"=>$r["mode"], "fullname"=>$r["fullname"], "link"=>$r["link"], "avt"=>$r["img"]];
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video</title>
   <!-- logo header -->
   <link rel="shortcut icon" href="../../assets/images/logo.png" />
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/style_home.css">
    <link rel="stylesheet" href="../../assets/css/style_common.css">
    <link rel="stylesheet" href="../../assets/css/style_video.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
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
        <a href="#" class="navbar-main-logo"><img src="../../assets/images/logo.png" alt=""></a>
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
        <a href="../../Views/Video/Following-channels.php" class="nav-items">
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
        <a href="../../Views/Video/Favorite-videos.php" class="nav-items">
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
    <!-- video display -->
    <div class="wrapper" id="wrapper">
        <div class="left-side">
            <div class="video-wrapper">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/psZ1g9fMfeo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <!-- title video -->
            <h3 class="video-title"><?php echo $data[0]["namevideo"]; ?></h3>
            <div class="video-contact">
                <h6 class="video-view"><?php echo $data[0]["view"]; ?> views</h6>
                <h6 class="video-upload-date"><?php echo $data[0]["dayupload"]; ?></h6>
                <div class="video-like"><i class="fa-solid fa-thumbs-up"></i> <span class="number-of-liked">123</span></div>
                <div class="video-share"> <i class="fa-solid fa-share-from-square"> </i> Share</div>
                <div class="video-playlist-save"><i class="fa-solid fa-floppy-disk"></i> Save</div>
            </div>
            <div class="stick-separate"></div>
            <!-- user make video -->
            <div class="infomation-video-maker">
                <img src="images/logo.png" alt="" class="video-maker-avt" style="border-radius: 50%;">
                <h3 class="video-maker-username"><?php echo $data[0]["fullname"]; ?></h3>
                <h5 class="subcriber"><span class="number-of-subcriber">123</span> Subcirbers</h5>
                <button class="btn subcribe-btn " type="submit" name="subcribe">Subcribe</button>
            </div>
            <!-- description -->
            <div class="video-description">
                <h3 class="desc-title">Description</h3>
                <p class="details-description line-clamp">ease: tạo hiệu ứng chuyển đổi khi bắt đầu thì chậm sau đó nhanh dần và gần kết thúc lại chậm từ từ (giá trị mặc định).
                    linear: tạo hiệu ứng chuyển đổi từ lúc bắt đầu với lúc kết thúc tốc độ là như nhau.
                    ease-in: tạo hiệu ứng chuyển đổi chậm ở lúc bắt đầu.
                    ease-out: tạo hiệu ứng chuyển đổi chậm ở lúc kết thúc.
                    ease-in-out: tạo hiệu ứng chuyển đổi chậm ở lúc bắt đầu và lúc kết thúc.</p>
            </div>
            <div class="stick-separate"></div>
            <!-- create comment -->
            <div class="comment-box">
                <a href=""><img src="images/none-avt.jpg" alt="" class="user-avt"></a>
                <form class="body-user-comment" action="" method="post">
                    <label for="comment-area"><h3 class="user-name">Name of user is typing this comment</h3></label>
                    <textarea name="comment-area" id="comment-area" cols="100" rows="" class="comment-input"></textarea>
                    <!-- comment btn -->
                    <input type="submit" name="comment" class="comment-btn button-6" value="Comment">
                </form>
            </div>
            <!-- comments of other users -->

            <!-- title -->
            <h2 class="comments-titles">Comments</h2>

            <div class="comment-box">
                <a href=""><img src="images/none-avt.jpg" alt="" class="user-avt"></a>
                <div class="body-user-comment">
                    <h3 class="user-name">Name of user is typing this comment</h3>
                    <p class="comment-details">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
    
                        Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                    </p>
                    <!-- comment btn -->
                </div>
            </div>

            <div class="comment-box">
                <a href=""><img src="images/none-avt.jpg" alt="" class="user-avt"></a>
                <div class="body-user-comment">
                    <h3 class="user-name">Name of user is typing this comment</h3>
                    <p class="comment-details">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
    
                        Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                    </p>
                    <!-- comment btn -->
                </div>
            </div>

            <div class="comment-box">
                <a href=""><img src="images/none-avt.jpg" alt="" class="user-avt"></a>
                <div class="body-user-comment">
                    <h3 class="user-name">Name of user is typing this comment</h3>
                    <p class="comment-details">Long Text   In Access web apps, the Long Text field can store up to 2^30-1 bytes, and is equivalent to the SQL Server data type of nvarchar(max). If you want, you can set a character limit to prevent your users from using the full capacity of the field. You can’t store Rich Text in Access web apps.
    
                        Short Text    In Access web apps the Short Text field is set to store 255 characters by default, but you can adjust the Character Limit property all the way up to 4000 characters. Its SQL Server equivalent is nvarchar, with length from 1 to 4000.
                    </p>
                    <!-- comment btn -->
                </div>
            </div>
            

             

        </div>
        
        <div class="right-side">
            <div class="suggest-video" style="padding-top: 20px; display: flex;">
                <a href="">
                    <video controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                </a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user">User-name</p></a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>

            </div>

            <div class="suggest-video" style="padding-top: 20px; display: flex;">
                <a href="">
                    <video controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                </a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user">User-name</p></a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>

            </div>

            <div class="suggest-video" style="padding-top: 20px; display: flex;">
                <a href="">
                    <video controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                </a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user">User-name</p></a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>

            </div>

            <div class="suggest-video" style="padding-top: 20px; display: flex;">
                <a href="">
                    <video controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                    </video>
                </a>
                <div class="inf-video">
                    <h1 class="content-video">Phân tích cốt truyện: MY FRIEND PEDRO - Sát Thủ Tưởng Tượng</h1>
                    <!-- click move to chanel -->
                    <a href="#"><p class="name-user">User-name</p></a>
                    <p>xxx lượt xem . 1 tháng trước</p>
                </div>

            </div>

            
        </div>
    </div>

    </div>

    <script>
        const navbarMenu = document.querySelector('.navbar-main-menu');
        const navbarSlider = document.querySelector('.navbar-main-slider');
        const navbarItems = document.querySelectorAll('.nav-items');
        
        // change theme BG
        const setTheme = theme => document.documentElement.className = theme;
        
        // show and hide the navbar slider
        navbarMenu.addEventListener('click', function () {
            navbarSlider.classList.toggle('open')
        })
        //active the items in navbar slider
        navbarItems.forEach(items=>{
            items.addEventListener('click',function(){
                console.log('chose')
                navbarItems.forEach(item=>{
                    item.classList.remove('active')
                })
                items.classList.add('active')

            })
        }
        )
        $('textarea').each(function () {
            this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
            }).on('input', function () {
            this.style.height = 'auto';
            this.style.height = (this.scrollHeight) + 'px';
        });
        //show all description which was hidden
        $('.video-description').click(function(){
            $('.details-description').toggleClass('none-line-clamp line-clamp')
        })
        // solve comments
        document.querySelectorAll('.comment-others').forEach(function(cmt){
            cmt.addEventListener('mouseover',function(){
                let details=cmt.querySelector('.comment-details')
                details.style.background ='#c49999'
                details.style.zIndex = '999'
                details.classList.add('none-line-clamp')
                details.classList.remove('line-clamp')


            })
            cmt.addEventListener('mouseout',function(){
                let details=cmt.querySelector('.comment-details')
                details.style.background ='#f3f3f3'
                details.style.zIndex = '1'
                details.classList.add('line-clamp')
                details.classList.remove('none-line-clamp')


            })
        })
        

    </script>
</body>

</html>