<?php
class AuthManager {
    private $db;

    public function __construct() {
        // Establish a database connection
        $this->db = new mysqli("localhost", "root", "", "forum_project_database");

        // Check the connection
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function login($username, $password) {
        // Sanitize input (to prevent SQL injection)
        $username = $this->db->real_escape_string($username);

        // Use prepared statement to prevent SQL injection
        $stmt = $this->db->prepare("SELECT * FROM log_in WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();

        // Check if a matching user is found
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Redirect to homepage.php on successful login
                header('Location: homepage.php');
                exit();
            }
        }

        // Authentication failed, you may redirect to a login error page
        echo "Please enter the correct username or password!";
    }
}

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['loginButton'])) {
    // Perform server-side authentication
    $authManager = new AuthManager();
    $username = $_POST['email'];
    $password = $_POST['password'];
    $authManager->login($username, $password);
}
?>


<!DOCTYPE html>

<html>

<head>
    <title>Log In</title>
</head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    <div class="container" id="wrap">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login via site</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                </label>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" name="loginButton" value="Login">
                        </fieldset>
                    </form>
                    <hr/>
                    <p>New to blueddit? <a href="sign_up.php">Sign up here.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
