
	<!-- bootstrap Modal  -->
	<div id="modal5" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-xl ">

		<!-- Modal content-->
		<div class="modal-content box2">
		  <div class="modal-body">
		  	<div class="title">jQuery</div>

		  	<div class="box mt-3">
		  		<hr>
		  		<div class="heading">What is jQuery?</div>
		  		<hr>
		  		<div class="row">
				  	<div class="col-lg-12 text-center">
					  	<img class=" img-border full" src="web/jquery/2.jpeg" alt="">
					</div>
				</div>
		  		<p>
		  		jQuery is a lightweight, <strong>"write less, do more"</strong>, JavaScript library.<br><br>
				The purpose of jQuery is to make it much easier to use JavaScript on your website.<br>
				jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code.<br>
				jQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation.

				<div class="row">
				  	<div class="col-lg-6 text-center">
					  	The jQuery library contains the following features:
						<ul>
							<li>HTML/DOM manipulation</li>
							<li>CSS manipulation</li>
							<li>HTML event methods</li>
							<li>Effects and animations</li>
							<li>AJAX</li>
							<li>Utilities</li>
						</ul>
					</div>
					<div class="col-lg-6 text-center">
					  	<div id="demo" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                            <li data-target="#demo" data-slide-to="3"></li>
                            <li data-target="#demo" data-slide-to="4"></li>
                          </ul>

                          <!-- The slideshow -->
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="web/jquery/3.png"  class="img-full img-border" alt="Los Angeles">
                            </div>
                            <div class="carousel-item">
                              <img src="web/jquery/4.png" class="img-full img-border" alt="Chicago">
                            </div>
                            <div class="carousel-item">
                              <img src="web/jquery/5.png" class="img-full img-border" alt="New York">
                            </div>
                            <div class="carousel-item">
                              <img src="web/jquery/6.png" class="img-full img-border" alt="New York">
                            </div>
                            <div class="carousel-item">
                              <img src="web/jquery/8.jpg" class="img-full img-border" alt="New York">
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


					</div>

				</div>
		  		</p>
		  	</div>

		  	<div class="box mt-3">
		  		<hr>
		  		<div class="heading">Why jQuery?</div>
		  		<hr>
		  		<p>There are lots of other JavaScript libraries out there, but jQuery is probably the most popular, and also the most extendable.<br>
				Many of the biggest companies on the Web use jQuery, such as:
				<div class="row">
				  	<div class="col-lg-6 text-center">
					  	<img class="img-full" style="height: 200px; " src="web/jquery/10.png" alt="">
					</div>
					<div class="col-lg-6 text-left">
					  	<ul sytle="list-style-type:disc;">
							<li>Google</li>
							<li>Microsoft</li>
							<li>IBM</li>
							<li>Netflix</li>
					</ul>
					</div>
				</div>
					
		  		</p>
		  	</div>

		  	<div class="box mt-3">
				<hr>
		  		<div class="heading">Adding jQuery to Your Web Pages</div>
		  		<hr>
		  		<p>
				There are several ways to start using jQuery on your web site. You can:<br><br>

				<ol style="list-style-type: 1;">
					<li>Download the jQuery library from jQuery.com</li>
					<li>Include jQuery from a CDN, like Google</li>
				</ol>
				</p>

				<p class="center"><strong >Downloading jQuery</strong><br></p>
				<div class="row">
					<div class="col-lg-6 text-left">
					  	<p>

						There are two versions of jQuery available for downloading:
						<ul>
							<li><strong>Production version</strong> - this is for your live website because it has been minified and compressed</li>
							<li><strong>Development version</strong> - this is for testing and development (uncompressed and readable code)</li>
						</ul>

						Both versions can be downloaded from <a href="http://jquery.com/download/">jQuery.com</a>.<br>
						<br>brary is a single JavaScript file, and you reference it with the HTML script tag (notice that t
						The jQuery lihe "script" tag should be inside the "head" section)
						</p>
					</div>
				  	<div class="col-lg-6 text-center">
					  	<img class=" img-border img-full" src="web/jquery/7.png" alt="">
					</div>
				</div>
				
				<p class="center"><strong >jQuery CDN</strong><br></p>
				<p>If you don't want to download and host jQuery yourself, you can include it from a CDN (Content Delivery Network).</p>
				<p> src=<strong>"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"</strong> </p>
				<br><br><br>
				<p><strong>One big advantage of using the hosted jQuery from Google:</strong><br>
				Many users already have downloaded jQuery from Google when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.</p>
			</div>
				
		  </div>
		
		  <footer>
		        <div class="container">
		            <div class="row">
		                <div class="col-lg-12">
		                    <button type="button" class="btn btn-info btn-sm right m-3" data-dismiss="modal">Close</button>
						</div>
		            </div>
		        </div>
		  </footer>
		</div>

	  </div>
	</div>
	