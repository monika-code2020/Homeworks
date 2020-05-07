
var modal = document.querySelector("#myModal");

var btnSignUp = document.querySelector("#signUp");

var close = document.querySelector(".close");

btnSignUp.addEventListener("click",showModal);

close.addEventListener("click", hideModal);

function showModal() {
  modal.style.display = "block";
}

function hideModal() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}  

