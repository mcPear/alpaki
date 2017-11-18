/**
 * Created by maciej on 18.11.17.
 */
var button;
var tryText;
var headerText;
var tryAgainText;
var alpacaImg;

function initializeRandomAlpacaTools(){
    initializeHeaderText();
    initializeButton();
    initializeAlpacaImg();
}

function initializeButton(){
    button = document.createElement("BUTTON");
    button.setAttribute("id", "button");
    button.setAttribute("style", "margin:0 auto;display:block;");
    tryText = document.createTextNode("Spróbuj");
    button.appendChild(tryText);
    button.addEventListener("click", onClick, false);
    document.body.appendChild(button);
}

function initializeHeaderText(){
    headerText = document.createElement("H2");
    headerText.setAttribute("id", "headerText");
    var innerText = document.createTextNode("Wylosuj swoja alpake");
    headerText.appendChild(innerText);
    document.body.appendChild(headerText);
}

function onClick() {
    draw();
    changeTryText();
}

function changeTryText() {
    tryAgainText = document.createTextNode("Spróbuj ponownie");
    button.replaceChild(tryAgainText, tryText);
}

function draw() {
    var imgNumber = Math.floor(1 + Math.random() * 5);
    alpacaImg.setAttribute("src", "../res/image/a" + imgNumber + ".jpg");
}

function initializeAlpacaImg(){
    alpacaImg = document.createElement("IMG");
    alpacaImg.setAttribute("id", "alpacaImg");
    alpacaImg.setAttribute("src", "../res/image/questionMark.png")
    alpacaImg.setAttribute("width", "50");
    alpacaImg.setAttribute("height", "50");
    alpacaImg.setAttribute("alt", "alpaca?");
    alpacaImg.setAttribute("style", "display:block;margin:auto;margin-top: 2em;margin-bottom: 2em");
    document.body.appendChild(alpacaImg);
}

initializeRandomAlpacaTools();
document.writeln("Wszelkie prawa zastrzeżone");
