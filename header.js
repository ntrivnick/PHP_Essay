// get the container element
let jumbotronContainer = document.getElementById("navLinks");

// get all items with class="nav-item" inside the container
let jumbotronLinks = jumbotronContainer.getElementsByClassName("nav-item");

// Loop through the nav-items and add the active class to the current/clicked item/link
for (let i = 0; i < jumbotronLinks.length; i++) {
    jumbotronLinks[i].addEventListener("click", function () {
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}