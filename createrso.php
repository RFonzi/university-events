<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles.css">
	 <link href="https://fonts.googleapis.com/css?family=Fontdiner+Swanky" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>
<body>
	<h1>Create RSO</h1>

	<form name="createRSO" action="createRSOSuccess.php" method="post">
		<input type="hidden" name="createRSO" value=""/>
		<li><label>RSO Name:</label>
		<input type="text" name="rsoName" size="25" />
		<li><label>University Name:</label>
		<input type="text" name="university" size="25" />
		<li><label>Description:</label>
		<textarea type="text" id="description" name="description" rows="8" cols="50"></textarea>
		<li><input type="email" placeholder="email@website.com">
		<li><input type="email" placeholder="email@website.com">
		<li><input type="email" placeholder="email@website.com">
		<li><input type="email" placeholder="email@website.com">
		<li><input type="email" placeholder="email@website.com">
		<li><input type="submit" value="CREATE RSO" />
	</form>

	<form action="dashboard.php">
		<input type="hidden" name="returnFromRSOnoSave" value=""/>
		<input type="submit" value="RETURN TO DASH" />
	</form>


</body>
</html>
