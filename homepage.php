<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p class="styled-paragraph"style="font-size:50px; font-weight:bold;">
       Hello Welcomee <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstname'].' '.$row['lastname'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php" class="nav-link">Logout</a>
      <a href="index.html" class="nav-link">Go Home</a>
       <style>
         .nav-link {
            display: inline-block; 
            margin: 10px; 
            padding: 12px 25px; 
            text-decoration: none; 
            color: white; 
            background-color: #6e5494; 
            border-radius: 25px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-size: 16px;
            font-weight: bold;
        }

        .nav-link:hover {
            background-color: #5a4378; 
            transform: translateY(-2px);
        }

        .nav-link:active {
            background-color: #4e3a66; 
            transform: translateY(0);
        }
        .styled-paragraph {
            font-size: 50px; 
            font-weight: bold;
            color: black; /* Teksti i bardhë */
            margin: 20px 0;
            padding: 20px;
            animation: bounce 1s infinite alternate; /* Animacioni i shpërthimit */
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-10px);
            }
        }
       </style>

    </div>
</body>
</html>