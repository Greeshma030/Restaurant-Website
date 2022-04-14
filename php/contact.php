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
    <link rel="stylesheet" href="../css/contact.css">
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
    <section>
        <div id="contact">
            <h1 id="heading">Contact Us</h1>
            <p>For Job opportunities, please send your resume to resume@verdant.com and we will contact you as soon as
                possible.</p>
            <p>For any other queries, contact us at the contact numbers or Email Id specific to your query given in the
                list below.</p>
            <div id="condiv">
                <div>
                    <h1>For Reservation(less than 10 people)</h1>
                    <p>Email: reserve@verdant.com</p>
                    <p>Contact: 9xxxxxxxxx, 9xxxxxxxxx</p>
                </div>
                <div>
                    <h1>About Menu</h1>
                    <p>Email: menu@verdant.com</p>
                    <p>Contact: 9xxxxxxxxx, 9xxxxxxxxx</p>
                </div>
                <div>
                    <h1>For Reservation(more than 10 people)</h1>
                    <p>Email: reserve2@verdant.com</p>
                    <p>Contact: 9xxxxxxxxx, 9xxxxxxxxx</p>
                </div>
                <div>
                    <h1>Other Queries</h1>
                    <p>Email: queries@verdant.com</p>
                    <p>Contact: 9xxxxxxxxx, 9xxxxxxxxx</p>
                </div>
            </div>
        </div>
    </section>
    <footer>POWERED BY VERDANT</footer>
    <script src="../js/index.js"></script>
</body>

</html>