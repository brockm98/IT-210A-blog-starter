<?php 
    // TODO: Start our PHP session for us
    session_start();

    // TODO: Make SQL query
    // Read variables and create connection
    $mysql_servername = getenv("MYSQL_SERVERNAME");
    $mysql_user = getenv("MYSQL_USER");
    $mysql_password = getenv("MYSQL_PASSWORD");
    $mysql_database = getenv("MYSQL_DATABASE");
    $conn = new mysqli($mysql_servername, $mysql_user, $mysql_password, $mysql_database);

    // Query String
    $query_string = "SELECT * FROM photos";
    $result = $conn->query($query_string);
    // foreach($result as $item) {
    //     echo "{$item["image_url"]} <br>";
    // }

    // TODO: Build HTML for carosuel item
    function build_html_for_carousel_item($item) {

    }

    //Close the connection
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Carousel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Bootstrap  Nav Bar-->
    <nav class="navbar navbar-dark">
            <a class="navbar-brand">Photos Carousel</a>
    </nav>

    <!-- Create div container by typing div.container -->
    <div class="container">
        <div id="carousel" class="carousel slide" data-ride="carousel">

            <!-- Add indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <!-- Show photos -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.s8PT9-ttHJKzL_tosqWHegHaE8%26pid%3DApi&f=1" alt="First slide">
                    
                    <!-- Sub captions -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BYU Campus</h5>
                        <p>Beautiful Drone Shot</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fmediad.publicbroadcasting.net%2Fp%2Fupr%2Ffiles%2Fstyles%2Fmedium%2Fpublic%2F201807%2FBYU-the-world-is-your-campus-copy.jpg&f=1&nofb=1" alt="Second slide">
                    
                    <!-- Sub captions -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>BYU Sign</h5>
                        <p>The famous sign that all freshmen take pictures at on the first week of school</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FO9p6jJbLWWA%2Fmaxresdefault.jpg&f=1&nofb=1" alt="Third slide">
                    
                    <!-- Captions -->
                    <div class="carousel-caption d-none d-md-block">
                        <h5>LaVell Edwards Stadium</h5>
                        <p>College Football's Most Picturesque Stadium</p>
                    </div>
                </div>
            </div>

            <!-- a tags for controls -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  
    </div>

    <!-- JavaScript Libraries for Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>