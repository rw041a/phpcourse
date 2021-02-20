
<?php include("variables.php"); ?>
//downlaod xampp in C:xampp the files are in xampp/htdocs/course/index.php, etc.
/ on IE type http://localhost/course/index.php and it launches the index file
//getbootstap.com to put in templat and navbar
//git bash  Terminal for the windows window to launch the web page
//to create an ssh key - create a direcory called mkdir .ssh
//they typed ssh-keygen.exec  I didn't put in a passcode. just kept hitting enter and it created a key. 2 files id_rsa and id_rsa.pub
//the id_rsa.pub is used in git hub
// initializing git on the Git terminal window from git bash on my laptop
//$ git config --global user.name "Your Name"
//2.$ git config --global user.email "you@youraddress.com"
//3.$ git config --global push.default matching
//4.$ git config --global alias.co checkout
//5.$ git init


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br/>
		<?php include("navbar.php"); ?>
		
	<div class="container">
	<div class="jumbotron">
		<h1 class="display-4">Welcome to guitar world!"</h1>
		<p class="lead">This is a simple hero unit, a simple jumobtron-style component for calling extra attention to featured content or infomration.</p>
		<hr class-"my-4">
		<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		<a class="btn btn-primay btn-lg" href="#" role="button">Learn more</a>
	</div>
	<center>
	<?php
      // installed git bash. go to start menu and type in git
		  include ("footer.php");
	?>; 
		 
	 </center>
	<br/>
	 
		<?php   ?>
	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>

 