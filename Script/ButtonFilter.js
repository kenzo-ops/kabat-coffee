const filterButtons = document.querySelectorAll(".filter-buttons button");
const filterableCards = document.querySelectorAll(".filtered-card .carda");

const filterCards = e => {
    document.querySelector(".activer").classList.remove("activer");
    e.target.classList.add("activer");

    filterableCards.forEach(carda => {
        carda.classList.add("hide");
        if(carda.dataset.name === e.target.dataset.name || e.target.dataset.name === "all") {
            carda.classList.remove("hide");
        }
    });
};

filterButtons.forEach(button => button.addEventListener("click", filterCards));