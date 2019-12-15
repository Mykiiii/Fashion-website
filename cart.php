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
 <section class="my-5">
      <div class="py-4">
	     <h2 class="text-center"><b>Proceed to Buy</b></h2>
	  </div>
	  
	  <div class="w-50 m-auto">
	      <form action="cartinfo.php" method="POST">
		      <div class="form-group">
			      <label><b>Name</b></label>
				  <input type="text" name="name" autocomplete="off" class="form-control">
			  </div>
			  <div class="form-group">
			      <label><b>Mobile Number</b></label>
				  <input type="text" name="mobile" autocomplete="off" class="form-control">
			  </div>
			  <div class="form-group">
			      <label><b>Address</b></label>
				  <input type="text" name="address" autocomplete="off" class="form-control">
			  </div>
			  <div class="form-group">
			      <label><b>Product</b></label><br>
				  
				   <select name="dropdown">
	  <option value="Deep V Neck Dress"> Deep V Neck Dress </option>
	    <option value="Kaftan Dress"> Kaftan Dress</option>
		<option value="Kaftan Dress">Handkerchief Dress</option>
		  <option value="Dungaree"> Dungaree Set</option>
		  <option value="Kaftan Dress"> Tie and Dye</option>
		  <option value="Kaftan Dress"> Lehiriya</option>
		  <option value="Kaftan Dress"> Hairband</option>
		  <option value="Kaftan Dress">Srunchies</option>
		  <option value="Kaftan Dress"> Shoes</option>
		  <option value="Kaftan Dress"> Boots</option>
		  <option value="Kaftan Dress"> Jute Bag</option>
		  <option value="Kaftan Dress"> Tote Bag</option>
		  </select>
		  <br>
		  <br>
	  <div class="form-group">
			      <label><b>Mode of Payement</b></label><br>
				 
				  
	  <input type="radio" name="Mode of payment" value="COD">&nbspCOD<br>
	  <input type="radio" name="Mode of payment" value="Debit/Credit Card">&nbspDebit/Credit Card<br>
	  <input type="radio" name="Mode of payment" value="Paytm">&nbspPaytm<br>
	  <input type="radio" name="Mode of payment" value="UPI">&nbspUPI<br>
	  <br>
		
			  <a href="Hurray.php" class="btn btn-success"><b>Submit</b></a>
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