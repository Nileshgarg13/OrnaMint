<?php
// Set up the database connection
$pdo = new PDO('mysql:host=localhost;dbname=myDatabase', 'username', 'password');

// Get the data from the form
$id = $_POST['id'];
$name = $_POST['name'];
// Add more variables if you have more form fields

// Update the record in the database
$stmt = $pdo->prepare('UPDATE bills SET name = :name WHERE id = :id');
$stmt->execute(['name' => $name, 'id' => $id]);
// Add more fields to the query if needed

echo "Data updated successfully.";
