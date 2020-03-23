<?php
include_once ('../inc/functions.php');
?>

<h1> DEMO IMAGE UPLOAD and TABLE UPDATE</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
	<label>Email
		<input type="email" id="email" name="email" placeholder="somebody@example.com">
	</label>
	<label> Choose your image  <input type="file" name="avatar" /> </label>
	<input type="submit" name="submit" value="Upload Image..." class="button " />
	<input type="reset" value="Clear" class="button " />
</form>

<?php

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$image = $_FILES["avatar"]["name"];
	$imageTempName = $_FILES["avatar"]["tmp_name"];
	$imagesize = $_FILES["avatar"]["size"];
	$imagetype = $_FILES["avatar"]["type"];

	$imageContents = file_get_contents($imageTempName);

	$image_info = getimagesize($imageTempName);
	$image_width = $image_info[0];
	$image_height = $image_info[1];

	echo  $email . "</br>" . $image . "</br>" . $image_width . "</br>" . $image_height . "</br>";
	echo  $imagesize . "</br>" . $imagetype . "<br />" . $imageTempName. "</br>";

	// Read image path, convert to base64 encoding
	$displayImage = base64_encode($imageContents);
	// Format the image SRC:  data:{mime};base64,{data};
	$src = 'data: ' . $imagetype .';base64,'.$displayImage;

	$result = updateAvatar($email, $src);
	echo "The update result was: " . $result . "<br>";
	// Echo out a sample image
	echo '<img src="' . $src . '" width="200px">';

} else echo "no submit";
?>