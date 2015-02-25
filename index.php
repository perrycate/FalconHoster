<?php
session_start();
if(!isset($_SESSION["user_id"])) {
	// generate temporary id to identify this particular user
	// collisions where two users get the same id are possible, but unlikely
	$_SESSION["user_id"] = uniqid();
	// good enough!
}
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="icon" href="favicon.png">
		<title>FalconHoster | Upload File</title>
	</head>
	<body>
		<h1>Upload a file here:</h1>
		<form enctype="multipart/form-data" action="upload.php" method="POST">
			<input name="uploadedFile" type="file" />
			<br />
			<input type="submit" value="Upload" />
		</form>
		<br />
		<?php 
            if (!isset($_SESSION["user_id"])) {
                echo "<a href='./uploads/" . $_SESSION["user_id"] ."'>View uploaded files</a>";
            }
        ?>
	</body>
</html>