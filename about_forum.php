<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
    font-family: 'Roboto';
    font-size: 16px;
}

.aboutus-section {
    padding: 90px 0;
}
.aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
}
.aboutus-title::after {
    background: #fdb801 none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
}
.aboutus-text {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
    margin: 0 0 35px;
}

a:hover, a:active {
    color: #ffb901;
    text-decoration: none;
    outline: 0;
}
.aboutus-more {
    border: 1px solid #fdb801;
    border-radius: 25px;
    color: #fdb801;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0;
    padding: 7px 20px;
    text-transform: uppercase;
}
.feature .feature-box .iconset {
    background: #fff none repeat scroll 0 0;
    float: left;
    position: relative;
    width: 18%;
}
.feature .feature-box .iconset::after {
    background: #fdb801 none repeat scroll 0 0;
    content: "";
    height: 150%;
    left: 43%;
    position: absolute;
    top: 100%;
    width: 1px;
}

.feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}


.feature .feature-box .feature-content {
    float: left;
    padding-left: 28px;
    width: 78%;
}
.feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
}
.feature .feature-box .feature-content p {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
}
.icon {
    color : #f4b841;
    padding:0px;
    font-size:40px;
    border: 1px solid #fdb801;
    border-radius: 100px;
    color: #fdb801;
    font-size: 28px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    width: 70px;
}

      @import url('https://fonts.googleapis.com/css?family=Oswald|Raleway');
        .about-us {
            background: #f6f7f5;
        }

        .about-content {
            display: -ms-flexbox;
            display: flex;
            flex-direction: row;
            -ms-flex-direction: row;
        }

        .img-content {
            width: 50%;
            font-size: 0;
            line-height: 0;
            position: relative;
            letter-spacing: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50% 50%;
        }

        .img-content img {
            min-width: 100%;
            min-height: 100%;
            height: auto;
            object-fit: cover;
            width: 100%;
        }

        .text-block .title {
            max-width: 80%;
            font-family: 'Oswald', sans-serif;
            font-size: 3rem;
            color: #3b3b3b;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .text-block p {
            margin-bottom: 40px;
            font-size: 18px;
            font-family: 'Raleway', sans-serif;
        }

        .text-block {
            padding: 80px 80px 60px 90px;
            display: -ms-flexbox;
            display: flex;
            flex-direction: column;
            width: 50%;
            padding: 50px 40px;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-direction: column;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        @media only screen and (max-width: 767px) {
            .about-content {
                flex-direction: column;
                -ms-flex-direction: column;
            }
            .img-content {
                width: 100%;
            }
            .text-block {
                width: 100%;
            }

        }
        /* FontAwesome for working BootSnippet :> */

@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: lightblue !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}


.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

#contatti{
  background-color: #70c3be;
  letter-spacing: 2px;
  }
#contatti a{
  color: #fff;
  text-decoration: none;
}


@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 800px;}

   #contatti .maps iframe{
     width: 100%;
     height: 450px;
   }
 }

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}


#author a{
  color: #fff;
  text-decoration: none;
    
}

</style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!------ Include the above in your HEAD tag ---------->

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

<div class="aboutus-section" style="background-color:lightblue;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">Welcome to the dawn of a new digital era! We are thrilled to introduce Bluedit, a cutting-edge platform designed to redefine your online experience. With a fresh approach to design, functionality, and user engagement, Bluedit is not just a website; it's a gateway to innovation and connection.</p>
                        <p class="aboutus-text">As we open the doors to Bluedit, we invite you to join us in this exciting chapter of innovation, connectivity, and discovery. Whether you're a seasoned user or a newcomer, Bluedit promises to be an immersive and rewarding experience for all.</p>
                        <a class="aboutus-more" href="#">read more</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="http://themeinnovation.com/demo2/html/build-up/img/home1/about1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Work with heart</h4>
                                    <p>Passion-Driven Innovation:
                                        At the core of our work philosophy is a passion that fuels innovation. Each project is an opportunity to bring fresh ideas to life, to challenge conventions, and to craft solutions that go beyond expectations. Working with heart means infusing creativity into the mundane, turning routine into remarkable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Reliable services</h4>
                                    <p> Proactive Problem-Solving:
                                        Challenges are inevitable, but our proactive approach to problem-solving sets us apart. When unexpected issues arise, count on us to address them swiftly and effectively. Our reliability extends to being a solutions-driven partner, ensuring that obstacles don't hinder the seamless delivery of our services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Great support</h4>
                                    <p> Knowledgeable and Empathetic Team:
                                        Our support team is not just knowledgeable; they are empathetic listeners. We understand that each interaction is an opportunity to make a positive impact. Whether it's troubleshooting a problem or offering guidance, our team is dedicated to providing solutions with a human touch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Team -->
    <section id="team" style="height: 700px;" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">OUR TEAM</h5>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="xiangyang.jpeg" alt="card image"></p>
                                        <h4 class="card-title">Yap Xiang Yang</h4>
                                        <p class="card-text">I am a Diploma E commerce student at New Era University Collage</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Japanese cartoon</h4>
                                        <p class="card-text">1. Spirited Away - A Tale of Enchantment:
                                            Join Chihiro on a spellbinding adventure through the otherworldly bathhouse of "Spirited Away." Hayao Miyazaki's masterpiece unfolds like a dream, where courage and friendship navigate the mysterious spirit realm, leaving an indelible mark on the soul.
                                            
                                            
                                            In the bustling cityscape of UA High School, "My Hero Academia" paints a vibrant tapestry of superpowers, friendship, and the quest for heroism. Experience the electrifying journey of Izuku Midoriya as he discovers his own strength amidst a world of quirks.
                                            
                                           
                                            The colossal tale of "Attack on Titan" unfolds against a backdrop of towering walls and relentless Titans. As Eren Yeager and his comrades navigate a world on the brink of extinction, the narrative explores the essence of freedom, sacrifice, and the weight of destiny.
                                          </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="joshua.jpeg" alt="card image"></p>
                                        <h4 class="card-title">Joshua Wong Lok Bin</h4>
                                        <p class="card-text">I am a Diploma E commerce student at New Era University Collage</p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">FOODS</h4>
                                        <p class="card-text">Embark on a gastronomic adventure with a symphony of flavors that will tantalize your taste buds and transport you to culinary bliss. From the sizzling streets of Bangkok to the cozy cafes of Paris, each bite tells a tale of passion, tradition, and innovation.

                                            
                                            Indulge in the ethereal world of delicate eclairs, where each pastry is a canvas for divine fillings. Creamy pistachio, velvety chocolate, and zesty lemon unite in a dance of sweet perfection, leaving an unforgettable melody on your palate.
                                            
                                            
                                            Feel the fiery embrace of Sichuan cuisine as bold spices mingle with tender morsels of meat and crisp vegetables. The symphony of numbing Sichuan peppercorns and rich chili oil creates a culinary crescendo that is both thrilling and addictively flavorful.
                                            
                                        
                                            Slurp your way through a bowl of umami-rich ramen, where savory broth, springy noodles, and perfectly seasoned toppings unite in a harmonious celebration of Japanese culinary mastery. Each spoonful is a sonnet to the senses.
                                            
                                           
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="Tee Gai Yu.jpeg" alt="card image"></p>
                                        <h4 class="card-title">Tee Gai Yu</h4>
                                        <p class="card-text">I am a Diploma E commerce student at New Era University Collage<p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">HOBBIES</h4>
                                        <p class="card-text">In the hustle and bustle of this world, I always find a serene piece of sky, and my hobby is chasing the delight of the cosmos. As night falls, the scattered lights in the sky twinkle, as if the universe is narrating its story to me.

                                            I love leisurely lying on the grass, gazing up at the pitch-black night sky. The stars, poetic and picturesque, embellish the horizon, outlining an endless realm of imagination. Each star is a portal to an unknown world, a marvelous adventure waiting for me to explore.
                                            
                                            My telescope has become my closest companion, allowing me to observe those seemingly unreachable planets up close. The massive atmospheric bands of Jupiter, the splendid rings of Saturn, and even distant galaxies all reveal their infinite beauty through my lens.
                                            
                                            Chasing the stars is more than just looking up at the sky; it's a journey of the soul. When I stroll under the starlight, my thoughts soar through the vastness of the cosmos. </p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
    
            </div>
        </div>
    </section>
    <!-- Team -->
<div class="row" id="contatti" style="background-color:lightblue;">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACT US</h2>
        <form action="">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="FirstName" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="LastName" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" placeholder="Tel" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write Here!" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <div class="form-check">
                
              </div>
            </div>
            </div>
            <div class="col-12">
              <button class="btn btn-light" type="submit">Submit</button>
            </div>
          </div>
        </form>
        <div class="text-white">
        <h2 class="text-uppercase mt-4 font-weight-bold">Please Contact Us </h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+60) 123456789</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+60) 129876543</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href="">Taiko_info@gmail.com</a><br>
        <i class="fas fa-globe mt-3"></i> Blok B&C, Lot, 5, Seksyen 10, Jalan 000 Kajang, Selangor<br>
        <div class="my-4">
        <a href="https://www.facebook.com/newerauniversitycollege?mibextid=ZbWKwL"><i class="fab fa-facebook fa-3x pr-4" style="font-size: 50px;"></i></a>
        <a href="https://instagram.com/newerauc?igshid=NzZlODBkYWE4Ng=="><i class="fab fa-instagram" style="font-size: 50px;"></i></a>
        </div>
        </div>
      </div>

    </div>
</div>
</div>


</div>

<?php
include 'footer.php';
?>
</div>
</div>



