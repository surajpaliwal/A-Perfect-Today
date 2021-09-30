

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">


  <style>
    .menu{
    display: none;
         }
    .icon{
    display: none;
          }
    .nav-link{
    margin-right: 25px;
    margin-left: 25px;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,102,203, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
    }

    .navbar-brand{
      font-size: 1.65em;
      color:grey;
      text-shadow: 1px 1px 1px black;
    }
    li>a{
      text-align: center;
      font-size: 1.65em;
      color:grey;
      text-shadow: 1px 1px 1px black;
    }
    @media screen and (max-width:630px){
      .nav-link{
      margin-right: 15px;
      margin-left: 15px;
            }
      li>a{
        font-size: 1.35em;
        padding:12px 0px;
      }
    }
    @media screen and (max-width:576px) {
    .menu{  display: block;
            float:left;
            }
    .icon{  display: block;
            float:right;}
            
}
  </style>
</head>
<body>



<nav class="navbar navbar-expand-sm navbar-light mt-2" style="background: rgba(255,255,255,0.85);">
  
  <div class="menu">
      <a class="navbar-brand" href="#">Menu</a>
  </div>
  <div class="icon">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><strong><i class="fa fa-home"></i> Home</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php"><strong><i class="fa fa-id-badge"></i> About</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php"><strong><i class="fa fa-newspaper-o"></i> Blogs</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><strong><i class="fa fa-fw fa-envelope"></i> Contact</strong></a>
      </li>    
    </ul>
  </div>  
</nav>


</body>
</html>