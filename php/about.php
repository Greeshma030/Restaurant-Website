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
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/media.css">
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
    <div id="abouttitle">
        <h1>About</h1>
    </div>
    <div id="about">
        <div id="abouttext">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae sequi incidunt, repellat quo quaerat provident omnis totam pariatur eum modi sint rerum beatae, itaque obcaecati harum nulla fugit natus esse aut ut consectetur. Ratione aut quaerat voluptatum dolor, dicta molestias cum quae aperiam explicabo cumque, hic ipsa dolorum quod, pariatur beatae impedit sequi et dolores. Omnis dolore alias repellat soluta numquam veniam maiores magni voluptatibus laborum dolorum. Veniam totam praesentium labore quos esse corrupti commodi, ipsum ad ab error laborum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nisi vero, soluta accusantium suscipit rerum praesentium harum officia dicta quisquam odio vel, explicabo tempora excepturi, illum reiciendis. Voluptates quasi voluptate dolores dignissimos, enim vero nulla doloremque error, fugit ut libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, voluptatibus?</p>
        </div>
        <p id="storybutton" onclick="story()">Our Story</p>
    </div>
    <div id="story">
        <div id="storytext">
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae sequi incidunt, repellat quo quaerat provident omnis totam pariatur eum modi sint rerum beatae, itaque obcaecati harum nulla fugit natus esse aut ut consectetur. Ratione aut quaerat voluptatum dolor, dicta molestias cum quae aperiam explicabo cumque, hic ipsa dolorum quod, pariatur beatae impedit sequi et dolores. Omnis dolore alias repellat soluta numquam veniam maiores magni voluptatibus laborum dolorum. Veniam totam praesentium labore quos esse corrupti commodi, ipsum ad ab error laborum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti nisi vero, soluta accusantium suscipit rerum praesentium harum officia dicta quisquam odio vel, explicabo tempora excepturi, illum reiciendis. Voluptates quasi voluptate dolores dignissimos, enim vero nulla doloremque error, fugit ut libero. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, voluptatibus?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum nostrum cum nemo magnam perferendis, veritatis temporibus earum ipsa exercitationem vero accusantium vitae, consequuntur ab recusandae delectus, sapiente maiores voluptatem pariatur odit sunt tempora dolorum eum! Similique inventore deleniti necessitatibus exercitationem officiis. Reiciendis omnis a hic amet eos nesciunt distinctio tempore!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, distinctio.</p>
        </div>
    </div>
    <footer>POWERED BY VERDANT</footer>
    <script src="../js/index.js"></script>
</body>
</html>