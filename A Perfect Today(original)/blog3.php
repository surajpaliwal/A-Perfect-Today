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
                    
                    <div class="topic">Java</div>
                    <img class="img-responsive img-border full" src="web/java/3.jpg" alt="">
                    <p>Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.</p>                  
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                
                    <div class="topic">Pyhton</div>
                    <img class="img-responsive img-border full" src="web/python/7.jpg" alt="">
                    <p>Python is a general-purpose interpreted, interactive, object-oriented, and high-level programming language. </p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">MySQL</div>
                    <img class="img-responsive img-border full" src="web/mysql/1.jpg" alt="">
                    <p>MySQL is a relational database management system based on the Structured Query Language, which is the popular language for accessing and managing the records in the database.</p>
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">.Net</div>
                    <img class="img-responsive img-border full" src="web/net/1.jpg" alt="">
                    <p>ASP.NET is a web application framework developed and marketed by Microsoft to allow programmers to build dynamic web sites. </p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal4">Read More</button>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                 
                    <div class="topic">MongoDB</div>
                    <img class="img-responsive img-border full" src="web/mongo/6.jpg" alt="">
                    <p>MongoDB is a document-oriented NoSQL database used for high-volume data storage.</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal5">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                 
                    <div class="topic">PHP</div>
                    <img class="img-responsive img-border full" src="web/php/1.png" alt="">
                    <p>PHP is an acronym for "PHP: Hypertext Preprocessor"</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal6">Read More</button>
                    <hr>
                </div>

                <div class="col-lg-12 text-center">
                 
                    <div class="topic">Node.js</div>
                    <img class="img-responsive img-border full" src="web/node/4.jpg" alt="">
                    <p>Node.js is a cross-platform environment and library for running JavaScript applications which is used to create networking and server-side applications.</p>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal7">Read More</button>
                    <hr>
                </div>

                <div class="col-lg-12 ">
                   <a href="blog2.php" class="left btn btn-sm btn-info">&larr; Older</a>
                   <a href="blog.php" class="right btn btn-sm btn-info">Newer &rarr;</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- java Modal  -->
    <?php require_once 'modal/java.php'; ?>

	<!-- pthon Modal  -->
    <?php require_once 'modal/python.php'; ?>

    <!-- Javascript Modal  -->
    <?php require_once 'modal/mysql.php'; ?>

    <!-- Bootstrap Modal  -->
    <?php require_once 'modal/net.php'; ?>

    <!-- jQuery Modal  -->
    <?php require_once 'modal/mongodb.php'; ?>

    <!-- jQuery Modal  -->
    <?php require_once 'modal/php.php'; ?>

    <!-- jQuery Modal  -->
    <?php require_once 'modal/node.php'; ?>
	
	
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
