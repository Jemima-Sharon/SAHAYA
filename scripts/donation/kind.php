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
<body><br><br>
  <section class="kind">
	<form action="kindinfo.php" method="post">
		 <div class="kind form-group">
	     <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-12">
              <img src="images/kind4.jpg" class="img-fluid pb-4" height="900"><br><br>
                <p> If you are willing to help materialistically i.e.,by donating food on any occasion, donating clothes, blankets, stationery etc.. you are always welcomed to visit us any time.  </p>
                 <a href="contactus.php" class="btn btn-success" align="center"> Our Address</a>
            </div>
             <div class="col-lg-6 col-md-6 col-12" >
               <img src="images/kind.jpg" class="img-fluid pb-4">
             </div>     
 <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
            <h5 class="card-title text-center"><b>Kindly enter your details</b></h5>
                 <div class="form-label-group">
                  <label for="name">Name<span style="color: #FF0000">*</span></label>
                   <input type="text" name="user" class="form-control" placeholder="Enter your name" required autofocus>
                  </div> <br/>
                  <div class="form-label-group">
                      <label for="email">Mail ID<span style="color: #FF0000">*</span></label>
                       <input type="email" name="emailID"  class="form-control" placeholder="Email address" required>
                  </div> <br/>
                  <div class="form-label-group">
                     <label for="mobile">Mobile Number<span style="color: #FF0000">*</span></label>
                        <input type="tel"  name="mobile" class="form-control" pattern="[1-9]{10}" oninvalid="setCustomValidity('Please enter valid format')" maxlength="10" placeholder="Enter your phone number" required>
                  </div><br/>
                    <div class="form-label-group">
                      <label> What you want to donate?<span style="color: #FF0000">*</span></label>    <textarea class="form-control" name="kind" placeholder="Enter the things you want to donate" required></textarea>
                     </div> <br>
                     <div class="form-label-group">
                         <label for="date">When you want to visit our organization?<br></label>
                           <input type="date" id="date" name="date">
                     </div><br/>
            </div>
                  <button onclick="success.php" type="submit" name="submit_button" class="btn btn-lg btn-primary btn-block text-uppercase" >SUBMIT</button>
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