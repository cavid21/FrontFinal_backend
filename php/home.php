<?php
	include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin home</title>
	<style type="text/css">
		body{
			background: #00e600;
		}
	</style>
</head>
<body>
	<div>
		<h3>home section: h1</h3>

		<form action="" method="post">
			edit h1:
			<input type="text" name="text_h1">
			<input type="submit" name="submit_h1">
		</form>
		<form action="" method="post">
			edit h3:
			<input type="text" name="text_h3">
			<input type="submit" name="submit_h3">
		</form>
		<?php
			if(isset($_POST['home'])){
				$text_h1  = @$_POST['text_h1'];
				$text_h3  = @$_POST['text_h3'];
				if(!$text_h1 == ""){
					$sql = "UPDATE `home` SET `h1`= '$text_h1' WHERE id = 1";
					$query = mysqli_query($conn, $sql);
				}
				else if(!$text_h3 == ""){
					$sql = "UPDATE `home` SET `h3`= '$text_h3' WHERE id = 1";
					$query = mysqli_query($conn, $sql);
				}
				else{
					echo "xanalari doldurun";
				}
			}
			else{
				header('Location:admin.php');
			}
		?>
	</div>
</body>
</html>