<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>User Management</title>
</head>
<body>

<?php
include 'navbar.php';
?>

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-xs-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class="col-xs-7">
                        <a href="AddMember.php" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>						
            <th>Joined Date</th>
            <th>Role</th>
            <th>Status</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody> <!-- Open tbody here -->
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_forum_website";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $query_userlist = "SELECT * FROM communities_management_dashboard";  
        $result = $conn->query($query_userlist);

        if($result == true){
            while($data = $result->fetch_assoc()){
        ?>
                <tr>
                    <td><?php echo $data['username']; ?> </td>
                    <td><?php echo $data['user_join_date']; ?> </td>
                    <td><?php echo $data['user_role']; ?> </td>
                    <td><?php echo $data['user_status']; ?> </td>
                    <td class="text-center">
                        <a href="UpdateMember.php?id=<?php echo $data['user_id']; ?>" class="btn btn-info">UPDATE USER INFO</a>
                        <a href="?id=<?php echo $data['user_id']; ?>" class="btn btn-danger">DELETE USER</a>
                    </td>
                </tr>
        <?php

            }
        }
        if(isset($_GET['id'])){
            $query_delete="delete from communities_management_dashboard where user_id =" .$_GET['id'];

            if($conn->query($query_delete) === TRUE){
                
            }else{
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
        }
    ?>
    
</table>

<div class="clearfix">
    <ul class="pagination">
        <li class="page-item disabled"><a href="#">Previous</a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link">Next</a></li>
    </ul>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<?php
include 'footer.php';
?>
</body>
</html>