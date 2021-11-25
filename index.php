<?php
$insert = false;
if (isset($_POST['name'])) {
    

    $server = "localhost";   
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if (!$con) {
    die("Connection Failed Vro ".mysqli_connect_error());
    }
// echo "Successfully Connected "; 

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

 


    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`,    `gender`, `email`, `phone`, `other`, `dt`) VALUES  ('$name', '$age', '$gender', '$email', '$phone',     '$desc', current_timestamp());";
    $place1=$_POST['place1'];
    $place2=$_POST['place2'];
    $num=$_POST['num'];
    $date1=$_POST['date1'];
    $date2=$_POST['date2'];
    $sql2 = "INSERT INTO `trip`.`tourism` (`place1`, `place2`, `num`, `date1`, `date2`) VALUES  ('$place1', '$place2', '$num', '$date1', '$date2');";
    // echo $sql;
    // INSERT INTO `toursim` (`place1`, `place2`, `num`, `date1`, `date2`) VALUES ('Mumbai', 'Goa', '6', '26/11/21', '29/11/21');
    if($con->query($sql) == true){

        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    if($con->query($sql2) == true){

        $insert = true;
    }
    else{
        echo "ERROR: $sql2 <br> $con->error";
    }

    $con ->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="img-1.jpeg" alt="Nature" height = 723px>
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>