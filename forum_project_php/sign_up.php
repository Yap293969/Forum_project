<?php
class SignUp
{
    private $username;
    private $email;
    private $password;
    private $confirm_password;

    public function __construct($username, $email, $password, $confirm_password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
    }

    public function validateForm()
    {
        $errors = [];

        // Example validation criteria
        if (empty($this->username)) {
            $errors[] = 'Username is required.';
        }

        if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Valid email address is required.';
        }

        if (empty($this->password) || strlen($this->password) < 8) {
            $errors[] = 'Password must be at least 8 characters long.';
        }

        if ($this->password !== $this->confirm_password) {
            $errors[] = 'Passwords do not match.';
        }

        if (!empty($errors)) {
            return 'Validation failed: ' . implode(', ', $errors);
        }

        return null; // No validation errors
    }

    public function signUp()
    {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
    
        // Establish a database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "forum_project_database";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Generate a username (you may adjust this logic based on your requirements)
        $username = strtolower($this->username . '_');
    
        // Get the selected birth date values
        $selectedMonth = $_POST['month'];
        $selectedDay = $_POST['day'];
        $selectedYear = $_POST['year'];
    
        // Combine the selected values into a date string (you may adjust the format)
        $dateOfBirth = "$selectedYear-$selectedMonth-$selectedDay";
    
        // Example SQL query (Note: Use prepared statements to prevent SQL injection)
        $sql = "INSERT INTO sign_up (username, email, password, date_of_birth) VALUES (?, ?, ?, ?)";

        // Insert into log_in table for checking if the username and password are valid or not
        $loginSql = "INSERT INTO log_in (username, password) VALUES (?, ?)";
    
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $this->username, $this->email, $hashedPassword, $dateOfBirth);

        $loginStmt = $conn->prepare($loginSql);
        $loginStmt->bind_param("ss", $this->username, $hashedPassword);
    

        if ($stmt->execute()) {
            // Display a success message or confirmation
            echo 'Sign up successful! Redirecting to login page...';
    
            // Insert login information into log_in table
            if ($loginStmt->execute()) {
                echo 'Login information stored successfully!';
            } else {
                echo 'Error storing login information: ' . $loginStmt->error;
            }
    
            // Redirect to login page after a short delay
            header("refresh:3;url=log_in.php");
        } else {
            // Check if the error is due to a duplicate entry
            if ($stmt->errno == 1062) {
                echo 'Username or email already exists. Please choose a different one.';
            } else {
                // Handle other errors
                echo 'Error: ' . $stmt->error;
            }
        }
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Check if the user has accepted cookies
    if (!isset($_POST['accept_cookies']) || $_POST['accept_cookies'] != 1) {
        echo 'Please accept the use of cookies.';
        // You may redirect the user back to the form or handle it as needed
        exit;
    }

    $requiredFields = ['username', 'email', 'password', 'confirm_password'];
    $emptyFields = [];

    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $emptyFields[] = $field;
        }
    }

    if (!empty($emptyFields)) {
        echo 'Please fill in all required fields: ' . implode(', ', $emptyFields);
        // You may redirect the user back to the form or handle it as needed
        exit;
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $signUp = new SignUp($username, $email, $password, $confirm_password);

    $validationResult = $signUp->validateForm();

    if ($validationResult) {
        echo $validationResult;
    } else {
        $successMessage = $signUp->signUp();
        // You can choose to include this echo or not based on your needs
        // echo $successMessage;
    }
}
?>


<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container" id="wrap">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
    <form action="" method="post" accept-charset="utf-8" class="form" role="form" name="signupForm">
        <legend>Sign Up</legend>
        <h4>Fill in the information to register an account</h4>
        <input type="text" name="username" value="" class="form-control input-lg" placeholder="Username" />
        <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" />
        <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" />
        <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" />
        <label>Birth Date</label>
        <div class="row">
          <div class="col-xs-4 col-md-4">
          <select name="month" class="form-control input-lg">
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>                        
</div>
    <div class="col-xs-4 col-md-4">
        <select name="day" class="form-control input-lg">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>                        
    </div>
        <div class="col-xs-4 col-md-4">
            <select name="year" class="form-control input-lg">
<option value="1935">1935</option>
<option value="1936">1936</option>
<option value="1937">1937</option>
<option value="1938">1938</option>
<option value="1939">1939</option>
<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2013">2014</option>
</select>                        
</div>
</div>
<br/>
<label>
<input type="checkbox" name="accept_cookies" value="1"> Accept the use of cookies
</label>
<p>Already have an account?<a href="log_in.php">Log In here</a>.</p>
<button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="submit">Create my account</button>
</form>
</div>
</div>
</div>

</body>
</html>
