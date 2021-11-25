<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: #1cf739;
        margin: auto;
        text-align: center;
        padding: 20px 0;
        border-radius: 10px;
        margin-top: 20px;

        border-radius: 25px;
        background: #2e26a6;
        box-shadow: inset 9px 9px 18px #171355,
            inset -9px -9px 18px #4539f7;

    }
</style>

<body>
    <div class="container">
        <h1>Let learn about Php language</h1>
        This is Container
    </div>
    <?php
        
    function usefulcode(){
        echo "Let see How it Goes";
    };
    function printNumber($number){
        echo "<br>";
        echo "Your Number is ";
        echo $number;
    };
    usefulcode();
    printNumber(rand(200,700));
    ?>
</body>

</html>