<?php
	session_start()
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style>
	*{
		padding:0px;
		margin:0px;	
	}
	html,body{
		width:100%;
		height:100%;
	}
	div.header{
		width:100%;
		height:40px;
		background:#ED7F81;
	}
</style>
</head>

<body style="background-image:url(../vieLogin/img/background.png); background-size:100%;">
<form method="post" action="../vieResulte/">
<table style="width:100%; height:100%">
	<tr>
    	<td align="center">
        	<div class="header">
            	<?php
                	echo $_SESSION['email'];
				?>
            </div>
            <br /><br /><br /><br /><br /><br />
            <br /><br /><br /><br /><br /><br /><br />
            
            <input type="text" name="SerSentesCon" placeholder="ادخل رقم المرجع" style="font-size:30px; text-align:center; width:60%; border-radius:20px; padding: 20px;"/>
            <br /><br />
            <input type="submit" name="sendData" value="بحث"  style="width: 150px; font-size:28px; border-radius:25px;">

        </td>
    </tr>
</table>
</form>
</body>
</html>