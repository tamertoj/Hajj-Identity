<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html dir="rtl">
	
<head>
  <title>Sign-Up/Login Form</title>
  <?php include 'css/css.html'; ?>
  <style type="text/css">
    body{
      background-image: url(img/background.png);
      background-size: cover;
	  
    }
  </style>

</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">الدخول</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1 hidden>مرحباً بك </h1>
          
          <form action="" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
				
            </label>
            <input type="emailCon" required autocomplete="off" name="email" style="height:40px" placeholder="البريد الالكتروني"/>
          </div>
          
          <div class="field-wrap">
            <label>
            </label>
            <input type="password" required autocomplete="off" name="password" style="height:40px"/>
          </div>
          
          <p hidden="" class="forgot"><a href="forgot.php">نسيت كلمة المرور</a></p>
          
          <button class="button button-block" name="login" />تسجيل الدخول</button>
          
          </form>

        </div>
          
        <div id="signup">
          <p><img src="img/img_137283.png" alt=""  width="176" height="150"/></p>
          <h1>البحث بالباركود
			
			
			</h1>
          <form action="index.php" method="post" autocomplete="off">
          
          

          
          
          <div class="field-wrap">
            <label>
              <span class="req"></span>
            </label>
            <input type="text"/>
          </div>
          
          <button type="submit" class="button button-block" name="scan" />بحث</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
