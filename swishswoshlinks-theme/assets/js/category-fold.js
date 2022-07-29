let categoryHeaders = document.querySelectorAll(".section-header");
let categoryDropdowns = document.querySelectorAll(".section-header--dropdown");

let categoryState = [];

let linkWrapper = document.querySelectorAll(".link-section");
let linkLoaded = [];

//Event listeners
for(let i = 0; i < categoryHeaders.length; i++) {
    categoryHeaders[i].addEventListener("click", toggleCategory);
    categoryState.push(0);
    linkLoaded.push(0);
}

function toggleCategory(e) {
    let dropdownIcon = e.composedPath()[1].childNodes[3];
    let categoryNumber = e.composedPath()[1].attributes[1].value;
    
    if (categoryState[categoryNumber] == 1) {
        categoryState[categoryNumber] = 0;
        dropdownIcon.style.transform = "scaleY(-1)";

        linkWrapper[categoryNumber].style.display = "none";
        return;
    }

    categoryState[categoryNumber] = 1;
    dropdownIcon.style.transform = "";
    linkWrapper[categoryNumber].style.display = "flex";
}