let icon = document.getElementById('icon');
const url = "http://localhost/Restaurant-Website/"

icon.addEventListener('click', () => {
    document.getElementById('container').style.display = "flex";
});

let cross = document.getElementById('cross');

cross.addEventListener('click', () => {
    document.getElementById('container').style.display = "none";
});

let home = document.getElementById("navList").getElementsByTagName("p")[0];

home.addEventListener('click', () => {
    window.location = url;
});

let about = document.getElementById("navList").getElementsByTagName("p")[1];

about.addEventListener('click', () => {
    window.location = url + "php/about.php";
});

let menu = document.getElementById("navList").getElementsByTagName("p")[2];

menu.addEventListener('click', () => {
    window.location = url + "php/menu.php";
});

let contact = document.getElementById("navList").getElementsByTagName("p")[3];

contact.addEventListener('click', () => {
    window.location = url + "php/contact.php";
});

let loc = document.getElementById("navList").getElementsByTagName("p")[4];

loc.addEventListener('click', () => {
    window.location = url + "#location";
});

let msg = document.getElementById("navList").getElementsByTagName("p")[5];

msg.addEventListener('click', () => {
    window.location = url + "php/message.php";
});

let menutitle = document.getElementById("menustitle");

if (menutitle)
    menutitle.getElementsByTagName("h1")[0].addEventListener('click', () => {
        window.location = url + "php/menu.php";
    });

let abouttitle = document.getElementById("abouttitle");

if (abouttitle)
    abouttitle.getElementsByTagName("h1")[0].addEventListener('click', () => {
        window.location = url + "php/about.php";
    });

let logout = document.getElementById('logout');

if (logout)
    logout.addEventListener('click', () => {
        window.location = url + "index.php?exit=true";
    });


let login = document.getElementById('login');

if (login)
    login.addEventListener('click', () => {
        window.location = url + "php/login.php";
    });


let span = document.getElementsByTagName("span")[0];

span.addEventListener('click', () => {
    console.log("span")
    window.location = url;
});

function story() {
    let ele = document.getElementById('story');
    if (ele.style.display == "flex") {
        ele.style.display = "none";
    } else {
        ele.style.display = "flex";
    }
}