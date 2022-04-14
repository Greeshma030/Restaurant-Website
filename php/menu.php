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
    <link rel="stylesheet" href="../css/menu.css">
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
        <div id="menubtns">
            <p class="btn">Break Fast</p>
            <p class="btn">Lunch</p>
            <p class="btn">Dinner</p>
            <p class="btn">Daily Specials</p>
            <p class="btn">Dessert</p>
        </div>
    </div>
    <div class="menuBox" id="breakfast">
        <h1>Break Fast</h1>
        <div>
            <p>Puri</p>
            <p>Idli</p>
            <p>Egg Dosa</p>
            <p>Masala Dosa</p>
            <p>Poha</p>
            <p>Upma</p>
            <p>Mixed Veg paratha</p>
            <p>Roti</p>
        </div>
    </div>
    <div class="menuBox" id="lunch">
        <h1>Rice/Biryanis</h1>
        <div>
            <p>Vegetable Biryani</p>
            <p>Chicken Biryani</p>
            <p>Mutton Biryani</p>
            <p>Shrimps Biryani</p>
            <p>Soya Chunk Biryani</p>
            <p>Jeera Rice</p>
            <p>White Rice</p>
        </div>
        <h1 class="margin-top">Breads</h1>
        <div>
            <p>Wheat Roti (Plain/Butter)</p>
            <p>Naan (Plain/Butter)</p>
            <p>Garlic Naan</p>
            <p>Wheat Aloo Paratha</p>
            <p>Kheema Naan</p>
            <p>Chilli Cheese Naan</p>
        </div>
        <h1 class="margin-top">Indian Curries</h1>
        <div>
            <p>Malai Kofta Curry</p>
            <p>Paneer Butter Masala</p>
            <p>Kadai Paneer</p>
            <p>Palak Paneer</p>
            <p>Paneer Tikka Masala</p>
            <p>Aloo Gobi Adraki</p>
            <p>Dal Makhani</p>
        </div>
    </div>
    <div class="menuBox" id="dinner">
        <h1>Starters</h1>
        <div>
            <p>Onion Bhaji</p>
            <p>Aubergine Bhaji</p>
            <p>Vegetable Pakora</p>
            <p>Fish Pakora</p>
            <p>Meat Samosas</p>
            <p>Mixed Starter Plate</p>
        </div>
        <h1 class="margin-top">Soups</h1>
        <div>
            <p>Chicken Soup</p>
            <p>Sweet Corn Soup Veg/Non Veg</p>
            <p>Hot N Sour Soup Veg/Non Veg</p>
            <p>Manchow Soup Veg/Non Veg</p>
        </div>
        <h1 class="margin-top">Tandoori Mains</h1>
        <div>
            <p>Chicken Tikka</p>
            <p>Fish Tikka</p>
            <p>Tandoori Chicken</p>
            <p>Tandoori Mix</p>
            <p>Murg Tandoori</p>
            <p>Angara Kebab</p>
            <p>Seekh Kebab</p>
        </div>
    </div>
    <div class="menuBox" id="specials">
        <h1>Today's Special</h1>
        <div>
            <p>Chicken Curry</p>
            <p>Shrimp Tikka Masala</p>
            <p>Daal</p>
            <p>Chenna Masala</p>
            <p>Saag Paneer</p>
            <p>Lentil Soup</p>
        </div>
    </div>
    <div class="menuBox" id="dessert">
        <h1>Dessert</h1>
        <div>
            <p>Gulab Jamun</p>
            <p>Kheer (Rice Pudding)</p>
            <p>Ice Cream</p>
            <p>Fried Banana</p>
            <p>Fruity Mix</p>
            <p>Banoffee</p>
            <p>Sweet Rasagulla</p>
        </div>
    </div>
    <footer>POWERED BY VERDANT</footer>
    <script src="../js/menu.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>