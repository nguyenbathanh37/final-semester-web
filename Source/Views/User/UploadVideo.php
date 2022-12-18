<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <!-- logo header -->
    <link rel="shortcut icon" href="../../assets/images/logo.png" />
    <!-- css -->
    <link rel="stylesheet" href="../../assets/css/style_home.css">
    <link rel="stylesheet" href="../../assets/css/style_common.css">
    <link rel="stylesheet" href="../../assets/css/style_upload.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!-- icon -->
    <script src="https://kit.fontawesome.com/198f11ff77.js" crossorigin="anonymous"></script>
     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
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
        
        <a href="../../Views/User/UploadVideo.php" class="nav-items active">
            <i class="fa-solid fa-upload"> </i>
            <div class="nav-items-title">Uploads</div>
        </a>
    </div>

    <!-- upload body -->
    <div class="upload-body">
        <!-- title upload -->
        <!-- upload button -->
        <div class="upload-btn">
            <h3 class="upload-title">Choose the file to upload.</h3>
            <input type="file"  id="addVideosInput" accept=" video/*" style="display: none;">
            <button class="button-6 btn-secondary" id="addVideosBtn">Add Videos <i class="fa fa-camera icon"></i> </button>
        </div>
        <!-- setting -->
        <div class="setting">
           
        <div class="responsive-layout">
        <div class="left-side-setting">
            <h2>Setting</h2>
             <!-- title -->
             <label for="title-video">Title</label>
             <br>
             <input type="text" name="title-video" id="title-video" class="title-video-input no-outline" placeholder="The name of video">
             <br>
             <!-- description -->
             <label for="description-video">Description</label>
             <br>
             <textarea name="description-video" id="description-video" cols="50" rows="4" placeholder="More details for video"></textarea>
             <br>

             <!-- playlist -->
             <label for="playlist-video">Playlist</label>
             <select name="playlist-select" id="playlist-select">
                 <option value="music">music</option>
                 <option value="action">action</option>
                 <option value="fiction">fiction</option>
             </select>
             <br>

              <!-- video uploaded -->
              <div class="video-list">
             </div>
           </div>
           <div class="right-side-setting">
            <!-- visibillity mode -->
                <label for="visibillity">visibillity</label>
                <!-- public mode -->
                <h3 class="checbox-title">Public <input type="checkbox" name="public-mode" id="public-mode"></h3>
                <p class="mode-note">Anyone can discover and see this video</p>
                <!-- private mode -->
                <h3 class="checbox-title">Private  <input type="checkbox" name="private-mode" id="private-mode"></h3>
                <p class="mode-note">Only you can see this video</p>
                
                <!-- upload thumbnails -->
                <h3 class="thumnails-upload-title">Set the thumbails.</h3>
                <input type="file"  id="thumbnails-img-src" accept=" image/*" style="display: none;">
                <button class="button-6 " id="thumbnails-upload-button">Custom Thumbnails <i class="fa-solid fa-wrench icon" ></i> </button>
                <!-- thumnails uploaded -->
                <div class="thumbnails">
                    <img src="../../assets/images/Thumbnails-img.jpg" alt="Thumbnails" id="sample-img">
                </div>
                <!-- submit button -->
                <button type="submit" name="submit" class="btn-main save-for-all">Save for all</button>
           </div>
            
        </div>


        </div>

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
        //upload video
        $('#addVideosBtn').click(function() {
            // hide the upload btn
            $('.upload-btn').css('display','none')
            $('.setting').css('display','block')

            

            
            $(this).parents().find('#addVideosInput').click();
        });

            document.getElementById('addVideosInput').onchange = e => {
            const fileVideo = e.target.files[0];
            //src of mp4 file
            const url = URL.createObjectURL(fileVideo);
            //save the link of video to edit
         
            const li = ` 
            <div> 

            <video controls="controls" src=" ${url} " type="video/mp4" width="600px" height="480px"></video>
            
            
            </div>`
            $('.video-list').append(li);  
            };


        // upload thumbnails
        $('#thumbnails-upload-button').click(function() {
            // hide the upload btn
            $('#sample-img').css('display','none')
            if($('#thumbnails-img')){
                $('#thumbnails-img').remove()
            }
            $(this).parents().find('#thumbnails-img-src').click();
        });

            document.getElementById('thumbnails-img-src').onchange = e => {
            const file = e.target.files[0];
            //src of img file
            const url = URL.createObjectURL(file);
            //create img
            const thumbnailImg = ` 
                <img src="${url}" alt="Thumbnails" id="thumbnails-img">
            `
            $('.thumbnails').append(thumbnailImg);  
            };
    </script>
    
</body>

</html>