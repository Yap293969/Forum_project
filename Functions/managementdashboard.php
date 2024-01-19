<?php



function getMembers() {
    
    $servername = "your_server_name";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM members";
    $result = $conn->query($sql);

    
    if ($result->num_rows > 0) {
        
        while ($row = $result->fetch_assoc()) {
            $members[] = $row;
        }
        return $members;
    } else {
        
        return [];
    }

    
    $conn->close();
}
?>
