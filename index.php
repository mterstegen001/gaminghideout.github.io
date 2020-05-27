<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital@1&display=swap" rel="stylesheet">
</head>
<body>
  
  <!--Navigation Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#">
    <img src="images/logo.jpg" alt="logo" style="width:40px;">
  </a>
  <a class="navbar-brand" href="#">Gaming Hideout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="games.php">Games</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="contactus.php">Contact Us</a>
      </li>
     
      
    </ul>
    
  </div>
</nav>

<!--Carousel-->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/fifa.jpg" alt="FIFA 20" width="1100" height="500">
      <div class="carousel-caption">
        <h3>FIFA 20</h3>
        <p>Its in THE GAME!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/farcry.jpg" alt="Farcry 5" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Far Cry 5: Primal</h3>
        <p>It's your mission. With it comes the freedom to take on a world that hits back by any means necessary</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cod.jpg" alt="Call Of Duty" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Call Of Duty: WAR ZONE</h3>
        <p>Do u have, What it takes to be an elite soldier?</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--About us in main page-->

<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">About Us</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/logo.jpg" class="img-fluid aboutimg">
			</div>
		
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Gaming Hideout</h2>
				<p class="py-5">It is the ultimate destination for accessing games. It is the digital distribution platform with curatedselection of games. Play great PC games and connect with your friends, all in one place. G.Hideout is a digital distribution, digital rights management, multiplayer and communications service developed by Massive Entertainment to provide an experience similar to the achievements/trophies offered by various other game companies. The service is provided across various platforms. Gaming Hideout is used exclusively by first-party Ubisoft games, and although some third-party ones are sold through the Uplay store, they do not use the Uplay platform.</p>
				<a href="about.php" class="btn btn-success">Check more</a>
			</div>
		</div>
	</div>
</section>


<!--Contact us-->

<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">Contact Us</h1>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="User" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="Email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile no.</label>
				<input type="text" name="Mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comments">
					
				</textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</section>

<!--footer at the end-->

<footer>
	<p class="p-3 bg-dark text-white">@gaminghideoutdevelopers</p>
</footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>