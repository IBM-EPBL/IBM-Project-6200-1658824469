<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="static/reg.css">
    <link rel="stylesheet" type="text/css" href="static/top.css">
    <script >
function check(x)
{
    
   var number=/^([0-9]{10})+$/;
    if(x.value.match(number)){
        alert("Valid email address!");
        document.myform.mon.focus();
        return true;

    }
    else{
        alert("Please enter only your 10 digit mobile number");
        document.myform.mon.focus();
        return false;
    }
}
function ValidateEmail(input) {

var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

if (input.value.match(validRegex)) {

//alert("Valid email address!");

document.myform.email.focus();

return true;

} else {

alert("Invalid email address!");

document.myform.email.focus();

return false;

}
}
    </script>
</head>
<body>
    <div id="menu">
      
        <ul>
           <li><a href='home.html'>HOME</a></li>
          <li><a href='about.html'>ABOUT</a></li>
          <li><a href='procedure.html'>PROCEDURE</a></li>
          <li><a href='http://localhost:5000/predict'>PREDICTION</a></li>
          <li><a href='contact page.html'>CONTACT</a></li>
          <li><a href='ratings.html'>RATING</a>
          <li><a href='login.php'>LOGIN</a>
          <ul>
            <li><a href="login.php">USER LOGIN</a>
            <li><a href="bank login.php">BANK LOGIN</a>
         </ul>
          </li>
        </ul>
   </div>
   <br><br>
    <div class="container">

        <form name="myform" action="database/register1.php" method="post" class="form-signup" onsubmit="return check(document.myform.mon)">
            <h1 class="reg">Register</h1>
            <p>Create your account</p>
            <?php if(isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
       <?php echo $_GET['error']; ?> 
      </div>
      <?php }?> 
      
      <?php if(isset($_GET['success'])){ ?>
    <div class="alert alert-success" role="alert">
       <?php echo $_GET['success']; ?> 
      </div>
      <?php }?> 
            <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Enter your name" required >
             </div>
             <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your emailID" required  onsubmit ="return ValidateEmail(document.myform.email)">
            </div>
            <div class="form-group">
                <input type="user name" class="form-control" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" name="mobileno" placeholder="Enter your mobile number" required  >
            </div>
            <div class="form-group">
                <label>
                <input type="checkbox">
                I accept the <a href="#">Terms of use</a> & <a href="">Privacy policy</a>
                </label>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="" value="REGISTER">
            <p>Already registered?<a href="login.php">Login</a> </p>
        </form>
    </div>
</div>
</body>
</html>