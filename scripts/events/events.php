<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Events</title>
</head>
<body>
<section class="manageevents"><hr>
<h4 class="eventshead text-center" >On special occassions/events, mails are sent from the organization <br>to the registered donors for the benefit of orphans and oldsters.</h4><hr>
	<form action="eventinfo.php" method="post">
   <div class="form-group">
<div class="container">
    <div class="row">

        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="eventform card-body">
                    <h5 class="card-title text-center"><b>MANAGE EVENTS</b></h5>
                    
                        <div class="form-label-group">
                            <label for="inputEmail">From <span style="color: #FF0000">*</span></label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="dathrutva@gmail.com" readonly required autofocus>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">To <span style="color: #FF0000">*</span></label>
                            <input type="text" name="toEmail" id="toEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div> <br/>
                        <label for="inputPassword">Event Name<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" id="event" name="event" class="form-control" placeholder="Event" required>
                        </div><br/>
                        <label for="inputPassword">Message <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control" placeholder="Message" required ></textarea>
                        </div> <br/>
                    </div>
                        <button onclick="eventmail_success.php" type="submit" name="sendMailBtn" class="eventsendmail" >SEND MAIL</button>                  
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
