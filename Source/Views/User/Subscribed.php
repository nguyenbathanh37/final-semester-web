<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="assets/images/logo.png"/>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style_home.css">
    <link rel="stylesheet" href="assets/css/style_common.css">
    <link rel="stylesheet" href="assets/css/style_form_video.css">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- loading page -->
    <link rel="stylesheet" href="assets/css/Page-loading.css">
    <script src="assets/scripts/Page-loading.js"></script>
</head>

<body>
     <!-- navbar -->
     <div class="navbar-main">
        <!-- menu -->
        <div class="navbar-main-menu "><i class="fa-solid fa-bars"></i></div>
        <!-- logo -->
        <a href="#" class="navbar-main-logo"><img src="assets/images/logo.png" alt=""></a>
        <!-- search -->
        <div class="search-box">
            <!-- search input -->
            <input type="text" name="search-input" placeholder="Search...">
            <!-- search button - looking event-->
            <a href="#">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <a href="#" class=""><img src="<?php echo $avt;?>" alt="Avatar"></a>
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
                <a href="index.php" class="nav-items">
                    <i class="fa-solid fa-house"></i>
                    <div  class="nav-items-title">Home</div>
                </a>
                 <!-- libary -->
                <a href="#" class="nav-items">
                    <i class="fa-solid fa-photo-film"></i>
                    <div  class="nav-items-title">Libary</div>
                </a>
                 <!-- subcribed -->
                <a href="index.php?controller=User&action=subcribed" class="nav-items">
                    <i class="fa-solid fa-circle-nodes"></i>
                    <div  class="nav-items-title">Following Channels</div>
                </a>
                 <!-- history -->
                <a href="index.php?controller=User&action=history" class="nav-items">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <div  class="nav-items-title">History</div>
                </a>
                 <!-- like videos -->
                <a href="index.php?controller=User&action=liked" class="nav-items">
                    <i class="fa-solid fa-thumbs-up"></i>
                    <div  class="nav-items-title">Favorite videos</div>
                </a>
                <!-- My list -->
                <a href="index.php?controller=User&action=mylist" class="nav-items">
                    <i class="fa-solid fa-video"></i>
                    <div  class="nav-items-title">My list</div>
                </a>
               
            <!-- MANAGER -->
            <div class="nav-title">
                Manager
            </div>
            <div class="stick"></div>
            <!-- MANAGER's elements -->
                <!-- profile -->
                <a href="assets/Profile.html" class="nav-items">
                    <i class="fa-solid fa-address-card"></i>
                    <div  class="nav-items-title">Profile</div>
                </a>
                <!-- uploads -->
                <a href="assets/UploadVideo.html" class="nav-items">
                    <i class="fa-solid fa-upload"> </i>
                    <div  class="nav-items-title">Uploads</div>
                </a>
        </div>

    
</div>
    <!-- conatin videos -->
    <div class="contain-video">
        <!--<a href="#"><img src="'.$video["thumbnail"].'" alt=""></a>-->
        <?php
        foreach($listUser as $user){
            echo '<div class="form-video">
                <!-- link chanel of account -->
                <a href="#"><img src="'.$user['avt'].'" alt=""></a>
                
                <div class="summary-video">
                    <!-- click move to chanel -->
                    <!-- <a href="index.php?controller=Video&action=watch&link=$user["link"]"><img src="'.$user["avt"].'" title="name-account" alt="" class="icon-user"></a> -->
                    <div class="inf-video">
                        <h1 class="content-video">'.$user["fullname"].'</h1>
                        <!-- click move to chanel -->
                        <a href="#"><p class="name-user">'.$user["username"].'</p></a>
                        <p>'.$user["num_sub"].' subcribe . </p>
                    </div>
                </div>
            </div>';
        }
        ?>
        
    </div>


    <script>
        const navbarMenu = document.querySelector('.navbar-main-menu');
        const navbarSlider = document.querySelector('.navbar-main-slider');
        const navbarItems = document.querySelectorAll('.nav-items');
        
        // show and hide the navbar slider
        navbarMenu.addEventListener('click',function(){
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
      


    </script>
</body>

</html>