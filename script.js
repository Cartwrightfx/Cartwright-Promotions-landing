const body = document.querySelector(".bdg");
const button = document.querySelector(".btn");
const text = document.getElementsByTagName("h2")
const div = document.getElementsByTagName("div")

button.addEventListener('click',dark);
function dark() {
    document.body.style.backgroundColor = "black";
    document.body.style.color = "white";
}

button.addEventListener('click', light);
function light() {
    document.body.style.backgroundColor = 'rgb(235, 235, 235)';
    document.body.style.color = 'black';
}
