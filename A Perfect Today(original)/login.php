<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A Perfect Today- Login</title>

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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
	<!-- Script -->
	<script type="text/javascript">
        		$(document).ready(function(){
			
			   $("#login").click(function(){
				
					email=$("#email").val();
					password=$("#password").val();
					 $.ajax({
						type: "POST",
						url: "pcheck.php",
						data: "email="+email+"&password="+password,
						success: function(html){
						  if(html=='true')
						  {
							  
							  $("#add_err2").html('<div class="alert alert-success"> \
													<strong>Authenticated</strong> \ \
												</div>');

							window.location.href = "blog.php";
						  
						  } else if (html=='false') {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Authentication</strong> failure. \ \
												</div>');
								
						  
						  } else {
								$("#add_err2").html('<div class="alert alert-danger"> \
													<strong>Error</strong> processing request. Please try again. \ \
												</div>');
						  }
						},
						beforeSend:function()
						{
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                    <strong>Loading...</strong> \ \
                                                </div>');
						}
					});
					 return false;
				});
});
    </script>

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
                    
					<div class="alert alert-danger">
					<strong>You must be logged in to view the blog.</strong>
					</div>

					
					<hr>
                    <h2 class="intro-text text-center">
                        <strong>Login</strong>
                    </h2>
					<div id="add_err2"></div>
                    <hr>       
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="35" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" id="password" name="password" maxlength="20" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="login" class="btn btn-sm btn-dark"><i class="fa fa-fw fa-user"></i>Login</button>
                            </div>
                        </div>
                    </form>
					
					<div class="form-group col-lg-12">
						<a href="register.php"><button type="submit" class="btn btn-sm btn-dark">Not a Member? Register here</button></a>
					</div>

					
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; A Perfect Today</p>
                </div>
            </div>
        </div>
    </footer>

 
</body>

</html>
