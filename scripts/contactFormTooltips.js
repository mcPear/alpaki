/**
 * Created by maciej on 28.11.17.
 */
var nameInp = document.getElementById("firstName")
var lastName = document.getElementById("lastName");
var email = document.getElementById("email");
var content = document.getElementById("content");

var tooltip;

nameInp.addEventListener("focus", function(event) {showTooltip(event, "Wystarczy pierwsze imię")}, false);
lastName.addEventListener("focus", function(event) {showTooltip(event, "Najlepiej pełne nazwisko")}, false);
email.addEventListener("focus", function(event) {showTooltip(event, "Pamiętaj aby email był poprawny")}, false);
content.addEventListener("focus", function(event) {showTooltip(event, "Napisz dlaczego chcesz się z nami skontaktować.")}, false);

nameInp.addEventListener("blur", function(event) {hideTooltip(event)}, false);
lastName.addEventListener("blur", function(event) {hideTooltip(event)}, false);
email.addEventListener("blur", function(event) {hideTooltip(event)}, false);
content.addEventListener("blur", function(event) {hideTooltip(event)}, false);

function hideTooltip(event){
    var inpName = event.target;
    inpName.parentNode.removeChild(tooltip);
}

function showTooltip(event, tip){
    var nameInput = event.target;
    var toolTipDiv = document.getElementById(nameInput.attributes.getNamedItem("name").nodeValue+"Div");
    var toolTipTextSpan = document.createElement("P");
    toolTipTextSpan.style.backgroundColor = "bisque";
    toolTipTextSpan.style.color = "rgba(0, 0, 0, 0.6)";
    var toolTipText = document.createTextNode(tip);
    toolTipTextSpan.appendChild(toolTipText);
    toolTipDiv.appendChild(toolTipTextSpan);

    var inpName = event.target;
    inpName.parentNode.appendChild(toolTipTextSpan);
    tooltip = toolTipTextSpan;
}
