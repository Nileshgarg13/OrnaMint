<!DOCTYPE html>
<html>
<head>
	<title>Upload Bill and Extract Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<h1>Upload Bill and Extract Details</h1>
	<form action="submit.php" method="post" enctype="multipart/form-data">
		<label for="fileToUpload">Select Image1:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br><br>
        <label for="fileToUpload">Select Image2:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br><br>
        <label for="fileToUpload">Select Image3:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br><br>
        <label for="fileToUpload">Select Image4:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br><br>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>
