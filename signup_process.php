<?php
if(isset($_POST['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = ""; // Consider setting a password for better security
    $dbname = "jobs_management";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO jobs_details (fullname, email_address, phonenumber, job_optional, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $email_address, $phonenumber, $job_optional, $hashed_password);

    // Hash the password
    $hashed_password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    // Assign values from $_POST
    $full_name = $_POST['full_name'];
    $email_address = $_POST['email_address'];
    $phonenumber = $_POST['phonenumber'];
    $job_optional = $_POST['job_optional'];

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
