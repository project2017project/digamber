<?php

session_start();

include '../dbconection/connection.php';

    $em=$_POST['Email'];

    //$pw=md5($_POST['Password']);
	$pw=$_POST['Password'];

   



   $sql="select * from users where User_Name='".$em."' AND User_Password='".$pw."'";

   $reg=$mysqli-> query($sql);

   $data=mysqli_fetch_array($reg);

   //echo $data;



    if($data!="")

 		{

		 

			 $_SESSION['User_Name']=$em;

			 $_SESSION['A_Id']=$data['User_Id'];

			// header("location:admin1/index.php");

			 echo "<script> window.location.href = 'index.php';</script>";

	  			

		}

		else

		{

			$_SESSION['error']="Worng Detail";

   		    //header("location:login.php");

			echo "<script> window.location.href = 'login.php';</script>";

		}

    

?>