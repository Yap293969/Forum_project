<?php
$uploadFolder = "uploads/"; // Specify the folder where you want to store uploaded profile pictures

if (isset($_FILES["profilePicture"]) && $_FILES["profilePicture"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["profilePicture"]["tmp_name"];
    if (isset($_FILES["profilePicture"]["name"])) {
        $profilePictureFilename = basename($_FILES["profilePicture"]["name"]);
        $destination = $uploadFolder . $profilePictureFilename;

        if (move_uploaded_file($tmp_name, $destination)) {
            // File upload successful
            // Update the profile picture path in your database or user data
            // For example: $userId = $_SESSION["user_id"]; updateProfilePicturePath($userId, $destination);
            echo "Profile picture uploaded successfully.";
        } else {
            echo "Error uploading profile picture.";
        }
    }
} else {
    // Handle the case when no file is uploaded or there's an issue
    echo "Error: File not uploaded or invalid file.";
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- ... (rest of your head section) ... -->
</head>
<body>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome CSS -->
  <script src="path/to/local/fontawesome.js"></script>

  <!-- Bootstrap and Popper.js scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <!-- Other scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </head>
  <style>
    
    
  
  .h7 {
      font-size: 0.8rem;
  }
  
  .gedf-wrapper {
      margin-top: 0.97rem;
  }
  
         
          /* Styles for the dropdown */
          .dropdown {
              display: inline-block;
              align-items: center;
          }
  
          .dropdown-content {
              display: none;
              position: absolute;
              background-color: #333;
              min-width: 160px;
              max-height: 100px;
              box-shadow: 0 8px 16px rgba(0,0,0,0.2);
          }
  
          .dropdown-content a {
              color: black;
              padding: 12px 16px;
              display: block;
              text-align: left;
              text-decoration: none;
          }
  
          .dropdown-content a:hover {
              background-color: #fff;
          }
  
          .dropdown:hover .dropdown-content {
              display: block;
              background-color: lightblue;
          }

          body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      background-image: url('your-background-image.jpg'); /* Replace with your background image URL */
      background-size: cover;
      background-position: center;
      height: 200px; /* Adjust the height as needed */
    }

.profile-userpic img {
  position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100px; /* Adjust the width of the profile picture as needed */
      height: 100px; /* Adjust the height of the profile picture as needed */
      border-radius: 50%;
      border: 3px solid #fff; /* Add a border if desired */
      overflow: hidden;
}

.profile-usertitle {
  text-align: center;
  margin-top: 10px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
    width:100%;
}

section .section-title {
    text-align: center;
    color: blue;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: blue;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#ffffff;
}
#footer ul.social li a:hover{
	color:#eeeeee;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
  
  @media (min-width: 992px) {
      .gedf-main {
          padding-left: 4rem;
          padding-right: 4rem;
      }
      .gedf-card {
          margin-bottom: 2.77rem;
      }
  }
  </style>
  <body>

  <?php include 'navbar.php' ?>

      <div class="container">
        <div class="row">
        <div class="col-md-9">
            <div class="profile-content">           
                </div>  
              </div>
              <div class = "col-md-3">
              <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-container">
                <div class="profile-userpic" id="profilePicContainer">
                <img src="<?php echo isset($profilePicturePath) ? $profilePicturePath : 'default_image.jpg'; ?>" class="img-responsive" alt="Profile Picture">
                </div>
                  <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                      Yap Xiang Yang
                    </div>
                  </div>
                </div>                               
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                
                <div class="profile-userbuttons">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="profilePicture">Upload Profile Picture:</label>
                    <input type="file" name="profilePicture" id="profilePicture" accept="image/*">
                </form>
                </div>
               
                <center>
                <div>
                  <p>Date account created:</p>
                </div>
                <div>
                <a href="post.php" class="btn btn-success">Add new post</a>
                </div>
              </center>
                <!-- END SIDEBAR BUTTONS -->
                <!-- END MENU -->
              </div>
            </div>
          </div>
            </div>
            </div>
            <br>
            <br>
        </div>
        <section id="footer">
          <div class="container">
              <div class="row text-center text-xs-center text-sm-left text-md-left">
                  <div class="col-xs-12 col-sm-4 col-md-4">
                      <h5>Quick links</h5>
                      <ul class="list-unstyled quick-links">
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                      </ul>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4">
                      <h5>Quick links</h5>
                      <ul class="list-unstyled quick-links">
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                      </ul>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4">
                      <h5>Quick links</h5>
                      <ul class="list-unstyled quick-links">
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                          <li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                          <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                      </ul>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                      <ul class="list-unstyled list-inline social text-center">
                          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-instagram"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
                      </ul>
                  </div>
                  <hr>
              </div>	
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                      <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                      <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                  </div>
                  <hr>
              </div>	
          </div>
      </section>
      <!-- ./Footer -->
      </div>
      </div>
  </body>
</html>