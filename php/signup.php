<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style type="text/css">
		body{
			background:  #00e600;
			padding: 0;
			margin: 0;
		}
		input{
			border-radius: 5px;
			margin: 0 auto;
			margin-bottom: 15px;
			width: 200px;
			padding: 5px;
			display: block;
		}
		#login{
			margin: 0 auto;
			height: 300px;
			max-width: 400px;
			background: red;
		}
		.alert{
			height: 50px;
			width: 300px;
			background: cyan;
			margin: 0 auto;
		}
		.hidden{
			display: none;
		}
	</style>
</head>
<body>
	<div id="login">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="signForm">
			<input type="text" name="mail">
			<input type="pass" name="pass">
			<input type="submit" name="signup">
		</form>
		<?php
			session_start();
			include 'config.php';
			if (isset($_POST['signup'])) {
	            $mail = $_POST['mail'];
	            $pass = $_POST['pass'];

				if (!empty($mail) && !empty($pass)) {
					$sql_get = "SELECT `mail` , `pass` FROM `users` Where mail = '$mail'";
		        	$query = mysqli_query($conn, $sql_get);
					if ($query) {
				        $row = mysqli_fetch_assoc($query);
			        	if($mail == $row['mail'] && $pass == $row['pass']){
			        		$_SESSION['mesaj_sign'] = "user istifade olunur";
			        	}else{
		        		 	$sql_set = "INSERT INTO `users` (`mail` , `pass`) VALUES ('$mail' , '$pass')";
	        				$query = mysqli_query($conn, $sql_set);
	        				header('Location:index.php');
			        	} 	
		        	}
		    	}
		        else {
		        	$_SESSION['mesaj_sign'] = "xanalari doldurun!"; 
		        }
        	}
        	else{
        		
        	}
		?>
        <?php if(isset($_SESSION['mesaj_sign'])){ ?>
    	 	<div class="alert" role="alert"> <p><?= $_SESSION['mesaj_sign'] ?></p> </div>
        
   		 	<?php unset($_SESSION['mesaj_sign']);  ?>
       <?php } ?>
       

	</div>
</body>
</html>