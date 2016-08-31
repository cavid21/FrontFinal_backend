<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
		<form action="check.php" enctype="multipart/form-data" method="post" id="myForm">
			<input type="text" name="mail">
			<input type="password" name="pass">
			<input type="submit" name="submit" value="login">
		</form>
		<form action="signup.php" enctype="multipart/form-data" method="post" id="signup">
			<input type="submit" name="submit" value="sign up">
		</form>
		
		<?php if (isset($_SESSION['mesaj'])) { ?>
        
        <div class="alert" role="alert"> <p><?= $_SESSION['mesaj'] ?></p> </div>
        
        <?php unset($_SESSION['mesaj']); } ?>

        <div class="alert hidden" id="contactMsj" role="alert"></div>
	</div>
	<script src="../js/jquery-3.1.0.min.js"></script>
<!-- 	<script>
        $('#myForm').submit(function (event) {
            $('#contactMsj').addClass('hidden');
            $('#contactMsj').empty();

            var mail = $('input[name=mail]').val();
            var pass = $('input[name=pass]').val();
            var check = false;

            if (mail !== "1") {
                $('#contactMsj').removeClass('hidden');
                if (mail === "") {  
                	$('#contactMsj').append('<p>Email bos saxlama</p>');
            	}
            	else{
                	$('#contactMsj').append('<p>Email duzgun deil</p>');
                }
                check = true;
            }  
            if (pass !== "1") {
                $('#contactMsj').removeClass('hidden');
                if (pass === "") {  
                	$('#contactMsj').append('<p>Pass bos saxlama</p>');
            	}
            	else{
                	$('#contactMsj').append('<p>Pass duzgun deil</p>');
                }
                check = true;
            }
            if (!check) {
             	$('#myForm').submit();
            }
            console.log(check);
            event.preventDefault();
        });
    </script> -->
</body>
</html>