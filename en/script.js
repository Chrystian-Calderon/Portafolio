document.addEventListener("DOMContentLoaded", () => {
    let widthWindow = window.screen.width;
    let nav = document.querySelector(".nav");

    if (widthWindow < 425) {
        let titleName = document.querySelector(".title-name");
        titleName.style.display = "none";
        nav.style.top = -250 + "px";
    }

    // When you click on the header menu
    let hamburger = document.querySelector(".nav-hamburger");
    hamburger.addEventListener('click', () => {
        nav.style.display = "block";
        if (parseInt(nav.style.top) < 0) {
            nav.style.top = 50 + "px";
        } else {
            nav.style.top = -250 + "px";
        }
    });

    // When you click on the menu options
    let options = document.querySelectorAll(".option");
    options.forEach(option => {
        option.addEventListener('click', () => {
            nav.style.top = -250 + "px";
        });
    });

    // show message
    let messageDOM = document.querySelector(".message");
    if (messageDOM !== null) {
        messageDOM.style.top = "10px";
        let timeMessage = setInterval(function () {
            messageDOM.style.top = "-100px";
        }, 5000);
    }

    // show language
    let divLanguage = document.getElementById("selectLanguage");
    let ulLanguage = document.querySelector("#selectLanguage > ul");
    divLanguage.addEventListener("click", () => {
        if (ulLanguage.classList.contains("visible")) {
            ulLanguage.classList.remove("visible");
        } else {
            ulLanguage.classList.add("visible");
        }
    });
    document.addEventListener("click", (e) => {
        console.log(e)
    });
});