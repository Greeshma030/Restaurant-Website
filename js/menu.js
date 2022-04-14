let btn1 = document.getElementsByClassName("btn")[0];
let btn2 = document.getElementsByClassName("btn")[1];
let btn3 = document.getElementsByClassName("btn")[2];
let btn4 = document.getElementsByClassName("btn")[3];
let btn5 = document.getElementsByClassName("btn")[4];

let breakfast = document.getElementById('breakfast');
let lunch = document.getElementById('lunch');
let dinner = document.getElementById('dinner');
let specials = document.getElementById('specials');
let dessert = document.getElementById('dessert');

btn1.addEventListener('click', () => {
    breakfast.style.display = "flex";
    btn1.style.background = "rgb(33, 49, 6)"
    lunch.style.display = "none";
    btn2.style.background = "rgb(71, 92, 36)";
    dinner.style.display = "none";
    btn3.style.background = "rgb(71, 92, 36)";
    specials.style.display = "none";
    btn4.style.background = "rgb(71, 92, 36)";
   dessert.style.display = "none";
   btn5.style.background = "rgb(71, 92, 36)";
});

btn2.addEventListener('click', () => {
    breakfast.style.display = "none";
    btn1.style.background = "rgb(71, 92, 36)";
    lunch.style.display = "flex";
    btn2.style.background = "rgb(33, 49, 6)";
    dinner.style.display = "none";
    btn3.style.background = "rgb(71, 92, 36)";
    specials.style.display = "none";
    btn4.style.background = "rgb(71, 92, 36)";
   dessert.style.display = "none";
   btn5.style.background = "rgb(71, 92, 36)";
});

btn3.addEventListener('click', () => {
    breakfast.style.display = "none";
    btn3.style.background = "rgb(33, 49, 6)"
    lunch.style.display = "none";
    btn2.style.background = "rgb(71, 92, 36)";
    dinner.style.display = "flex";
    btn1.style.background = "rgb(71, 92, 36)";
    specials.style.display = "none";
    btn4.style.background = "rgb(71, 92, 36)";
   dessert.style.display = "none";
   btn5.style.background = "rgb(71, 92, 36)";
});

btn4.addEventListener('click', () => {
    breakfast.style.display = "none";
    btn4.style.background = "rgb(33, 49, 6)"
    lunch.style.display = "none";
    btn2.style.background = "rgb(71, 92, 36)";
    dinner.style.display = "none";
    btn3.style.background = "rgb(71, 92, 36)";
    specials.style.display = "flex";
    btn1.style.background = "rgb(71, 92, 36)";
   dessert.style.display = "none";
   btn5.style.background = "rgb(71, 92, 36)";
});

btn5.addEventListener('click', () => {
    breakfast.style.display = "none";
    btn5.style.background = "rgb(33, 49, 6)"
    lunch.style.display = "none";
    btn2.style.background = "rgb(71, 92, 36)";
    dinner.style.display = "none";
    btn3.style.background = "rgb(71, 92, 36)";
    specials.style.display = "none";
    btn4.style.background = "rgb(71, 92, 36)";
   dessert.style.display = "flex";
   btn1.style.background = "rgb(71, 92, 36)";
});

