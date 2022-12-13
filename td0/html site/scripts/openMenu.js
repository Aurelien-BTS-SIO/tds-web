const button = document.getElementById('toClose')
const openbtn = document.getElementById('openBtn')

console.log(button)
let btnClose = false;

button.addEventListener("click", close);
openbtn.addEventListener("click", open);

function close() {
    document.getElementById("mySidenav").style.display = "none";
}

function open() {
    document.getElementById("mySidenav").style.display = "inline-block";
}