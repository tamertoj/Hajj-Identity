<!DOCTYPE html>
 <html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>هاكاثون الحج</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Animated Content Tabs with CSS3" />
        <meta name="keywords" content="tabs, css3, transition, checked, pseudo-class, label, css-only, sibling combinator" />
        <meta name="author" content="Codrops"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
    body{
      background-image: url(images/background.png);
      background-size: cover;
      
    }
  </style>
</style>
	</head>
    <body dir="rtl">
	
	
	
     <header>   <!-- رأس الصفحة -->
        <ul>
			<li><a href="home.php">اسم المستخدم : تامر أحمد [ مدير عام ]  </a>
            <li style="float:left;"><a></a></li><li style="float:left;"><a></a></li><li style="float:left;"><a></a></li>			  
	<li class="dropdown" style="float:left;">
	
    <a href="javascript:void(0)" class="dropbtn">القائمة</a>
    <div class="dropdown-content">
      <a href="#">الملف الشخصي</a>
      <a href="../vieDatabase/ADD.php" >إضافة مستخدم</a>
	  <a href="../../logout.php">تسجيل خروج</a>
    </div>
    </li>
  		</ul>
			</header>

    <br><br>

	


	
       <!-- قلب الصفحة -->
                <section>
	            <div class="form">
      
      <div class="tab-content">

         <div id="adduser">   
          <h1>إضافة مستخدم </h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="field-wrap">
            <label>
             اسم المستخدم<span class="req"></span>
            </label>
            <input type="text" required autocomplete="off" name="password"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              كلمة المرور<span class="req"></span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
              البريد الإلكتروني<span class="req"></span>
            </label>
            <input type="text" required autocomplete="off" name="password"/>
          </div>
		  
		  <div class="field-wrap">
            <label>
             الصورة الشخصية<span class="req"></span>
            </label>
            <input type="file" required autocomplete="off" name="password"/>
          </div>
          
          <BR>
          <button class="button button-block" name="adduser" />إضافة مستخدم</button>
          
          </form>

        </div> 
        
      </div><!-- tab-content -->
      
</div> 
                     </section>
<br><br><br><br><br><br><br>

  <footer>   <!-- قدم الصفحة -->
  
            
  
  </footer>

    </body>
</html>
