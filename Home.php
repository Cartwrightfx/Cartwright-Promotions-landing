<?php
    if(isset($_POST['submit'])){
        require "db.php";
        $name = $_POST['name'];
        $email = $_POST['email'];

    
        $sql = "INSERT INTO leads(name, email ) VALUES ('$name', '$email')";
    
        ///perform query
        $result = mysqli_query($con, $sql);
        if($to){
            echo header('location:Thanks.php');
        }

        $email_from = 'yourname@cartwrightpps.tk';
        $email_subject = "New Form submission";
        $email_body = "You have received a new message from the user $name.\n".
        "I have Subscribed to your newsletter:\n $email".
        $to = "amaechiisaac450@gmail.com";
        mail($to,$email_subject,$email_body);

       
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="./Cartwright_Promotions_logo.png" type="image/x-icon">
    <title>Home</title>
</head>
<body>
    <div class="n-wrapper">
        <div class="n-left">
            <img src="./Cartwright_Promotions_logo.png" height="80px" width="80px" alt="Cartwright Promotions logo">
            <h3>Cartwright Promotions</h3>
            <h2>Home</h2>
        </div>
        <div class="n-right">
            <h3>Features</h3>
            <h3>Pricing</h3>
            <h3>About</h3>
            <h3>Contact</h3>
            <a href="Contact.php"><h2>Courses</h2></a>
        </div>
    </div>
        <!-- <h2>Certified</h2> -->
        <h2>-- Experts in --</h2>
        <h1>DIGITAL MARKETING</h1>
        <p>Bring your business online with US. <br>
 We offer marketing services to help you bring your business to the internet
  and improve its visibility <br><br>
  Subscribe to our Newsletter for a chance at Free Exclusive 
Education on Digital marketing</p>
  
    <form method="post" >
        <input class="input" type="text" name="name" value="Your Name" autocomplete="off"><br>
        <input class="input" type="email" name="email" value="Input Email" autocomplete="off"><br>
        <input class="submit" type="submit" value="Submit" name="submit">
    </form>
</body>
</html>