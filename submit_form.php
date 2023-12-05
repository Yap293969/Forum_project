<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];
                $recipient_email = $_POST["recipient_email"];
            
                $to = "zhengkaiyou090@gmail.com"; // Replace with your email address
                $subject = "New Form Submission";
                $headers = "From: $email";
            
                // Mail body
                $body = "Name: $name\nEmail: $email\nMessage:\n$message";
            
                // Send email
                mail($recipient_email, $subject, $body, $headers);
            
                // Redirect to a thank you page
                header("Location: about_careers.html");
                exit;
            }
            ?>