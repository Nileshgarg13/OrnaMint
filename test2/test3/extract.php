<?php
// Check if image file is selected
if (isset($_FILES["image"])) {
	// Get image file details
	$image_name = $_FILES["image"]["name"];
	$image_tmp_name = $_FILES["image"]["tmp_name"];
	$image_type = $_FILES["image"]["type"];
	
	// Check if image is a valid type
	if ($image_type == "image/jpeg" || $image_type == "image/png") {
		// Move uploaded image to a temporary folder
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($image_name);
		move_uploaded_file($image_tmp_name, $target_file);
		
		// Run Tesseract OCR on the image to extract text
		exec("tesseract $target_file stdout", $output);
		$text = implode(" ", $output);
		
		// Print extracted text on the screen
		echo "<div class=\"container\"><h1>Image Text Extractor</h1><div id=\"result\"><h2>Extracted Text:</h2><p>$text</p></div></div>";
	} else {
		echo "Error: Invalid file type. Please select a JPEG or PNG image.";
	}
} else {
	echo "Error: No image file selected.";
}
?>
