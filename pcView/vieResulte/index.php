<?php
	$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$db = 'test6';
//$mysqli = mysqli_connect($host,$user,$pass);
//$connect = mysql_connect($DB_HOST, $DB_USER, $DB_PASS);
$emailVar='';
$connect = mysql_connect($DB_HOST, $DB_USER, $DB_PASS);
mysql_select_db($db);
?>
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
<meta content="text/html" charset="utf-8" />

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
<?php
	$hidethis = 'hidden';
	if(isset($_POST['PersonReqID']) && !empty($_POST['PersonReqID'])){
		$bseDatalist = array();
		$hidethis = '';
		$perID = $_POST['PersonReqID'];
		//$bseDataQury = "SELECT * FROM `perID` WHERE `reqID`='$perID'";
		$bseDataQury = "SELECT * FROM `perID` WHERE `reqID`='".$perID."'";
		$bseDataQury = mysql_query($bseDataQury);
		if (! $bseDataQury){
			echo ('Database error: ' . mysql_error());
		}
		while ( $raw = mysql_fetch_assoc($bseDataQury)){
			$bseDatalist[] = $raw;
		}
		if(!empty($bseDatalist)){
			$perName =  $bseDatalist[0]['fullName'];
			$perjawal =  $bseDatalist[0]['phoneNum'];
			$perJawz =  $bseDatalist[0]['passportNum'];
			$perNachonalty =  $bseDatalist[0]['nationalty'];	
			$perGlender =  $bseDatalist[0]['gender'];
			$perAge =  $bseDatalist[0]['age'];			
		}
		if(empty($bseDatalist)){
			$hidethis = 'hidden';
		}
	}
?>
    <br><br><aside>  <!-- العمود الجانبي -->
    <form>
	<div <?php echo $hidethis; ?> class="card">
    <img src="images/te1.png" style="width:100%">
    <h3><b>المعلومات الشخصية</b></h3>
	
				<table>
	            <tr>
                <td>الاسم</td>
                <td><strong><?php echo $perName?></strong></td>
                </tr>
				</table>
				
				<table>
	            <tr>
                <td>رقم الجوال</td>
                <td><strong><?php echo $perjawal?></strong></td>
                </tr>
				</table>
				
				<table>
	            <tr>
                <td>رقم جواز السفر</td>
                <td><strong><?php echo $perJawz?></strong></td>
                </tr>
				</table>
				
				<table>
	            <tr>
                <td>الجنسية</td>
                <td><strong><?php echo $perNachonalty?></strong></td>
                </tr>
				</table>
				
				<table>
	            <tr>
                <td>الجنس</td>
                <td><strong><?php echo $perGlender?></strong></td>
                </tr>
				</table>
				
				<table>
	            <tr>
                <td>العمر</td>
                <td><strong><?php echo $perAge?></strong></td>
                </tr>
				</table>

    <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
    </div>
    <p><button>تعديل</button></p>
    </div>
	</form>
  
    </aside>

	


	
       <!-- قلب الصفحة -->
                <section class="tabs" <?php echo $hidethis; ?> >
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked"/>
		        <label for="tab-1" class="tab-label-1">معلومات طبية</label>

	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2"/>
		        <label for="tab-2" class="tab-label-2">معلومات الحملة</label>
		
	            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3"/>
		        <label for="tab-3" class="tab-label-3">معلومات مالية </label>
				
				<input id="tab-4" type="radio" name="radio-set" class="tab-selector-4"/>
		        <label for="tab-4" class="tab-label-4"> المفقودات </label>
            
			    <div class="clear-shadow"></div>
				
				
				<!-- المعلومات الصحية -->
		        <div class="content">
			        <div class="content-1">
                 <br><p><button>تعديل</button></p><br>
				    <table>
                 <tr>
                <td>فصيلة الدم</td>
                <td>0</td>
                </tr>
                 <tr>
                <td>الطول</td>
                <td>0</td>
                </tr>
                 <tr>
                 <td>الوزن</td>
               <td>0</td>
               </tr>
                <tr>
               <td>الحالة الصحية</td>
               <td>0</td>
               </tr>
               <tr>
                <td>الحساسية ضد الأدوية</td>
                 <td>0</td>
                </tr>
                <tr>
                <td>أمراض مزمنة</td>
                <td>0</td>
                 </tr>
                <tr>
               <td>ملاحظات صحية</td>
                  <td>0</td>
              </tr>
              <tr>
              <td>الأدوية المستخدمة</td>
              <td>0</td>
               </tr>
                 </table>
					</div>
					
					<!-- الحملة -->
			        <div class="content-2"> 
					<br><p><button>تعديل</button></p><br>					
                    <table>

                 <tr>
                <td>اسم الحملة</td>
                <td>0</td>
                </tr>
                 <tr>
                 <td>رقم التصريح</td>
               <td>0</td>
               </tr>
                <tr>
               <td>رقم المسؤول</td>
               <td>0</td>
               </tr>
               <tr>
                <td> موقع الحملة في منى </td>
                 <td>0</td>
                </tr>
                <tr>
                <td>موقع الحملة في عرفات</td>
                <td>0</td>
                 </tr>
                <tr>
               <td>موقع الحملة في مزدلفة</td>
                  <td>0</td>
              </tr>
              <tr>
              <td>موقع الحملة في مكة</td>
              <td>0</td>
               </tr>
                 </table>
				    </div>
					
					
					<!-- المعلومات المالية -->
			        <div class="content-3">
					<br><p><button>تعديل</button></p><br>

					<table>

                 <tr>
                <td>رقم الحساب</td>
                <td>0</td>
                </tr>
                 <tr>
                 <td>رقم البطاقة </td>
               <td>0</td>
               </tr>
                <tr>
               <td>الباسوورد</td>
               <td>0</td>
               </tr>
               <tr>
                <td>  عدد النقاط </td>
                 <td>0</td>
                </tr>                
                 </table>
				 
				    </div>	

                 <!--  المفقودات -->
			        <div class="content-4">
					<br><p><button>تعديل</button></p><br>

					<table>

                 <tr>
                <td>الصنف</td>
                <td>المكان</td>
				<td>الصورة</td>
                </tr>
                 <tr>
                <td>test</td>
               <td> test</td>
			   <td> test</td>
               </tr>
                <tr>
               <td>test</td>
               <td> test</td>
			   <td> test</td>
               </tr>
               <tr>
                 <td>test</td>
               <td> test</td>
			   <td> test</td>
                </tr>                
                 </table>
				 
				    </div>						
		              </div> 
                     </section>
					 
<br><br><br><br><br><br><br>

  <footer>   <!-- قدم الصفحة -->
  
            
  
  </footer>

    </body>
</html>
