<!DOCTYPE html>
<html>
<head>
    <title>Display Image Page</title>
</head>
<body>
    <?php
    if (isset($_GET['image'])) {
        $imageUrl = $_GET['image'];
        echo '<img src="' . $imageUrl . '" alt="Image">';
    } else {
        echo 'Image not found.';
    }
    ?>
</body>
</html>