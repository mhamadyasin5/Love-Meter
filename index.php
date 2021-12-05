<!DOCTYPE html>
<html>
<head>
	<title>Mhamad Yasin</title>
</head>
<body>
	<style type="text/css">
		body{
			background-image:url('love1.jpg') ;
			background-repeat: no-repeat;
			background-size: cover;
		}
		form{
			font-size: 35px;
			text-align: center;
			margin: 25px;	
		}
		label{
			font-size: 55px;
			font-family: "Cooper";
			color: pink;
		}
		.input{
			padding: 10px;
			font-size: 25px;
			border: 1px solid white;
			width: 200px;
			height: 30px;
			text-align: center;
		}
		
		.sub{
			padding: 10px;
			font-size: 25px;
			border: 1px solid white;
			background-color: pink;
			width: 220px;
			height: 55px;
			text-align: center;
			margin-left: 240px;
		}
		.result{
			font-size: 28px ;
			color: pink;
			text-align: center;
		}
	</style>
	<form action="" method="get">
			<h1 style="color: pink;">LOVE METER</h1>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Male : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input" type="text" name="male" placeholder = "Boy Name" required >
			&nbsp;&nbsp;&nbsp;
			<br></br>
			<label>Female : </label><input class="input" type="text" name="famale" placeholder = "Girl Name"required><br><br><br>
			<input class="sub" type="submit" name="sub" value="start"><br>
			<h6 class="result"></h6>
	</form>

	<?php

		if (isset($_GET['sub'])) {
			$boy= $_GET['male'];
			$girl= $_GET['famale'];
			$random= rand(40,100);

			$filename="data.txt";
			
			$old_data=file_get_contents($filename);
			$content =$_GET['male']." , ".$_GET['famale']."\n";
			$new_data=$old_data.$content;


			file_put_contents($filename, $new_data);

			echo "<h6 class='result'>".$boy ."  and  ".$girl."  is   %".$random."</h6>";
		}
	?>

</body>
</html>