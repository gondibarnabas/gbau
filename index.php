
<?

$yourEmail = 'info@wstudio.hu';

if(isset($_POST['submitted'])) { 
    //Check to make sure that the name field is not empty
    if($_POST['contact_name'] === '') { 
            $hasError = true;
    } else {
            $name = $_POST['contact_name'];
    }

    //Check to make sure sure that a valid email address is submitted
    if($_POST['contact_email'] === '')  { 
            $hasError = true;
    } else if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST['contact_email'])) {
            $hasError = true;
    } else {
            $email = $_POST['contact_email'];
    }

    //Check to make sure comments were entered	
    if($_POST['contact_textarea'] === '') {
            $hasError = true;
    } else {
            if(function_exists('stripslashes')) {
                    $comments = stripslashes($_POST['contact_textarea']);
            } else {
                    $comments = $_POST['contact_textarea'];
            }
    }

    //If there is no error, send the email
    if(!isset($hasError)) {

            $emailTo = $yourEmail;
            $subject = "Üzenet a Websiteról";
            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
            $headers = 'From : my site <'.$emailTo.'>' . "\r\n" . 'answer to : ' . $email;

            mail($emailTo, $subject, $body, $headers);

            $emailSent = true; 
    }
    
}
?>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Fehér Gbau Kft.</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    
    <link href='http://fonts.googleapis.com/css?family=OpenSans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/bootstrap.js"></script>
   <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
	    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#"><b>Fehér Gbau Kft</b></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#home" class="smothscroll">Home</a></li>
	            <li><a href="#desc" class="smothscroll">Tevékenység</a></li>
	            <li><a href="#contact" class="smothscroll">Elérhetőség</a></li>
	            <!--<li><a href="#showcase" class="smothScroll">Showcase</a></li>
	            <li><a href="#contact" class="smothScroll">Contact</a></li>  -->
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>


	<section id="home" name="home"></section>
	<div id="headerwrap">
	    <div class="container">
	    	<div class="row centered">
	    		<div class="col-lg-12">
	    			<br>
	    			<br><br><br>
	    			<br>
	    			<hr style="color:yellow;">
	    			<br>
					<h1 class="text-info">FEHÉR GBAU KFT </h1>
					<h3 style="color:white;">Építőipar, Ács és tető munka</h3>
					<br>
	    		</div>
	    		
	    		
	    		<div class="col-lg-12">
	    			<<br>
	    			<hr>
	    			<br>
	    			<br>
	    			<br>
	    			<br>
	    			<br>
	    			<br>
	    			<br>
	    		</div>
	    		s
	    		</div>
	    	</div>
	    </div> <!--/ .container -->
	</div><!--/ #headerwrap -->


	 


	<section id="desc" name="desc"></section>
	<!-- INTRO WRAP -->
	<div id="intro">
		<div class="container">
			<div class="row centered">
				<h1>Tevékenység</h1>
				<br>
				<br>
				<div class="col-lg-4">
					<img class="img-responsive center-block" src="assets/img/intro01.png" alt="">
					<h3>Gépi földmunka</h3>
					<p> - </p>
				</div>
				<div class="col-lg-4">
					<img class="img-responsive center-block" src="assets/img/intro02.png" alt="">
					<h3>Fűnyirás, kaszálás</h3>
					<p>  - </p>
				</div>
				<div class="col-lg-4">
					<img class="img-responsive center-block" src="assets/img/intro03.png" alt="">
					<h3>Alapásás, csőfektetés</h3>
					<p>  - </p>
				</div>
				
				<br>
				<hr>
				<br>
				
				<div class="col-lg-4">
					<img class="img-responsive center-block" src="assets/img/intro04.png" alt="">
					<h3>Földszállítás</h3>
					<p> - </p>
				</div>
				<div class="col-lg-4">
					<img class="img-responsive center-block" src="assets/img/intro05.png" alt="">
					<h3>Tereprendezés. Istállótakarítás</h3>
					<p> - </p>
				</div>
				<div class="col-lg-4">
					<img class="img-responsive center-block"src="assets/img/intro06.png" alt="">
					<h3>Ingatlanközvetítés</h3>
					<p> - </p>
				</div>
				
			</div>
			<br>
			<hr>
	    </div> <!--/ .container -->
	</div><!--/ #introwrap -->
	
	<!-- FEATURES WRAP -->
	
<section id="donation" class="section section-image" style="background-image: url('assets/img/parallax2.jpg');">
				<div class="section-content center">
				<br><br><br><br>
					<!-- parallax -->
					
				</div>
	</section>

	<section id="contact" name="contact">
			
	</section>
	<div id="footerwrap">
		<div class="container">
			<div class="col-lg-5">
			
				<h3>Elérhetőség:</h3>
				<p>
				Tinódi u. 27<br/>
				Egyházaskozár,<br/>
				7347<br/>
				06 30 380 58 77
				</p>
			</div>
			
			<div class="col-lg-7">
				<h3>Üzenet küldés</h3>
				<br>
				<form role="form" action="index.php" method="post" enctype="plain"> 
				  <div class="form-group">
				    <label for="name1">Az ön neve:</label>
				    <input type="name" name="contact_name" class="form-control" id="name1" placeholder="Név">
				  </div>
				  <div class="form-group">
				    <label for="email1">Email cím:</label>
				    <input type="email" name="contact_email" class="form-control" id="email" placeholder="Email">
				  </div>
				  <div class="form-group">
				  	<label>Üzenet:</label>
				  	<textarea class="form-control" name="contact_textarea" rows="3"></textarea>
				  </div>
				  <br>
				  <button type="submit" class="btn btn-large btn-success">Elküldés</button>
				</form>
			</div>
		</div>
	</div>
	<div id="c">
		<div class="container text-center">
			<p>Készítette: <a href="http://wstudio.hu">wStudio</a></p>
		
		</div>
	</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
	<script>
	$('.carousel').carousel({
	  interval: 3500
	})
	</script>
  </body>
</html>
