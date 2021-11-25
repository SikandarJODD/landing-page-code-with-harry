<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in Php</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: black;
        margin: auto;
        color: chartreuse;
        text-align: center;
        padding: 20px 0;
        font-size: 30px;
        letter-spacing: 1.02px;
        font-family: monospace;
        }
</style>

<body>
    <div class="container">
        Hello Mam & Students
    </div>
    <?php
    $var = "Sikandar is student, Sikandar love playing Chess";
    echo "<br>";
    $len = strlen($var);
    echo $var ."<br>";
    echo "The Lenght Of String is ". $len;
    echo "<br>";
    echo "The Word count Of String is ". str_word_count($var);
    echo "<br>";
    echo "To replace String, ". str_replace("Sikandar","Roshan", $var);
    ?>
</body>

</html>