<?php
			if (isset($_POST['Add'])) {
				if (isset($_POST['x']) && isset($_POST['y'])) {
				

				$ans = $_POST['x'] + $_POST['y'];

				echo "  Your answer is $ans ";

			}

			}
			elseif (isset($_POST['subtract'])) {
							if (isset($_POST['x']) && isset($_POST['y'])) {
				

				$ans = $_POST['x'] - $_POST['y'];

				echo '<span style="color:white;font-size:20px;">Your answer is $ans </span>';

			}

						}			
			elseif (isset($_POST['multiply'])) {
				if (isset($_POST['x']) && isset($_POST['y'])) {
				

				$ans = $_POST['x'] * $_POST['y'];

				echo '<span style="color:white;font-size:20px;"> Your answer is $ans </span>';

			}

			elseif (isset($_POST['divide'])) {
				if (isset($_POST['x']) && isset($_POST['y'])) {
				

				$ans = $_POST['x'] / $_POST['y'];

				echo '<span style="color:white;font-size:20px;"> Your answer is $ans </span>';

			}

			}
			}


?>

<style type="text/css">
	.form {
	position: fixed; /* or absolute */
  	top: 50%;
  	left: 50%;
  	 transform: translate(-50%, -50%);
 
</style>

<link rel="stylesheet" type="text/css" href="../main.css">


<form method="post" action="calculator.php" class="form">

		<input type="text" name="x" placeholder="Input your first number">
		<input type="text" name="y" placeholder="input your second number">
        <br>
        <br>
		<input type="submit" name="Add" value="add" style="width:80px;">
		<br>
		<br>
		<input type="submit" name="subtract" value="subtract" style="width:80px;">
		<br>
		<br>
		<input type="submit" name="multiply" value="multiply" style="width:80px;">
		<br>
		<br>
		<input type="submit" name="divide" value="divide" style="width:80px;">
</form> 
