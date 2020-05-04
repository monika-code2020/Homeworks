
var buttonToggle = document.querySelector(".toggleButton");


buttonToggle.addEventListener("click", dropDownMenu);

function dropDownMenu(){
    var icon = document.querySelector("i");
    icon.setAttribute("class","fas fa-plus-circle");

    var element = document.querySelectorAll(".menu-item"); // with querySelectorAll return NodeList
    var elementsArr = Array.prototype.slice.call(element); // with this method convert NodeList to Array

    for(var i=0; i<elementsArr.length ;i++){               
        if (elementsArr[i].style.display === "none") {
            elementsArr[i].style.display = "block";
            icon.setAttribute("class","fas fa-minus-circle");

      } else {
        elementsArr[i].style.display = "none";
        icon.setAttribute("class","fas fa-minus-circle");
      }
    };
};