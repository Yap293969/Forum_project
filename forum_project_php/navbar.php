
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Professional Navigation Drawer</title>
<link rel="stylesheet" href="styles.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="07DquqDk"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="IXaqmzjl"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="9gOKuddq"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v18.0" nonce="A6Wplw0u"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<style>
  body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

#openDrawerButton{
  background: none;
  border: none;
  background-color: transparent;
  cursor: pointer;
  z-index: 3;
}

.menu-button {
  top: 20px;
  left: 20px;
  background: none;
  border: none;
  background-color: transparent;
  cursor: pointer;
  z-index: 3;
}

.bar {
  display: block;
  width: 25px;
  height: 3px;
  margin: 5px auto;
  background-color: #fff;
  transition: 0.3s;
}

.drawer {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.drawer ul {
  list-style-type: none;
  padding: 0;
  margin: 50px 0 0 0;
}

.drawer a {
  display: block;
  padding: 15px 20px;
  color: #333;
  text-decoration: none;
  transition: 0.3s;
}

.drawer a:hover {
  background-color: #f9f9f9;
}

.close-button {
  position: absolute;
  bottom: 20px;
  left: 20px;
  padding: 10px 20px;
  background-color: #333;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: 0.3s;
}

.close-button:hover {
  background-color: #555;
}
.navbar {
    background-color: #333;
    color: #fff;
    display: flex;
    height: 100px;
    justify-content: space-between;
  }
  .navbar h1 {
    margin: 20px;
    margin-left:700px;
  }
  .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            width: 250px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: lightblue;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
  @media (max-width: 768px) {
            .navbar h1 {
                margin-left: 50px; /* Adjusted for smaller screens */
            }

            .drawer {
                width: 80%; /* Adjusted width for smaller screens */
            }
        }

        @media (max-width: 480px) {
            .navbar h1 {
                margin-left: 40px; /* Further adjusted for even smaller screens */
            }

            .drawer {
                width: 100%; /* Drawer takes full width on smaller screens */
            }
        }

</style>
<body>

<div class="navbar" style="background-color: lightblue;">
  <h1>Bluedit</h1>
  <button id="openDrawerButton" class="menu-button">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</button>
</div>


<div id="myDrawer" class="drawer">
  <h2 style="margin-left: 60px; margin-top:20px;">Bluedit</h2>
  <ul>
    <li><a href="homepage.php">Home</a></li>
    <li><a href="about_forum.php">About</a></li>
    <li class="dropdown">
                <a href="#">Services &#9662;</a>
                <div class="dropdown-content">
                    <a href="careers.php">Careers</a>
                    <a href="#">Service 2</a>
                    <a href="#">Service 3</a>
                </div>
            </li>
            <li><a href="#">Contact</a></li>
  </ul>
  <button id="closeDrawerButton" class="close-button">Close</button>
</div>

<script>
  document.getElementById("openDrawerButton").addEventListener("click", function() {
  document.getElementById("myDrawer").style.width = "250px";
});

document.getElementById("closeDrawerButton").addEventListener("click", function() {
  document.getElementById("myDrawer").style.width = "0";
});

</script>

</body>
</html>
