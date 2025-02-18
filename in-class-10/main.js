const divContainer = document.getElementById("container");

divContainer.addEventListener("click", function() {
    divContainer.innerText = "added text!";
    divContainer.style.backgroundColor = "yellow";
    divContainer.style.color = "black"
});