<?php
session_save_path("_sessions");
session_start();
?>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<head  dir="rtl">
<title>Pilgrim ID</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
$barCodeTxt = $_GET['txt'];
echo $barCodeTxt;
?>
</head>
<body  dir="rtl">

<center> 
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">تسجيل الدخول</button><br>
 </center>

  <!-- Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><font color="orange"><h2> تسجيل الدخول </h2></font></center>
        </div>
        <div class="modal-body">
					 <!-- Sign-in Form-->
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<label><b>UserName</b></label><br>
					    <input id="login-input" type="text" name="username" autocomplete="off" maxlength="30" autofocus required><br>	
					
						<label><b>PassWord</b></label><br>
					    <input id="login-input" type="text" name="password" autocomplete="off" maxlength="30" autofocus required><br>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submitLogin" class="btn btn-primary">تسجيل الدخول</button>
					</form>
		  <button type="button" class="btn btn-danger" style="float:left;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
 <?php 
 if(isset($_POST['submitLogin'])  AND !empty($_POST['username']) AND !empty($_POST['password'])){
	 
	 require "connection.php";
	$users = mysqli_query($con, "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'");

	
	if($row = mysqli_fetch_array($users))
	 {  
			session_save_path("_sessions");
			 session_start();
			 $_SESSION['username']= $row['username'];
			 $_SESSION['password']= $row['password'];
			 $_SESSION['type']= $row['type'];
			 
			 header("Location: main.php");
	 }else{
		 echo "<center><b class='error-msg'> Username or Password is NOT correct!</b></center>";
	 }
	 
	 
	 
 }
 
 ?>


<center>
<img src="../resource/images/personal_photo_default.png" height="200" width="200" style="border-radius:50%;"></img>
<table style="width:100%; border:1px solid black;">
<tr>
<td>Name:</td><td> Basil Ahmad Almalki</td><td>(1070802002)</td>
</tr>
<tr>
<td>Gender</td><td>Male</td>
</tr>
<tr>
<td>Age</td><td> 27</td>
</tr>
<tr>
<td>Phone Number</td><td> 0534503779</td>
</tr>
<tr>
<td>Second Phone:</td><td> 0555680914</td>
</tr>
<tr>
<td>Email:</td><td> basil1411@gmail.com</td>
</tr>
</table>
</center>


</body>
</html>