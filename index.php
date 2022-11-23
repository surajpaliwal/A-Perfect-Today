<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Perfect Today - Home</title>

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="website.css" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     

</head>

<body>

    <div class="brand">A Perfect Today</div>
    <div class="address-bar">let's start something unique</div>

	<?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>

	
    <!-- Navigation -->
    <?php require_once 'navi.php'; ?>

    <div class="container mt-3">
        <div class="box">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <h2 class="intro-text text-center">Home-
                        <strong>A Perfect Today</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-12 text-center">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                          </ul>

                          <!-- The slideshow -->
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="web/web-dev/1.jpeg"  class="full img-border" alt="Web-Development">
                            </div>
                            <div class="carousel-item">
                              <img src="web/front/5.jpg" class="full img-border" alt="Front-end-Development">
                            </div>
                            <div class="carousel-item">
                              <img src="web/back/7.png" style="height: 350px;" class="full img-border" alt="Back-end-Development">
                            </div>
                            <div class="carousel-item">
                              <img src="web/full/2.jpg" class="full img-border" alt="Full-Stack-Development">
                            </div>
                          </div>

                          <!-- Left and right controls -->
                          <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>

                        </div>
                    <div class="brand-name mt-2">
                       Welcome to
                    </div>
                    <div class="address-name">A Perfect Today</div>
                    <hr>
                    <div class="brand-name">
                        <small>By
                            <strong>Suraj Paliwal</strong>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">

                <div class="row">
                    <div class="col-md-12">
                        <hr>
                        <div class="intro-text text-center">How To Make A Perfect Start In The Feild of
                            <br><strong>Web Development</strong>
                        </div>
                        <hr>
                    </div>
                </div>    
                <p>     

                <div class="row">
                    <div class="col-md-4 text-center">
                            <img class=" img-border img-full" style="height: 250px;" src="web/web-dev/4.jpg" alt="">
                    </div>

                    <div class="col-md-8 text-left">
                        <p>So, you’re interested in learning web development and becoming a web developer? First of all, congratulations. You’ve made a great choice.<br><br>
                        So depending on your background, you might be wondering where to start learning web development. If you’ve mainly been Googling around, you may feel just a tad bit overwhelmed by all the languages, frameworks, and learning resources out there.<br>
                        Well, don’t worry. You’re not alone. Google can be your best friend or your worst enemy. It just depends on how you use it.</p>
                    </div>
                </div>
                <br>
    					
                <div class="row">
                    <div class="col-md-8 text-left">
                        <p><strong>Start with the end in mind.</strong><br>
                        One of the first things I recommend doing when starting out learning web development is to decide upon a clear end goal, and keep it in mind.<br>

                        Maybe you want to make a career change. Maybe you have a wicked idea for an app. Or maybe you just want to learn for fun.<br>
                        
                        Whatever your goal, it’s important to understand why you are doing this. This understanding will help you be more productive with your learning time. It will also help encourage you through those times when you feel like giving up.<br>

                        Remember, no matter how elaborate and far away the end goal may seem now, you can achieve it with hard work and perseverance.<br><br></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img class=" img-border img-full" style="height: 250px;" src="web/web-dev/10.jpg" alt="">
                    </div>                        
                </div>
                <br>
    			<p>Assuming you have no previous experience, it’s a good idea in the beginning to also decide if your interest lies in back end or front end development. Let me briefly explain the difference.<br><br></p>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img class="img-border img-full" style="height: 140px;" src="web/front/7.jpg" alt="">
                    </div>
                    <div class="col-md-8 text-left">
                        <p><strong>Frontend</strong> — this is what the end user see’s and interacts with on the page. Its all the design, fancy effects, layout and imagery that creates the user experience.<br>

                        Generally front end developers will be visual creatives with excellent design skills and a passion for accessibility and user experience. Technologies often associated with front end web development are HTML, CSS, jQuery and JavaScript.<br></p>
                    </div>
                </div>
                <br>
                        
    			<div class="row">
                    <div class="col-md-8 text-left">
                        <p><strong>Backend</strong> — this is the part that typically processes, stores, and manipulates data. It’s how the website or application works. Back-end developers are generally good problem solvers, logical thinkers who are interested in the functionality of a website or application. Back-end development is usually associated with server side languages such as PHP, Python, and Ruby.<br>
                        It focuses on databases, scripting, website architecture. It contains behind-the-scene activities that occur when performing any action on a website. It can be an account login or making a purchase from an online store. Code written by back-end developers helps browsers to communicate with database information.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img class=" img-border img-full" style="height: 160px;" src="web/back/4.jpg" alt="">
                    </div>                        
                </div>
                <br>

                <p>I knew right from the off that I just didn’t have that flair for visual design that draws many developers to front-end development. I probably found this decision easier than most as, due to my background in engineering and construction. I am naturally more akin to problem solving, and figuring out how things work, than making things look pretty!<br></p>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <img class=" img-border full" style="height: 250px;" src="web/web-dev/3.jpg"  alt="">
                    </div>
                </div>

                <p>Either way, wherever your interest lies, I still think that the best place to start is by learning some basic HTML and CSS. After all, it doesn’t matter what area of development that you ultimately want to work in, you still need to be able to display it on a webpage in some kind of mildly presentable form.<br><br>
                For access to unlimited content you must register! Registration is free. <a href="register.php">Click here to get started!</a>
                </p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Copyright &copy; A Perfect Today</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
