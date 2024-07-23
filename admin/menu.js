document.addEventListener("DOMContentLoaded", function() {
    var menuButton = document.querySelector(".menu-button");
    var menuContent = document.querySelector(".menu-content");

    menuButton.addEventListener("click", function() {
        if (menuContent.style.display === "block") {
            menuContent.style.display = "none";
        } else {
            menuContent.style.display = "block";
        }
    });

    window.addEventListener("click", function(event) {
        if (!event.target.matches('.menu-button')) {
            if (menuContent.style.display === "block") {
                menuContent.style.display = "none";
            }
        }
    });
});
