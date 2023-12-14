<!DOCTYPE html>
<html>
    <title>

    </title>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!------ Include the above in your HEAD tag ---------->

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                crossorigin="anonymous">
                
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script src="suggestions.js"></script>

        <link rel="stylesheet" href="CSS/banningmanager.css">
    </head>   

    <style>
    </style>
    
    <body>
        <nav class="navbar navbar light-blue" style="background-color: #3498db;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 50px; background-color:#3498db; align-items: center;" >
                <div class="container-fluid" style="margin-left: 200px;">
                <a class="navbar-brand" href="#" style="color: lightblue;">Bluedit</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style= margin:10px; >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"  style="text-align: center;">
                    <li class="nav-item" style="margin: 5px;">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #fff;">Home</a>
                    </li>
                    <li class="nav-item" style="margin: 5px;">
                        <a class="nav-link" href="#" style="color: #fff;">Popular</a>
                    </li>
                    <li class="nav-item" style="margin: 5px;">
                        <a class="nav-link" href="#" style="color: #fff;">Blog</a>
                    </li>
                    <li class="nav-item" style="margin: 5px;">
                        <a class="nav-link" href="#" style="color: #fff;">Advertise</a>
                    </li>
                    <li class="dropdown" style="padding: 8px; margin: 5px;">
                        <a href="#" class="dropbtn" style="color: #fff;">About</a>
                        <div class="dropdown-content">
                            <a href="#">About Careers</a>
                            <a href="#">About Forum</a>
                        </div>
                    </li>
                    <li class="nav-item" style="margin: 5px;">
                        <a class="nav-link" href="#" style="color: #fff;">Careers</a>
                    </li>
                        
                    <div id="search-container" style="margin-left: 250px;">
                        
                            <input type="text" id="search-input" placeholder="Enter your search" style="width: 300px; height: 50px; border-radius: 10px;">
                            <button id="search-button" onclick="performSearch()" style="background-color: #3498db; border-style: none;"><i class="fa fa-search"></i></button>
                        
                    </div>
                    
                        <script>
                            function performSearch() {
                                // Get the search query from the input field
                                var searchQuery = document.getElementById('search-input').value;
                    
                                // Redirect to Google with the search query
                                window.location.href = 'https://www.google.com/search?q=' + encodeURIComponent(searchQuery);
                            }
                        </script>
                    </ul>
                
                        
                </div>
                </div>
            </nav>
            </nav>


            <div class="container-fluid gedf-wrapper">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="h5">Edit Members</div>
                                <div class="h7 text-muted">Community Host: JoTaRo</div>
                                <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Java, and
                                    etc.
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="h6 text-muted">Community Members</div>
                                    <div class="h5">20,101 peoples</div>
                                </li>
                                <li class="list-group-item">
                                    <div class="h6 text-muted">Active Member</div>
                                    <div class="h5">6758 peoples</div>
                                </li>
                                <li class="list-group-item">More details......</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 gedf-main">

                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">add Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                        <div class="form-group">
                                            <label class="sr-only" for="message">post</label>
                                            <textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Upload image</label>
                                            </div>
                                        </div>
                                        <div class="py-4"></div>
                                    </div>
                                </div>
                                <div class="btn-toolbar justify-content-between">
                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary">share</button>
                                    </div>
                                    <div class="btn-group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-globe"></i> Public
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                            <script>
                                                function toggleDropdown() {
                                                    var dropdownContent = document.getElementById("dropdown-menu");
                                                    dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
                                                    function displayContent(service) {
                                                    var resultContainer = document.getElementById("result");
                                                    resultContainer.innerHTML = "<p>You selected: " + service + "</p>";
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post /////-->

                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">@LeeCross</div>
                                            <div class="h7 text-muted">Miracles Lee Cross</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <div class="h6 dropdown-header">Configuration</div>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Hide</a>
                                                <a class="dropdown-item" href="#">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                                <a class="card-link" href="https://www.thestar.com.my/news/nation/2023/11/20/j-kom-vacancy-lokman-adam-or-iswardy-morni-as-possible-agus-replacements">
                                    <h5 class="card-title">J-Kom Vacancy: Lokman Adam or Iswardy Morni as possible Agus replacements?</h5>
                                </a>

                                <p class="card-text">
                                    SHAH ALAM: Ummo Supreme Council Member Datuk Lokman Noor Adam and Pro-Keadilan Sarawak Chairman Iswardy Morni are among the two names mentioned as potential replacements for Datuk Dr Mohammad Agus Yusoff as the new Community Communications Department (J-Kom) director-general.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                                <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                            </div>
                        </div>
                        <!-- Post /////-->


                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">@Mike</div>
                                            <div class="h7 text-muted">Mike</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <div class="h6 dropdown-header">Configuration</div>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Hide</a>
                                                <a class="dropdown-item" href="#">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> 10 min ago</div>
                                <a class="card-link" href="https://www.thestar.com.my/news/nation/2023/11/20/altantuyas-father-shocked-over-decision-to-release-sirul-from-detention">
                                    <h5 class="card-title"> Altantuya’s father shocked over decision to release Sirul from detention</h5>
                                </a>

                                <p class="card-text">
                                    KUALA LUMPUR: The father of murdered Mongolian model-translator Altantuya Shaariibuu has cried foul over the release of former Malaysian policeman Sirul Azhar Umar from a detention centre by the Australian government.
                                </p>
                                <div>
                                    <span class="badge badge-primary">Using algorithms to check fraud</span>
                                    <span class="badge badge-primary">Malaysian student in Taiwan dies after scuffle</span>
                                    <span class="badge badge-primary">‘Training’ dragon fruits for a record</span>
                                    <span class="badge badge-primary">Terengganu MB denies using state funds for Kemaman polls</span>
                                    <span class="badge badge-primary">Dr Zaliha: Anti-smoking Bill will be tabled</span>
                                    <span class="badge badge-primary">Call for more action to address vaping in schools</span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                                <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                            </div>
                        </div>
                        <!-- Post /////-->


                        <!--- \\\\\\\Post-->
                        <div class="card gedf-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="mr-2">
                                            <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                        </div>
                                        <div class="ml-2">
                                            <div class="h5 m-0">Jason</div>
                                            <div class="h7 text-muted">Jason Ng</div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                <div class="h6 dropdown-header">Configuration</div>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Hide</a>
                                                <a class="dropdown-item" href="#">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
                                <a class="card-link" href="https://www.thestar.com.my/news/nation/2023/11/20/the-coffin-maker-and-things-that-go-bump-in-the-night">
                                    <h5 class="card-title">The coffin maker and things that go bump in the night</h5>
                                </a>

                                <p class="card-text">
                                    A MAN recently shared on TikTok a “mystical encounter” that he said he experienced eight years ago in Alor Setar, Kedah, Harian Metro reported.
                                    <a href=https://www.thestar.com.my/news/nation/2023/11/20/the-coffin-maker-and-things-that-go-bump-in-the-night target="_blank">https://www.thestar.com.my/news/nation/2023/11/20/the-coffin-maker-and-things-that-go-bump-in-the-night</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                                <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                                <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                            </div>
                        </div>
                        <!-- Post /////-->



                    </div>
                    <div class="col-md-3">
                        <div class="card gedf-card">
                            <div class="card-body">
                                <h5 class="card-title">Semenyih Community</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Lets Talks</h6>
                                <p class="card-text">Everything About Semenyih</p>
                                <a href="#" class="card-link">Join Now!</a>
                                <a href="#" class="card-link">See Group Details</a>
                            </div>
                        </div>
                        <div class="card gedf-card">
                                <div class="card-body">
                                    <h5 class="card-title">LOL Community</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Game Start!</h6>
                                    <p class="card-text">Share some games experience or posting somethings</p>
                                    <a href="#" class="card-link">Join Now!</a>
                                    <a href="#" class="card-link">See Group Details</a>
                                </div>
                            </div>
                    </div>
                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <!------ Include the above in your HEAD tag ---------->
                    
                    <!-- Footer -->
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
