function zad2() {
    var imageList = document.images;
    var linkList = document.links;
    var formList =  document.forms;
    var anchorList = document.anchors;
    var headText = document.getElementById("headText");
    var newElement = document.createElement("span");
    var newText = document.createTextNode("Na stronie znajduje sie "+imageList.length+" obrazów, "+linkList.length
        +" linków, "+formList.length+" formularzy, "+anchorList.length+" kotwic");

    newElement.appendChild(newText);
    headText.appendChild(newElement);
}

window.addEventListener("load",zad2,false);