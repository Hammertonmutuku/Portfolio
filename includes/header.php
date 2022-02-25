<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>hammertonMutuku</title>
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
        <a class="navbar-brand" href="index.php"> hammertonMutuku</a>
           <div class="d-none d-lg-inline navbar-nav ms-auto mynav">
                <a class="d-inline nav-item nav-link" href="about.php">About </a>
                <a class="d-inline nav-item nav-link" href="projects.php">My work</a>
                <a class="d-inline nav-item nav-link" href="contact.php">Contact</a>
            </div>
        <!-- nav bar on phones -->
        <div class = "nav2 d-lg-none">
            <div class="menu-btn"></div>
	        <div class="overlay"></div>
            <div class="menu-container">
                <ul class="menu-wrapper">
                <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="menu-underlay"></div> 
            </div>
        </div>
    </nav>
    <div class="container">