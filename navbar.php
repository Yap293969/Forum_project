<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Professional Navigation Drawer</title>
<link rel="stylesheet" href="styles.css">
</head>
<style>
  body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

.menu-button {
  position: fixed;
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
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
  }
  .navbar h1 {
    margin: 20px;
    margin-left:600px;
  }

</style>
<body>

<div class="navbar" style="background-color: lightblue;">
  <h1>My Website</h1>
  <button id="openDrawerButton" class="menu-button">
  <span class="bar"></span>
  <span class="bar"></span>
  <span class="bar"></span>
</button>
</div>


<div id="myDrawer" class="drawer">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
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
