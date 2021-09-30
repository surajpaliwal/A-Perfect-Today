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
                    
                    <div class="topic">Html</div>
                    <img class="img-responsive img-border full" src="web/html/12.jpg" alt="">
                    <p>HTML stands for Hyper Text Markup Language.</p>                  
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                
                    <div class="topic">Css</div>
                    <img class="img-responsive img-border full" src="web/css/6.png" alt="">
                    <p>CSS stands for Cascading Style Sheets. </p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">Javascript</div>
                    <img class="img-responsive img-border full" src="web/js/1.png" alt="">
                    <p>JavaScript is a lightweight, interpreted programming language.</p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">Bootstrap</div>
                    <img class="img-responsive img-border full" src="web/boot/3.png" alt="">
                    <p>Bootstrap is the popular HTML, CSS and JavaScript framework for developing a responsive and mobile friendly website.</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal4">Read More</button>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                 
                    <div class="topic">jQuery</div>
                    <img class="img-responsive img-border full" src="web/jquery/9.jpg" alt="">
                    <p>jQuery is a lightweight, "write less, do more", JavaScript library.</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal5">Read More</button>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                 
                    <div class="topic">React.js</div>
                    <img class="img-responsive img-border full" src="web/react/1.png" alt="">
                    <p>ReactJS is JavaScript library used for building reusable UI components.</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal6">Read More</button>
                    <hr>
                </div>

                <div class="col-lg-12 ">
                   <a href="blog.php" class="left btn btn-sm btn-info">&larr; Older</a>
                   <a href="blog3.php" class="right btn btn-sm btn-info">Newer &rarr;</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- HTML Modal  -->
    <?php require_once 'modal/html.php'; ?>

	<!-- CSS Modal  -->
    <?php require_once 'modal/css.php'; ?>

    <!-- Javascript Modal  -->
    <?php require_once 'modal/javascript.php'; ?>

    <!-- Bootstrap Modal  -->
    <?php require_once 'modal/bootstrap.php'; ?>

    <!-- jQuery Modal  -->
    <?php require_once 'modal/jquery.php'; ?>

    <!-- react.js Modal  -->
    <?php require_once 'modal/react.php'; ?>
	
	
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
