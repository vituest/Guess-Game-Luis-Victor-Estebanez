<?//Guess Game?>
<html>

<head>
	<title>Guess Game</title>
</head>

<body>
	<center>
	<?php
	//This is the secret number
	$secret=7;
	echo '<br><br><br><br><br><br><br><br><br>Write a number between 0 and 10<br>';
	if(isset($_POST['number'])){
		$num=$_POST['number'];
		if($num==$secret){
			echo "You are right!,the number is $secret";
		}else{
			echo "Sorry, $num is not the secret number. <br>Please, try a different number";
		}
	}
	?>

	<form method="post">
		<p><input type="text" placeholder="Your Number?" name="number"/></p>
		<p><input type="submit" name="submit" value="send" /></p>
	</form>
</center>
</body>

</html>