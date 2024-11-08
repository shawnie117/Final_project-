<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    <video  autoplay muted loop plays-inline    class="backvideo">
        <source src="brain.mov"   type="video/mp4">
    </video>
    <div class="Button">
        <a href="Introduction to AI.html"  class="leftbutton1">
            <span>Introduction to AI</span>
        </a>
        <a href="Evolution of AI.html"  class="leftbutton2">
            <span>Evolution of AI</span>   
        </a>
        <a href="AI in Everyday Life.html" class="rightbutton1">
            <span>AI in Everyday Life</span>
        </a>
        <a href="Future of AI.html"  class="rightbutton2">
            <span>Future of AI</span>
            
        </a>
    </div>
</body>
</html>