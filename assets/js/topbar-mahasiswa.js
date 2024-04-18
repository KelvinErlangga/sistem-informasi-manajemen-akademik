document.addEventListener("DOMContentLoaded", function () {
    // Fetch the dropdown element
    var userDropdown = document.getElementById("userDropdown");

    // Add a click event listener to toggle the dropdown
    userDropdown.addEventListener("click", function () {
        var dropdownMenu = userDropdown.querySelector(".dropdown-menu");
        dropdownMenu.classList.toggle("show");
    });

    // Close the dropdown if the user clicks outside of it
    window.addEventListener("click", function (event) {
        if (!event.target.matches("#userDropdown")) {
            var dropdownMenu = userDropdown.querySelector(".dropdown-menu");
            if (dropdownMenu.classList.contains("show")) {
                dropdownMenu.classList.remove("show");
            }
        }
    });
});
