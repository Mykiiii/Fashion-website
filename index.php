<!DOCTYPE html>
<html>
<head>
    <title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>

<?php include'menu.php'; ?>
  
  
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/i16.jpg" alt="Los Angeles" width="100%" height="600">
      <div class="carousel-caption">
        <h3><b>Recycled</b></h3>
        <p>Change of face!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/i17.jpg" alt="Chicago" width="100%" height="600">
      <div class="carousel-caption">
        <h3>Upcycled</h3>
        <p>Changing it for better!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/i3.jpg" alt="New York" width="100%" height="600">
      <div class="carousel-caption">
        <h3>Reused</h3>
        <p>Long Life!</p>
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
  
  <section class="my-5">
      <div class="py-5">
	     <h2 class="text-center"><b>Our Story</b></h2>
	  </div>
	  <div class="container-fluid">
	    <div class="row">
	        <div class="col-lg-6 col-md-6 col-12">
		        <img src="images/i6.jpg" class="img-fluid aboutimg">
	        </div>
			<div class="col-lg-6 col-md-6 col-12">
			<br>
			<br>
			<br>
			<br>
			<br>
		    <h2 class="display-5"><b>We are Reclaimed Wood</b></h2> 
			<p class="py-3"><i>'One man's trash is another man's treasure'</i> started as a passion to reduce waste yet still be fashionable. We decided to take charge and create a brand that was not only high fashion but also environmentally considerate.</p>
			<a href="about.php" class="btn btn-success"><b>Check more</b></a>
	        </div>
	    </div>
      </div>
  </section>
  
  
  <section class="my-5">
      <div class="py-5">
	     <h2 class="text-center"><b>Our Products</b></h2>
	  </div>
	  <div class="container-fluid"> 
	      <div class="row">
		 <div class="col-ld-6 col-md-4 col-12">
			  <div class="card">
		  <img class="card-img-top" src="images/i11.jpg" alt="Card image">
			<div class="card-body">
			  <h4 class="card-title"><b>Clothing</b></h4>
			  <p class="card-text">Recycled & Upcycled</p>
			  <a href="products.php" class="btn btn-primary"><b>See More</b></a>
			</div>
</div>
			  </div>
			  
			   <div class="col-ld-4 col-md-4 col-12">
			  <div class="card">
		  <img class="card-img-top" src="images/i8.jpg" alt="Card image">
			<div class="card-body">
			  <h4 class="card-title"><b>Footwear</b></h4>
			  <p class="card-text">Recycled & Upcycled</p>
			  <a href="products.php" class="btn btn-primary"><b>See More</b></a>
			</div>
</div>
			  </div>
			  
			   <div class="col-ld-4 col-md-4 col-12">
			  <div class="card">
		  <img class="card-img-top" src="images/i9.jpg" alt="Card image">
			<div class="card-body">
			  <h4 class="card-title"><b>Accessories</b></h4>
			  <p class="card-text">Recycled and Upcycled</p>
			  <a href="products.php" class="btn btn-primary"><b>See More</b></a>
			</div>
</div>
			  </div>
		  </div>
	  </div>
	  
  </section>
  
   
  <section class="my-5">
      <div class="py-4">
	     <h2 class="text-center"><b>Gallery</b></h2>
	  </div>
	
	<div class="container-fluid">
	    <div class="row">
		    <div class="col-lg-4 col-md-4 col-12">
			   <img src="images/i12.jpg" class-"img-fluid pb-4">
			</div>
					    <div class="col-lg-4 col-md-4 col-12">
			   <img src="images/i12.jpg" class-"img-fluid pb-4">
			</div>
					    <div class="col-lg-4 col-md-4 col-12">
			   <img src="images/i12.jpg" class-"img-fluid pb-4">
			</div>		    
		</div>
	</div>
	
  </section>
 
  
  <section class="my-5">
      <div class="py-4">
	     <h2 class="text-center"><b>Review</b></h2>
	  </div>
	  
	  <div class="w-50 m-auto">
	      <form action="userinfo.php" method="post">
		      <div class="form-group">
			      <label><b>Username</b></label>
				  <input type="text" name="user" autocomplete="off" class="form-control">
			  </div>
			  <div class="form-group">
			      <label><b>Email Id</b></label>
				  <input type="text" name="email" autocomplete="off" class="form-control">
			  </div>
			  <div class="form-group">
			      <label><b>Mobile</b></label>
				  <input type="text" name="mobile" autocomplete="off" class="form-control">
			  </div>
			  <div class="form-group">
			      <label><b>Comment</b></label>
				  <textarea class="form-control" name="comment">
				  </textarea>
			  </div>
			  <button type="submit" class="btn btn-success"><b>Submit</b></button>
		  </form>
	  </div>
	  
  </section>
  
  
  <footer>
     <p class="p-3 bg-dark text-white text-center">@reclaimedwood</p>
  </footer>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>