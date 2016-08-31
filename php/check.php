<?php
	session_start();
	if (isset($_POST['submit'])) {

		$mail = $_POST['mail'];
		$pass = $_POST['pass'];

		include "config.php";
        $sql = "SELECT `mail` , `pass` FROM `users` Where mail = '$mail'";
        $query = mysqli_query($conn, $sql);
		if (!empty($mail) && !empty($pass)) {
			if ($query) {
		        $row = mysqli_fetch_assoc($query);
	        	if($mail == $row['mail'] && $pass == $row['pass']){
	        		$_SESSION['admin'] = true; 
            		header('Location:admin.php');
	        	}else{
	        		$_SESSION['mesaj'] = "mail or pass sehvdir"; 
	        		header('Location:index.php');
	        	} 	
		        
        	}
    	}
        else {
        	$_SESSION['mesaj'] = "xanalari doldurun!"; 
            header('Location:index.php');
        }
	}
	else
	{
		header('Location:index.php');
	}
?>