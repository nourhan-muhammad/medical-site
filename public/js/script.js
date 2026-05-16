// Scroll To Top

const scrollTopBtn = document.getElementById("scrollTopBtn");

window.onscroll = function () {

    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {

        scrollTopBtn.style.display = "block";

    } else {

        scrollTopBtn.style.display = "none";

    }

};

scrollTopBtn.onclick = function () {

    window.scrollTo({

        top: 0,
        behavior: "smooth"

    });

};

// Product Search

function searchProducts(){

    let input = document
        .getElementById("searchInput")
        .value
        .toLowerCase();

    let cards = document.querySelectorAll(".product-item");

    cards.forEach((card)=>{

        let title = card
            .querySelector("h4")
            .innerText
            .toLowerCase();

        if(title.includes(input)){

            card.style.display = "block";

        }else{

            card.style.display = "none";

        }

    });

}