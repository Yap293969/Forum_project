<!doctype html>
<html lang="en">
  <head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!------ Include the above in your HEAD tag ---------->

  <title>Profile</title>
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
          
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous"></script>
  </head>

  <title>profile</title>

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
    <?php include 'navbar.php';?>

      <div class="container">
        <div class="row">
        <div class="col-md-9">
            <div class="profile-content">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container" style="max-width: 800px;">
                  <nav class="navbar navbar blue" style="background-color: white;">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 50px; background-color:white; align-items: center;" >
                      <div class="container-fluid" style="margin-left: 200px;">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin: 10px;">
                          <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="text-align: center;">
                            <li class="nav-item" style="margin: 5px;">
                              <a class="nav-link" href="#" style="color: black;">New</a>
                            </li>
                            <li class="nav-item" style="margin: 5px;">
                              <a class="nav-link" href="#" style="color: black;">Hot</a>
                            </li>
                            <li class="nav-item" style="margin: 5px;">
                              <a class="nav-link" href="#" style="color: black;">Top</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </nav>
                </div>
              </nav>              
                </div>  
              </div>
              <div class = "col-md-3">
              <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-container">
                  <div class="profile-userpic">
                    <img src="forum_project_test_images/profile_picture_test.jpeg" class="img-responsive" alt="Profile Picture">
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
                  <label for="fileInput" class="btn btn-info btn-lg">Add Profile Picture</label>
                  <input type="file" id="fileInput" style="opacity: 0; position: absolute; top: 0; left: 0;" accept="image/*" onchange="previewImage(this)">
                </div>
                <div>
                  <p>Date account created:</p>
                </div>
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
      <script>
        function previewImage(input) {
          var profilePic = document.querySelector('.profile-userpic img');
          var file = input.files[0];
      
          if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
              profilePic.src = e.target.result;
            };
            reader.readAsDataURL(file);
          }
        }
      </script>
  </body>
</html>