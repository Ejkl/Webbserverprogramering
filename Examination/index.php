<?php 
require_once('settings.php');
require_once('button.php');

?>

<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width"/>
		<title>elins</title>
		<style>
			body {
				background:grey;
			}
		input {
			width:8%;
			height:100px;
			margin-left: 44%;
			margin-top:10%;
			border-radius:100%;
			border:#fff solid 5px;
			font-weight:bold;
			font-size:12px;
		.pink {background:pink;}
		.white {background:white;}
		.purple {background:purple;}
		}
			.value1 {
				background-color:pink;
			}
			.value2 {
				background-color:#AED3FC;
			}
			.value3 {
				background-color:#E6A0F2;
			}
		form {
			width:100%;
		}
		.text {
			color:#fff;
			font-size:14px;
			margin-left:41%;
			margin-top:3%;
		}
			
		</style>
	</head>
	<body>
	<!--reloads the page on button click-->
	<form action="index.php" method="submit">
	<input type="Submit" name="Submit1"value="ADD TO CART" class="<?php echo $color; ?> "/>
	<div class="text">Click the button or reload the page. </div>
	</form>
	</body>
	</html>
