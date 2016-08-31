<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style type="text/css">
		body{
			background: #00e600;
		}
		h1{
			text-align: center;
		}
		input{
			border-radius: 5px;
			margin: 0 auto;
			margin-bottom: 15px;
			width: 200px;
			padding: 5px;
			display: block;
		}
	</style>
</head>
<body>
	<?php
        if($_SESSION['admin'] == true){
            echo "<h1>admin paneldi bura</h1>";
        }
        else{
            echo "admin falsedi";
            header('Location:index.php');
        }
    ?>
    <form action="logout.php" method="post" name="logoutFrom">
    	<input type="submit" name="logout" value="logout">
    </form>
    <form action="home.php" method="post" name="homeForm">
    	<input type="submit" name="home" value="home section">
    </form>
    <form action="about.php" method="post" name="aboutForm">
    	<input type="submit" name="about" value="about section">
    </form>
</body>
</html>