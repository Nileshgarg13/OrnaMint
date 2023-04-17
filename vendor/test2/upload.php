<?php
require 'vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

// Set up the database connection
$pdo = new PDO('mysql:host=localhost;dbname=myDatabase', 'username', 'password');

// Handle file upload and OCR
if (isset($_FILES['bill_image'])) {
    $imagePath = $_FILES['bill_image']['tmp_name'];

    // Extract text from the image using Tesseract OCR
    $text = (new TesseractOCR($imagePath))->run();

    // Parse the extracted data (e.g., name, date, amount, etc.)
    // Replace this with your own parsing logic
    $name = parseName($text);

    // Store the extracted data in the database
    $stmt = $pdo->prepare('INSERT INTO bills (name) VALUES (:name)');
    $stmt->execute(['name' => $name]);

    echo "Data saved to the database.";
} else {
    echo "No file uploaded.";
}

// Dummy function to parse the name from the OCR text
function parseName($text) {
    // Replace this with your own logic to extract data from the OCR text
    return "John Doe";
}
