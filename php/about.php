<!DOCTYPE html>
<html>
<head>
	<title>Admin about</title>
	<style type="text/css">
		body{
			background: #00e600;
		}
	</style>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" method="post">
		deyismek istediyin logolari sec:<br><br> 
		<input type="checkbox" name="number[]" value="1">First Photo<br>
		<input type="checkbox" name="number[]" value="2">Second Photo<br>
		<input type="checkbox" name="number[]" value="3">Thirth Photo<br>
		<input type="checkbox" name="number[]" value="4">Forth Photo<br>
		<input type="checkbox" name="number[]" value="5">Fifth Photo<br><br>
		<input type="file" name="file"><br><br>
		<input type="submit" name="submit">
	</form><br>
	<?php
		include 'config.php';
		if(isset($_POST['about'])){

		}
		else if(isset($_POST['submit'])){
			$list = @$_POST['number'];
			$file = @$_FILES['file']['name'];

			$target_dir = "../imgs/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

			if (!empty($file) && $list){
				if ($imageFileType == 'jpg' || $imageFileType == 'png'|| $imageFileType == 'gif') {
	                if ($_FILES['file']['size'] < 500*1024) {	                    move_uploaded_file($_FILES["file"]["tmp_name"] , $target_file);
	                    foreach ($list as $key => $value) {
							$sql = "UPDATE `about_logos` SET `src`= '$file' WHERE id = $value";
							$query = mysqli_query($conn, $sql);
	                	}

	     //            	$dir = "../imgs/";
						// if (is_dir($dir)){
						//   if ($dh = opendir($dir)){
						//   	$count = false;

					 //      	$sql = "SELECT `src` FROM `about_logos`";
					 //      	$query = mysqli_query($conn, $sql);

						//   	$file2 = readdir($dh);
						//   	$file2 = readdir($dh);

						//   	$file2 = readdir($dh);
						//   	while($row = mysqli_fetch_assoc($query)){
						//   		if($file2 == $row['src']){
						// 			$count = true;
						// 		}
						//   	}
						//   	if(!$count && $file2){
						//   		unlink("../imgs/" . $file2);
						//   	}
						//   	$count = false;

						//   	$file2 = readdir($dh);
						//   	while($row = mysqli_fetch_assoc($query)){
						//   		if($file2 == $row['src']){
						// 			$count = true;
						// 		}
						//   	}
						//   	if(!$count && $file2){
						//   		unlink("../imgs/" . $file2);
						//   	}
						//   	$count = false;

						//   	$file2 = readdir($dh);
						//   	while($row = mysqli_fetch_assoc($query)){
						//   		if($file2 == $row['src']){
						// 			$count = true;
						// 		}
						//   	}
						//   	if(!$count && $file2){
						//   		unlink("../imgs/" . $file2);
						//   	}
						//   	$count = false;

						//   	$file2 = readdir($dh);
						//   	while($row = mysqli_fetch_assoc($query)){
						//   		if($file2 == $row['src']){
						// 			$count = true;
						// 		}
						//   	}
						//   	if(!$count && $file2){
						//   		unlink("../imgs/" . $file2);
						//   	}
						//   	$count = false;

						//   	$file2 = readdir($dh);
						//   	while($row = mysqli_fetch_assoc($query)){
						//   		if($file2 == $row['src']){
						// 			$count = true;
						// 		}
						//   	}
						//   	if(!$count && $file2){
						//   		unlink("../imgs/" . $file2);
						//   	}
						//   	$count = false;
						//     closedir($dh);
						//   }
						// }

                	} 
	                else {
	                    echo 'olçu boyukdu max 500 kb';
	                }
	            } 
	            else {
	                echo 'bu fayl ' . $imageFileType;
	            }
			}
			else{
				echo "sekli sec ve yukle!";
			}
			
			// unlink($target_dir);

		}
		else{
			header('Location:admin.php');
		}    
	?>
</body>
</html>