<?php
include "../admin/db.php";

$query = "SELECT * FROM `nameplaylist`";
$result = $conn->query($query);
// $res = $conn->query("select * from product");
$result = $result->fetch_all();


// foreach ($result as $value) {
// 	print_r($value[0]);
// }
// die();
// print_r($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="../CSS/style_upload.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="/style.css"> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<title>Home Page</title>
</head>

<body>
	<div class="container-fluid fixed-top">
		<div class="row">
			<!-- Header -->
			<div class="col-12 ntt_header">
				<div class="ntt_header_item ntt_header_item__DieuHuong">
					<button class="btn"><i class="fa-solid fa-bars"></i></button>
					<a href="/index.php"><img class="item__DieuHuong__logo"src ="../images/logo.png" alt="LOGO"/></a>
				</div>

				<div class="ntt_header_item ntt_header_item__input">
					<input class="input" placeholder="Search user or video"/>
					<i class="fa-solid fa-magnifying-glass"></i>
				</div>

				<div class="ntt_header_item ntt_header_item__UpPro">
					<i class="itempro fa-solid fa-upload"></i>
					<a class="itempro">
						<img class="rounded-circle" src="https://hthaostudio.com/wp-content/uploads/2020/06/anh-doanh-nhan-dep-1180x760.jpg", alt="profile"/>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid container2" style="
    position: absolute;
    top: 70px;
">
		<div class="row">
			<!-- SideBar -->
			<div class="container_item__sidebar col-3 ">
					<div class="sidebar_profile">
						<div class="mt-2 profile_img">
							<img src="https://hthaostudio.com/wp-content/uploads/2020/06/anh-doanh-nhan-dep-1180x760.jpg" alt="">
						</div>
						<h5 class="mt-2 profile_name">Nguyen Tan Thanh</h5>
						<button class="mt-2 btn btn-danger btn-sm"><a>Sign out</a></button>
						</div>

						<div class="sidebar_connects mt-4">
						<div class="connects__item">
							<p class="item1">
								Profile
							</p>
						</div>
						<div class="connects__item">
							<ul class="list__item ">
								<li class="item mb-3 active">
									<i class="fa-solid fa-upload"></i>
									<span>Upload</span>
								</li>
								<li class="item mb-3">
									<i class="fa-solid fa-user"></i>
									<span>My Profile</span>
								</li>
								<li class="item mb-3">
								<i class="fa-solid fa-list"></i>
								<span>My Playlist</span>
								</li>
								<li class="item mb-3">
								<i class="fa-solid fa-video"></i>
								<span>My Video</span>
								</li>
							</ul>
						</div>

					</div>

			</div>

			<!-- Content upload -->
			<div class="container_item col-9">
					<div class="row" style="margin-right: 5px;">
						<div class="col-12 content_title m-3">
							<h2 style="color: #B08D8D ;">Upload Video</h2>
							<!-- <label for="pet-select">File or URL:</label>

							<select name="pets" id="upload-select">
								<option value="">--Please choose an option--</option>
								<option value="2">Upload URL</option>
								<option value="1">Upload File</option>
		
							</select> -->

						</div>
						<!-- upload file -->
						<div class="col-12 file">
							<h5>Upload Video with FILE:</h5>
							<form enctype='multipart/form-data' method="post" name="form_file" action="upload_file.php" class="needs-validation ml-3" onsubmit="return validate()" novalidate>
								<div class="form-group">
									<label for="title_file">Title of the video:</label>
									<input  type="text" class="form-control" id="title_file" placeholder="Enter title of the video" name="title_file" required>
									<div class="valid-feedback">Valid.</div>
									<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="input-group mb-3">
									<div class="custom-file">
										<input type="file"  class="custom-file-input" name="fileToUpload" id="fileToUpload" required accept="video/mp4,video/x-m4v,video/*">
										<label class="custom-file-label" for="fileToUpload" style=" width: 90%;">Choose file</label>
									</div>
									
								</div>
								<label for="playlist-video">Playlist</label>
             <select name="playlist-select" id="playlist-select " class="bg-danger text-white">
				<?php
                foreach ($result as $value) {
                ?>
					<option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
				<?php } ?>
                 <!-- <option value="music">music</option>
                 <option value="action">action</option>
                 <option value="fiction">fiction</option> -->
             </select>
								<p class="mb-2" id="nameFile"></p>
								<H2>visibillity</H2>
								<div class="form-group row">
    <div class="text-danger col-sm-2">Public</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck1" value="public">
        <label class="form-check-label" for="radiovis">
		Anyone can discover and see this video
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="text-danger col-sm-2">Private</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck2" value="private">
        <label class="form-check-label" for="radiovis">
		Only you can see this video
        </label>
      </div>
    </div>
  </div>

  <H2>Set the thumbails.</H2>
  <div>
  <input type="file"  name="imgthumbnails"   id="thumbnails-img-src" accept=" image/*" style="display: none;">
                <div class="button-6  btn btn-outline-info btn-sm" id="thumbnails-upload-button">Custom Thumbnails <i class="fa-solid fa-wrench icon" ></i> </div>
                <!-- thumnails uploaded -->
                <div class="thumbnails">
                    <img src="" alt="Thumbnails" id="sample-img">
                </div>
  </div>
								<button type="submit" name="submitFILE" class="btn btn-danger btn-sm">Upload with file</button>
							</form>
						</div>
						<!-- upload url -->
						<div class="col-12 url mb-5">
							<h5>Upload Video with URL:</h5>
						<form enctype='multipart/form-data' method="post" action="upload_url.php" class="needs-validation ml-3" novalidate>
								<div class="form-group">
								<label for="title_url">Title of the video:</label>
								<input  type="text" class="form-control" id="title_url" placeholder="Enter title of the video" name="title_url" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<div class="form-group">
								<label for="url">Add Video with URL:</label>
								<input  type="url" class="form-control" id="url" placeholder="Enter URL of the video" name="url" pattern="https://.*" required>
								<div class="valid-feedback">Valid.</div>
								<div class="invalid-feedback">Please fill out this field.</div>
								</div>
								<label for="playlist-video">Playlist</label>
             <select name="playlist-select" id="playlist-select" class="bg-danger text-white">
			 <?php
                foreach ($result as $value) {
                ?>
					<option value="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></option>
				<?php } ?>
             </select> <br/>
			 <H2>visibillity</H2>
								<div class="form-group row">
    <div class="text-danger col-sm-2">Public</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck1" value="public">
        <label class="form-check-label" for="radiovis">
		Anyone can discover and see this video
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="text-danger col-sm-2">Private</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="radiovis" type="radio" id="gridCheck2" value="private">
        <label class="form-check-label" for="radiovis">
		Only you can see this video
        </label>
      </div>
    </div>
  </div>

  <H2>Set the thumbails.</H2>
  <div>
  <input type="file" name="imgthumbnails"  id="thumbnails-img-src1" accept=" image/*" style="display: none;">
                <div class="button-6  btn btn-outline-info btn-sm" id="thumbnails-upload-button1">Custom Thumbnails <i class="fa-solid fa-wrench icon" ></i> </div>
                <!-- thumnails uploaded -->
                <div class="thumbnails1">
                    <img src="" alt="Thumbnails" id="sample-img1">
                </div>
  </div>
								<button type="submit" name="submitURL" class="btn btn-danger btn-sm">Upload with URL</button>
							</form>
						</div>
						
					</div>
			</div>	
		</div>

	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="/main.js"></script> <!-- Sử dụng link tuyệt đối tính từ root, vì vậy có dấu / đầu tiên -->
	<script>
        $(document).ready(() => {
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



			$('#thumbnails-upload-button1').click(function() {
            // hide the upload btn
            $('#sample-img1').css('display','none')
            if($('#thumbnails-img1')){
                $('#thumbnails-img1').remove()
            }
            $(this).parents().find('#thumbnails-img-src1').click();
        });

            document.getElementById('thumbnails-img-src1').onchange = e => {
            const file = e.target.files[0];
            //src of img file
            const url = URL.createObjectURL(file);

            //create img
            const thumbnailImg = ` 
                <img src="${url}" alt="Thumbnails" id="thumbnails-img1">
            `
            $('.thumbnails1').append(thumbnailImg);  
            };
});



      
    </script>
</body>

</html>