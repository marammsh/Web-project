function toggleNightMode() {
    document.body.classList.toggle("night-mode");
}

function filterRegions() {
    var selectedCategory = document.getElementById("categoryFilter").value;
    var cards = document.getElementsByClassName("region-card");

    for (var i = 0; i < cards.length; i++) {
        var cardCategory = cards[i].getAttribute("data-category");

        if (selectedCategory === "all" || selectedCategory === cardCategory) {
            cards[i].style.display = "block";
        } else {
            cards[i].style.display = "none";
        }
    }
}