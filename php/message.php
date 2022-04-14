<?php
include 'config.php'; 

if(!isset($_SESSION['name'])){
    header('Location: ./login.php');
}

if(isset($_POST['submit']))
{
    $uname = $_SESSION['name'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);
 
        $query = "INSERT INTO messages (username, name, email, number, message) VALUES ('".$uname."', '".$name."', '".$email."', '".$mobile."', '".$msg."')";
        $result = mysqli_query($conn, $query);
        if($result) {
        echo '<script>window.alert("Message sent Successfully")</script>';
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verdant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abel&family=Cedarville+Cursive&family=Cormorant+Garamond:ital,wght@1,700&family=Dancing+Script:wght@700&family=Lavishly+Yours&family=Lobster&family=Send+Flowers&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/message.css">
    <link rel="stylesheet" href="../css/media.css">
</head>
<body>
    <nav>
        <span>Verdant</span>
        <div id="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div id="container">
            <div id="box">
                <div id="cross">X</div>
                <div id="navList">
                    <p>Home</p>
                    <p>About Us</p>
                    <p>Menu</p>
                    <p>Contact Info</p>
                    <p>Location</p>
                    <p>Message Us</p>
                    <?php if(!isset($_SESSION['name'])){ ?>
           <p id="login">Login</p>
        <?php } else { ?>
            <p id="logout">Log Out</p>
        <?php } ?>
                </div>
            </div>
        </div>
    </nav>
    <div class="msgBox">
        <h1>Message Us</h1>
        <p>Send us a message via the form below and we will get back to you as soon as possible.</p>
        <form action="" method="post" id="form">
           <input type="text" name="name" id="name" placeholder="Name">
           <input type="email" name="email" id="email" placeholder="Email" required>
           <input type="number" name="number" id="number" placeholder="Mobile Number">
           <textarea name="msg" id="textarea" cols="30" rows="10" placeholder="Your Message" required></textarea>
           <button type="submit" name="submit" >SEND</button>
        </form>
    </div>
    <footer>POWERED BY VERDANT</footer>
    <script src="../js/index.js"></script>
</body>
</html>