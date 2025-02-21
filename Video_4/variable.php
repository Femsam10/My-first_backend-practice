<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables/Datatype</title>
</head>
<body>
    <?php
    // Scaler types (contains one value)
    $string = "Sam";
    $int = 23456;
    $float = 3.3;
    $bool = true;

    //Array type
    $array = ["Sam", "Olu", "Ade"];
    $array = array("Sam", "Olu", "Ade");
    $object = null;
    ?>

    <?php
    $name = "Sam Ade"; 
    $test = $name;
    ?>

    <p>Hi! My name is <?php echo $name; ?>, and I'm learning PHP!</p>
    <p>Hi! My name is <?php echo $test; ?>, and I'm learning PHP!</p>

</body>
</html>