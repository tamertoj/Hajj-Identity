<?php
/* Database connection settings */
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$db = 'test6';
//$mysqli = mysqli_connect($host,$user,$pass);
//$connect = mysql_connect($DB_HOST, $DB_USER, $DB_PASS);
$emailVar='';
if($connect = mysql_connect($DB_HOST, $DB_USER, $DB_PASS)){
	if(!mysql_select_db($db)){
		$query = 'CREATE DATABASE '.$db; 
		mysql_query($query);	
	}
	if(isset($_POST['emailCon'])){
		$emailVar = $_POST['emailCon'];
	}
	if(!empty($emailVar)){
		$query1 = 'SELECT * FROM users WHERE `email` = '.$emailVar.'';
		$query1 = mysql_query($query1);
		if (! $query1){
			echo ('Database error: ' . mysql_error());
		}
		while ( $raw = mysql_fetch_assoc($query1)){
			$records[] = $raw;
		}
	}
	
	//$query =  mysql_query($query) or die('db error :'.mysqli_error($query));
	/*if(mysql_query ('SELECT 1 FROM `users1` LIMIT 1')){
	$table1 ='CREATE TABLE `'.$db.'`.`helthData` ( `perID` INT(15) NOT NULL , `blodType` INT(1) NOT NULL , `hight` INT(3) NOT NULL , `wghit` INT(3) NOT NULL , `allergies` TEXT NOT NULL , `medications` TEXT NOT NULL , `HelDataID` INT(20) NOT NULL AUTO_INCREMENT , PRIMARY KEY (`HelDataID`)) ENGINE = InnoDB;';
	mysql_query ($table1) or die(mysql_error());
	}
	
	if(mysql_query ('SELECT 1 FROM `campian` LIMIT 1')){
	//$table2 = 'CREATE TABLE `'.$db.'`.`campian` ( `campID` INT NOT NULL , `campRegNum` INT NOT NULL , `inChargePhone` INT(13) NOT NULL , `managerPhone` INT(13) NOT NULL , `campLocationVertical` INT(15) NOT NULL , `campLocationHorizontal` VARCHAR(15) NOT NULL , `campWepsite` TEXT NOT NULL ) ENGINE = InnoDB;';
	//mysql_query ($table2) or die(mysql_error());
	}
	
	
	//if(mysql_query ('SELECT 1 FROM `perID` LIMIT 1')){
	//$table4='CREATE TABLE `'.$db.'`.`perID` ( `fullName` TEXT NOT NULL , `nationalty` VARCHAR(20) NOT NULL , `age` INT(2) NOT NULL , `passportNum` VARCHAR(20) NOT NULL , `phoneNum2` INT(10) NOT NULL , `gender` VARCHAR(10) NOT NULL , `email` TEXT NOT NULL , `photo` TEXT NOT NULL , `useGrupe` INT(2) NOT NULL ) ENGINE = InnoDB;';
	//mysql_query ($table4) or die(mysql_error());
	//}
	
	if(mysql_query ('SELECT 1 FROM `financID` LIMIT 1')){
	$table5= 'CREATE TABLE `'.$db.'`.`financID` ( `financeID` INT NOT NULL , `accuntNumber` INT(15) NOT NULL , `accuntbalance` INT NOT NULL , `pilgrim_ID` INT(15) NOT NULL ) ENGINE = InnoDB;';
	mysql_query ($table5) or die(mysql_error());
	}
	$table6 = 'CREATE TABLE `test6`.`users` ( `UsID` INT(20) NOT NULL AUTO_INCREMENT , `username` VARCHAR(20) NOT NULL , `email` TEXT NOT NULL , `UsGr` INT(1) NOT NULL , `Password` INT(10) NOT NULL , `perID` INT(20) NOT NULL , PRIMARY KEY (`UsID`)) ENGINE = InnoDB;';
	if(!empty($records)){
		 header( "location:login.php");
		 echo count($records);
	}
	$add = 'INSERT INTO `users` (`UsID`, `username`, `email`, `UsGr`, `Password`, `perID`) VALUES (NULL, 'mazen', 'mazen.ash@outlook.com', '1', '888888', '0987654321'); 
	';
	*/
}
if(!$connect){
	$mes = 'خطا في الاتصال بقاعدة البيانات';
	echo $mes;
}