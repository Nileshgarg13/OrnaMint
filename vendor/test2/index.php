<!DOCTYPE html>
<html>
<head>
    <title>Bill Data Autofill</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="scripts.js"></script>
</head>
<body>
    <h1>Upload a Bill</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="bill_image" id="bill_image" accept="image/png, image/jpeg">
        <input type="submit" value="Upload" name="submit">
    </form>

    <h1>Autofill Form</h1>
    <form id="autofill-form" action="save.php" method="post">
        <input type="hidden" id="id" name="id">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <!-- Add more form fields as needed -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
