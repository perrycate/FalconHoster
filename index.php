<?php
session_start();
if(!isset($_SESSION["user_id"])) {
	// generate temporary id to identify this particular user
	// collisions where two users get the same id are possible, but unlikely
	$_SESSION["user_id"] = uniqid();
	// good enough!
    $_SESSION["firsttime"] = true; //Is this your first time visiting the page? (i.e. do I need to show the "View uploaded files" link?)
}
else {
    $_SESSION["firsttime"] = false;
}
?>
<!DOCTYPE html>
<html>
	<head>
        <link rel="icon" href="favicon.png">
        <link rel="stylesheet" href="dropzone.css">
        <link rel="stylesheet" href="styles.css">
		<title>FalconHoster | Upload File</title>
	</head>
	<body>
        <form enctype="multipart/form-data" action="upload.php" id="dropzonearea" class="dropzone" method="POST">
           <h1>Upload a File</h1>
            <div class="fallback"> <!--Fallback for browsers that don't support dropzone or Javascript-->
            <input name="uploadedFile" type="file" dropzone="copy"/>
            <br />
            <input type="submit" value="Upload" />
            </div>
        </form>
        <script src="dropzone.js"></script>
        <script>
            Dropzone.options.dropzonearea = {
                paramName: "uploadedFile",
                init: function() {
                    this.on("addedfile", function(file) {
                        alert("done");
                        var link = document.createElement("a");
                        link.setAttribute("href", "./uploads/<?php if($_SESSION["firsttime"] === false){echo $_SESSION["user_id"];}?>");
                        link.innerHTML = "View uploaded files";
                        document.body.appendChild(link);
                    });
                }
            };
        </script>
	</body>
</html>