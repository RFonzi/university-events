<?php include 'functions.php';
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	 <link href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
	<h1>Join RSO</h1>

	<?php
	
		//get current user logged in
		$user = unserialize($_SESSION["user"]);

		$arrayOfData = getRSO($user);

		$html_table = '<table border="1 cellspacing="0" cellpadding="2""><tr><th>RSO Id</th><th>RSO Name</th><th>Description</th></tr>';



			for($i=0;$i<count($arrayOfData);$i++)
			{
				$html_table .="<tr><td><a href='joinRSOsuccess.php?index=$i'>".$arrayOfData[$i]->rid."</a></td><td>".$arrayOfData[$i]->name."</td><td>".$arrayOfData[$i]->description."</td></tr>";
			}


		$html_table .='</table>';

		echo $html_table;

	?>

	<form action="dashboard.php">
		<input type="hidden" name="returnFromjoinRSO" value=""/>
		<input type="submit" value="RETURN TO DASH" />
	</form>


</body>
</html>
