<?php
session_start();
// base uploads directory
$basePath = "./uploads/";

// each "user" should have own directory, so similarly named files don't conflict
if( !$_SESSION["user_id"] ) {
	// redirect to initial page if user doesn't have an id yet
	header('Location: index.php');
	die();
}
// user's directory will be their id.
$userdir = $_SESSION["user_id"] . '/';
$targetFolder = $basePath . $userdir;

// create folder if it doesn't exist
if( !(is_dir($targetFolder)) ) {
	mkdir($targetFolder, '766', true);
	// make sure folder has correct permissions
	chmod($targetFolder, 0766);
}

// actual filename
$filename = basename( $_FILES['uploadedFile']['name'] );

// move file from temp storage to permanent location in $folder
$path = $targetFolder . $filename;

if(move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $path)) {
	echo "$filename uploaded!";
	echo "<br /><a href=$path>View File</a>";
}
else {
	echo "Upload failed!";
}
echo "<br /><a href='./index.php'>Go Back</a>";
