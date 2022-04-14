let icon = document.getElementById('icon');

icon.addEventListener('click', () => {
    document.getElementById('container').style.display = "flex";
});

let cross = document.getElementById('cross');

cross.addEventListener('click', () => {
    document.getElementById('container').style.display = "none";
});

let home = document.getElementById("navList").getElementsByTagName("p")[0];

home.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/";
});

let about = document.getElementById("navList").getElementsByTagName("p")[1];

about.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/about.php";
});

let menu = document.getElementById("navList").getElementsByTagName("p")[2];

menu.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/menu.php";
});

let contact = document.getElementById("navList").getElementsByTagName("p")[3];

contact.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/contact.php";
});

let loc = document.getElementById("navList").getElementsByTagName("p")[4];

loc.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/#location";
});

let msg = document.getElementById("navList").getElementsByTagName("p")[5];

msg.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/message.php";
});

let menutitle = document.getElementById("menustitle").getElementsByTagName("h1")[0];

menutitle.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/menu.php";
});

let abouttitle = document.getElementById("abouttitle").getElementsByTagName("h1")[0];

abouttitle.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/about.php";
});

let logout = document.getElementById('logout');

logout.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/index.php?exit=true";
});

let login = document.getElementById('login');

login.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/php/login.php";
});

let span = document.getElementsByTagName("span")[0];

span.addEventListener('click', () => {
    window.location = "http://localhost/skillvertex/majorproject/";
});

function story(){
    let ele = document.getElementById('story');
    if(ele.style.display == "flex"){
        ele.style.display = "none";
    }else{
        ele.style.display = "flex";
    }  
}