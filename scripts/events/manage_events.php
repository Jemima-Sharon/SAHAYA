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
    <title>Manage Events</title>
    <style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=email], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }      
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>
</head>
<body>
    <h4 class="adminloginhead text-center" >If you are admin, login here to manage events.</h4><hr>
    <br>
    <center> <h2> ADMIN LOGIN </h2> </center>   
    <form action="events.php">   
        <div class="container">   
            <label>Username : </label>   
            <input type="email" placeholder="Enter Username" name="username" value="dathrutva@gmail.com" oninvalid="setCustomValidity('Please enter valid username')" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" pattern="@[1-9]{3}" oninvalid="setCustomValidity('Please enter valid password')" required>  
            <button onclick="events.php" type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <button  type="button" class="cancelbtn"> Cancel</button>   
            <!--Forgot <a href="#"> password? </a>  -->
        </div>   
    </form>  
  
   <br><br>
   <footer>
    <p class="p-3 bg-dark text-white text-center">DATHRUTVA<br>@Kotaiah_Organization</p>
</footer>
</body>
</html>
