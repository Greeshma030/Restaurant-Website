<?php
include "php/config.php";

if(isset($_GET['exit'])){
    session_destroy();
    header('Location: index.php');
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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
</head>

<body>
    <nav>
        <span>Verdant</span>
        <div id="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
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
    <div id="home">
        <p id="fi">Nothing</p>
        <p id="se">brings</p>
        <p id="th">PEOPLE</p>
        <p id="fo">together</p>
        <p id="fif">---like---</p>
        <p id="la">GOOD FOOD</p>
    </div>
    <div id="location">
        <div id="visit">
            <h1>Visit Us</h1>
            <a href="#" id="address">Block no: 56, Street no: 5, Kukatpally, Hyderabad, India.</a>
            <p class="p1"><strong>Monday-Friday</strong></p>
            <p class="p2">8:00am - 6:00pm</p>
            <p class="p1"><strong>Saturday & Sunday</strong></p>
            <p class="p2">10:00am - 9:00pm</p>
            <p class="p1"><strong>Lunch</strong></p>
            <p class="p2">11:00am - 3:00pm</p>
            <a href="./php/contact.php" id="con">Contact Us</a>
        </div>
        <img src="./img/location.webp" alt="">
    </div>
    <div id="menustitle">
        <h1>Menus</h1>
    </div>
    <div id="menu">
        <div id="menutext">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Suscipit soluta possimus harum nam ab, a eius
                architecto aperiam accusantium inventore mollitia illo, molestias quod?Lorem ipsum dolor sit, amet
                consectetur adipisicing elit. Voluptates obcaecati consectetur sit alias quidem labore, itaque error,
                doloribus nemo accusamus quasi! Neque commodi autem asperiores quia nam cupiditate maiores pariatur
                saepe officia repellat culpa vitae, consectetur ipsa dolorum aperiam possimus sequi sit? Ducimus et
                soluta corporis error dignissimos cum animi nisi ex? Sit quidem iusto, dolore consequuntur assumenda
                accusamus porro facere molestiae rem blanditiis. Possimus quisquam adipisci nisi ipsa soluta.</p>
        </div>
        <ul id="menubtns">
            <li><a href="./php/menu.php#menubtns">Break Fast</a></li>
            <li><a href="./php/menu.php#menubtns">Lunch</a></li>
            <li><a href="./php/menu.php#menubtns">Dinner</a></li>
            <li><a href="./php/menu.php#menubtns">Daily Specials</a></li>
            <li><a href="./php/menu.php#menubtns">Dessert</a></li>
        </ul>
    </div>
    <div id="abouttitle">
        <h1>About</h1>
    </div>
    <div id="about">
        <div id="abouttext">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae sequi incidunt, repellat quo quaerat provident omnis totam pariatur eum modi sint rerum beatae, itaque obcaecati harum nulla fugit natus esse aut ut consectetur. Ratione aut quaerat voluptatum dolor, dicta molestias cum quae aperiam explicabo cumque, hic ipsa dolorum quod, pariatur beatae impedit sequi et dolores. Omnis dolore alias repellat soluta numquam veniam maiores magni voluptatibus laborum dolorum. Veniam totam praesentium labore quos esse corrupti commodi, ipsum ad ab error laborum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nisi vero, soluta accusantium suscipit rerum praesentium harum officia dicta quisquam odio vel, explicabo tempora excepturi, illum reiciendis. Voluptates quasi voluptate dolores dignissimos, enim vero nulla doloremque error, fugit ut libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, voluptatibus?</p>
        </div>
        <a href="./php/about.php#storybutton">Our Story</a>
    </div>
    <footer>POWERED BY VERDANT</footer>
    <script src="./js/index.js"></script>
</body>

</html>