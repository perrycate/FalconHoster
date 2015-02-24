<!DOCTYPE html>
<html>
	<head>
		<title>Hello World!</title>
	</head>
	<body>
		<h1>Upload a file here:</h1>
		<form enctype="multipart/form-data" action="upload.php" method="POST">
			<input name="uploadedFile" type="file" />
			<br />
			<input type="submit" value="Upload" />
		</form>
		<br />
		<a href="./uploads">View uploaded files</a>
	</body>
</html>