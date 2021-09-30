<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Perfect Today - Blog</title>

    

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="website.css" >
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

</head>

<body>

    <div class="brand">A Perfect Today</div>
    <div class="address-bar">let's start something unique</div>


    <!-- Navigation -->
    <?php require_once 'navi.php'; ?>

    <div class="container mt-3">
        <div class="box">
            <div class="row">
            
                <div class="col-lg-12">
				
				
				
                    <hr>
                    <h2 class="intro-text text-center">Blog-
                        <strong>A Perfect Today</strong>
                    </h2>
                    <div class="welcome">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></div>
                    <hr>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    
                    <div class="topic">Web Developer</div>
                    <img class="img-responsive img-border full" src="web/web-dev/12.jpg" alt="">
                    <p>Web developers are at the forefront of the Internet age.</p>                  
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                
                    <div class="topic">Front-End Developer</div>
                    <img class="img-responsive img-border full" src="web/front/12.jpg" alt="">
                    <p>Front-end web development is the practice of converting data to a graphical interface, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that data.</p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#front">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">Back-End Developer </div>
                    <img class="img-responsive img-border full" src="web/back/16.jpg" alt="">
                    <p>Back-end Development refers to the server-side development.</p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#back">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">Full Stack Development</div>
                    <img class="img-responsive img-border full" src="web/full/3.png" alt="">
                    <p>It refers to the development of both front end(client side) and back end(server side) portions of web application.</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#full">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 ">
                   <a href="blog3.php" class="left btn btn-sm btn-info">&larr; Older</a>
                   <a href="blog2.php" class="right btn btn-sm btn-info">Newer &rarr;</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Modal 1 -->
    <?php require_once 'modal/web.php'; ?>

	<!-- Modal 2 -->
    <?php require_once 'modal/front.php'; ?>
	
	<!-- Modal 3 -->
    <?php require_once 'modal/back.php'; ?>
	
    <!-- Modal 4 -->
    <?php require_once 'modal/full.php'; ?>

	
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;A Perfect Today</p>
                </div>
            </div>
        </div>
    </footer>

    

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>
