<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<section class="cash my-5">
<br>
  <h1 style="text-align:center">DONATE FINANCIALLY</h1>
  <br>
  <div>
  <h2 style="text-align:center">
  <img  src="images/cash1.jpg" width="900" height="350"  >
  </div>
<form action="userinfo.php" method="post">
   <div class="form-group">
	<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center"><b>Donate Now</b></h5>

                        <div class="form-label-group">
                            <label for="name">Name<span style="color: #FF0000">*</span></label>
                            <input type="text" name="user" class="form-control" placeholder="Enter your name" required autofocus>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="email">Mail ID<span style="color: #FF0000">*</span></label>
                            <input type="email" name="emailID"  class="form-control"  placeholder="Email address" required >
                        </div> <br/>
                        
                        <div class="form-label-group">
                        	<label for="mobile">Mobile Number<span style="color: #FF0000">*</span></label>
                            <input type="tel"  name="mobile" class="form-control" pattern="[1-9]{10}" oninvalid="setCustomValidity('Please enter valid format')" maxlength="10" placeholder="Enter your phone number" required>
                        </div><br/>                        
                        <div class="form-label-group">
                        	<label >Amount in INR<span style="color: #FF0000">*</span></label>
                            <input type="text"  name="amount" class="form-control"  placeholder="Enter the amount you want to donate" required>
                        </div><br/>
                        </div> <br/>
                        <button onclick="payment.php" type="submit" name="submit_button" class="btn btn-lg btn-primary btn-block text-uppercase" >DONATE</button>                    
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</section>
	<footer>
    <p class="p-3 bg-dark text-white text-center">DATHRUTVA<br>@Kotaiah_Organization</p>
</footer>
</body>
</html>