<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $bool = true;
    $a = 1;
    $b = 5;

    // $result = match ($bool) {
    //     "1", 3, 5 => "Variable a is equalto one",
    //     2 => "Variable a is equalto two",
    //     default => "None were a match",

    // };

    // echo $result;





    // switch ($a) {
    //     case 1:
    //         echo "The first case is correct!";
    //         break;
    //     case 2:
    //         echo "The second case is correct!";
    //         break;
    //     case 3:
    //         echo "The third case is correct!";
    //         break;
    //     default:
    //         echo "None of the conditions were true!";
    // }


    if ($a < $b && !$bool) {
       echo "First condition is true!";   
    } else if ($a < $b && $bool) {
        echo "Second condition is true!";
    } else {
        echo "None of the condition were true!";
    }
    //*/

    ?>
</body>

</html>