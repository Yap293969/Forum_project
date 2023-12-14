<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
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
<nav class="navbar navbar blue" style="background-color: blue;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 50px; background-color:blue; align-items: center;" >
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
                
                    <input type="text" id="search-input" placeholder="Enter your search" style="width: 300px; height: 50px; border-radius: 10px; text-align: center;">
                    <button id="search-button" onclick="performSearch()" style="background-color: blue; border-style: none;"><i class="fa fa-search"></i></button>
                
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
