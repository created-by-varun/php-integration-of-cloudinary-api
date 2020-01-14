<?php
include_once "cloudinary/Cloudinary.php";

include_once "cloudinary/Uploader.php";

include_once "cloudinary/Api.php";

Cloudinary::config(array("cloud_name" => "x", "api_key" => "y", "api_secret" => "z"));

?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<form method="post" enctype="multipart/form-data">
		<h2>
			Select image to upload:
		</h2>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<div class="col-md-4"> <br>
			<input type="submit" value="Upload" name="submit">
		</div>
	</form>
	
	<div>
		<?php
		if (isset($_POST["submit"]))
			{
    			$cloudUpload = \Cloudinary\Uploader::upload($_FILES["fileToUpload"]['tmp_name']);
    			print_r($cloudUpload['url']);
			}
	?>
	</div>
</body>

</html>