<?php
include 'config.php'; 

if(isset($_SESSION['name'])){
    header('Location: ../index.php');
}

if(isset($_POST['submit']))
{
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $mailid = mysqli_real_escape_string($conn, $_POST['mailid']);

 if($uname == "" || $pwd == "" || $mailid == "") {
    echo '<script>window.alert("Please enter all the details!")</script>';
} else {
    $sql_query = "SELECT Count(*) AS userCount from users where Username='".$uname."'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);
    $count = $row['userCount'];
    if($count > 0){
        echo '<script>window.alert("Username already exists")</script>';
    } else {
        $hash = password_hash($pwd, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (Username, Email, Password) VALUES ('".$uname."', '".$mailid."', '".$hash."')";
        $result = mysqli_query($conn, $query);
        if($result) {
        $_SESSION['name'] = $uname;
        header('Location: ../index.php');
        }
    }
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
    <link rel="stylesheet" href="../css/signup.css">
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
        <h1>Sign Up</h1>
        <form action="" method="post" id="signup">
           <input type="text" name="uname" id="username" placeholder="Username">
           <input type="email" name="mailid" id="email" placeholder="Email">
           <input type="password" name="pwd" id="password" placeholder="Password">
           <button type="submit" name="submit">SIGN UP</button>
           <p>Already have an account? <a href="./login.php">Login</a></p>
        </form>
    </div>
    <footer>POWERED BY VERDANT</footer>
    <script src="../js/index.js"></script>
</body>
</html>