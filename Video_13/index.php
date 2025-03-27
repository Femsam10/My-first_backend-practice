<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //$test = "Samuel";
    //function myFunction()

    class Myclass
    {
        // Define a class variable
        public $classVar = "Hello, world!";

        // Define a class method
        public function myMethod()
        {
            // use the class variable
            echo $this->classVar; // Output: Hello, world!
        }
        /*
        // Declare a static variable
        static $staticVar = 0;

        // Increment the static variable
        $staticVar++;

        // Use the static variable
        return $staticVar;

        
        //global$test;
        // Define a local variable
        $localVar = "Hello, world!";

        // Use the localvariable
        return $GLOBALS["test"]; // Output: Hello, world!
        */
    }

        // echo myFunction();
        // echo myFunction();
        // echo myFunction();

    ?>

</body>
</html>