var alpacaImg;
var button = document.getElementById("button");
button.addEventListener("click", draw, false);
var alpacaImg = document.getElementById("alpacaImg");

function draw() {
    var imgNumber = Math.floor(1 + Math.random() * 5);
    alpacaImg.setAttribute("src", "../res/image/a" + imgNumber + ".jpg");
}

document.writeln("Wszelkie prawa zastrzeżone");
document.getElementById("drawText").innerHTML = "Wylosuj swoja alpake";