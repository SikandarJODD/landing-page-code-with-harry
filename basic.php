<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form </title>
</head>
<body>
    <div class="container">
        <h1>this is my first php file</h1>
    </div>
    <?php
    echo "Hello world <br>";
    $kilo1 = 34;
    $kilo2 = 57;
    $add = $kilo1 + $kilo2;
     echo $add;
     echo "<br>";
     echo "Price of Kashmir Trip is ";
     echo rand(1200,1600);
     echo " Rs";
     echo "<br>";
     echo "The Value of 4==4";
    //  echo var_dump(4==4);
    ?>
    <h2>let move on to second part </h2>
    <?php
    define("PI",3.14);
    echo "Let do it";
    echo "<br>";
    $var = "This is string";
    echo var_dump($var);
    echo "<br>";
    $var = 45.6;
    echo var_dump($var);
    echo PI;
    ?>

    <?php
    // Logical Operators
    if (10==10) {
        echo "<br>";
        echo "Mam Value is ";
        echo 10;
    }
    ?>
</body>
</html>