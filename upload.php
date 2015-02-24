<?php
// location to save file
$folder = "uploads/";

// name of the file in temporary storage
$tempName = $_FILES['uploadedFile']['tmp_name'];

// actual filename
$filename = basename( $_FILES['uploadedFile']['name'] );

// move file from temp storage to permanent location in $folder
$path = $folder . $filename;

if(move_uploaded_file($tempName, $path)) {
	echo "$filename uploaded!";
	echo "<br /><a href=$path>View File</a>";
}
else {
	echo "Upload failed!";
}
echo "<br /><a href='./index.php'>Go Back</a>";
