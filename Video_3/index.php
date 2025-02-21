<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Video-3</title>
</head>
<body>
    <!-- The closing tag imples a semicolon, and isn't needed for the last line in a block of PHP. -->
    
    <?php
    echo "This is text written in PHP.";
    echo "<br>";
    echo "This is text written in PHP.";
    ?>

    <?php
    if (true) {
    echo "<p>Some HTML text.</p>";
    }
    ?>
    
    

    <?php if (true) {?>

    <p>Some HTML text.</p>
    
    <?php } ?>

</body>
</html>

<?php
echo "<br>";
echo "This is text written in PHP.";

// We don't include the  closing tag "?>"
