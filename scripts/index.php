<?php  include 'header.php';?>
<?php  include 'menu.php';?>
<body background="blue">
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/kids-1.jpg"  width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/kids-5.jpg"  width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/kids-2.jpg"  width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/kids-3.jpg"  width="1100" height="500">
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
<div class="py-3">
<h1 font-size="30px" class="text-center"><b>WELCOME TO THE FAMILY!</b></h1>
<br><p>For more than 30 years, with the help of caring individuals and a lot of hard work, we wake up each day with the same goal: to bring as much love to as many children and old people as possible. </p>

<p>It’s not always easy, it comes with a long list of challenges to overcome… but we are doing it!<br> Lives are being changed and stories rewritten. We are excited to have you along for the ride. Take a look at our website! <br></p>
<p>So take a look around our website; meet the team, see what we do. We would love to get to know you more, learn about how you heard of our organization and also hear any thoughts or ideas that you might have. If you are interested in volunteering or donating, please click the appropriate buttons. We cannot do this work alone so we’re glad you’re here. Welcome to the family!</p>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="h2 text-center">ABOUT US</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/kids-4.jpg" class="img-fluid" aboutimg>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="sub display-5"> <br> A Family for Every Child in our Lifetime</h2>
        <p class="py-3">
         Our organization’s history is one of great adventures, overcoming huge odds and most importantly love. Non-profit organizations rarely have a story to tell like ours does; some might find parts of it hard to believe but we assure you, it is all truth.
        </p>
        <a href="about.php" class=" readmore"> Read More </a>
      </div>
    </div>
  </div>
</section>
	<section class="my-5">
		<div class="py-5">
			<h2 class="h21 text-center"><b>OUR SERVICES</b></h2>
		</div>
		<div class="initiatives container-fluid">
			<h3 class="sub"> Orphanage &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOldage Home</h3>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<div class="card" >
					  <img class="card-img-top" src="images/ourbeliefs4.jpg" >
					  <div class="card-body">

					    <h4 class="card-title">Ensuring every child has an opportunity to find home</h4>
					    <!--<p class="card-text">Some example text.</p>-->
					    <a href="ourservices.php" class="seemore">See More</a>
	  					</div>
					</div>
				</div>
			   <div class="col-lg-6 col-md-6 col-12">
					<div class="card" >
					  <img class="card-img-top" src="images/serv_oldage.jpg" height="407">
					      <div class="card-body">
					       <h4 class="card-title">Caring for seniors is perhaps the greatest responsibility we have</h4>
					         <!--<p class="card-text">Some example text.</p>-->
					         <a href="ourservices.php" class="seemore">See More</a>
	  					  </div>
					</div>
				 </div>
			</div>
		</div>
	</section>
<section class="my-5">
    <div class="py-5">
      <h2 class="h2 text-center">OUR GALLERY</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="gallery/gal1.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="gallery/gal8.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="gallery/gal6.jpg" class="img-fluid pb-4">
        </div>
        <a href="ourgallery.php"  class="viewmore"> View More </a>
	    </div>
    </div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="h21 text-center">DONATIONS</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/index_donate.jpg" class="img-fluid" aboutimg>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <p class="sub display-5"> <br> <b>Help us to change lives!</b></p>
        <p class="py-3">
         Donating your time and money to causes doesn’t just do good for others, it does good for you too.Your donation will have on-the-ground impact.
         Your support helps change an individual’s life for a better future.
        </p>
        <a href="donate.php" class="readmore"> Read More </a>
      </div>
    </div>
  </div>
</section>  
<footer>
	<p class="p-3 bg-dark text-white text-center">DATHRUTVA<br>@Kotaiah_Organization</p>
</footer>
</body>
