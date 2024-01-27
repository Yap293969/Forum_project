<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Job Listing</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">					
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">

        <style>
            /* Footer */
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
         </style>
    </head>
    <body>
        
        <!-- Start feature-cat Area -->
        <section class="feature-cat-area pt-100" id="category">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Featured Job Categories</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>						
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="job_openning_category.php">
                                <img src="img/o1.png" alt="">
                            </a>
                            <p>Accounting</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="job_openning_category.php">
                                <img src="img/o2.png" alt="">
                            </a>
                            <p>Development</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="job_openning_category.php">
                                <img src="img/o3.png" alt="">
                            </a>
                            <p>Technology</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="job_openning_category.php">
                                <img src="img/o4.png" alt="">
                            </a>
                            <p>Media & News</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="job_openning_category.php">
                                <img src="img/o5.png" alt="">
                            </a>
                            <p>Medical</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="single-fcat">
                            <a href="job_openning_category.php">
                                <img src="img/o6.png" alt="">
                            </a>
                            <p>Goverment</p>
                        </div>			
                    </div>																											
                </div>
            </div>	
        </section>
        <!-- End feature-cat Area -->
        
        <!-- Start post Area -->
        </script>
        <section class="post-area section-gap">
            <div class="container">
                <div class="row justify-content-center d-flex">
                    <div class="col-lg-8 post-list">
                        <div class="single-post d-flex flex-row">


        <script>
            function filterJobs(jobNature) {
                var jobPosts = document.querySelectorAll('.single-post');
        
            jobPosts.forEach(function(post) {
                var nature = post.querySelector('h5').textContent.split(':')[1].trim();
            
            if (jobNature === 'All' || nature === jobNature) {
                post.classList.remove('hidden');
            } else {
                post.classList.add('hidden');
            }
        });
    }
    </script>
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Part Time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Intern</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>		
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Intern</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Part Time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>															
                        <div class="single-post d-flex flex-row">
                            <div class="thumb">
                                <img src="img/post.png" alt="">
                                <ul class="tags">
                                    <li>
                                        <a href="#">Art</a>
                                    </li>
                                    <li>
                                        <a href="#">Media</a>
                                    </li>
                                    <li>
                                        <a href="#">Design</a>					
                                    </li>
                                </ul>
                            </div>
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href="single.html"><h4>Creative Art Designer</h4></a>
                                        <h6>Premium Labels Limited</h6>					
                                    </div>
                                    <ul class="btns">
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
                                </p>
                                <h5>Job Nature: Full time</h5>
                                <p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
                                <p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
                            </div>
                        </div>	

                    </div>
                    <div class="col-lg-4 sidebar">
                        <div class="single-slidebar">
                            <h4>Jobs by Location</h4>
                            <ul class="cat-list">
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Kuala Lumpur</p><span>37</span></a></li>
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Johor</p><span>57</span></a></li>
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Terrenganu</p><span>33</span></a></li>
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Ipoh</p><span>36</span></a></li>
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Penang</p><span>47</span></a></li>
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Kedah</p><span>27</span></a></li>
                                <li><a class="justify-content-between d-flex" href="job_opening_category.php"><p>Kuantan</p><span>17</span></a></li>
                            </ul>
                        </div>
        </section>
        <!-- End post Area -->
    
 <!-- Footer -->
 <section id="footer">
    <section id="footer" style="margin-top:10px;">
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

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>			
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>			
        <script src="js/parallax.min.js"></script>		
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	
    </body>
</html>


