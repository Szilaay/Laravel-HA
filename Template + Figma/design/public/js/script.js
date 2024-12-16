document.addEventListener("DOMContentLoaded", function () {
    const downButton = document.querySelector(".down-button");
    downButton.classList.add("animate");
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
}

document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
});

document.addEventListener("DOMContentLoaded", function () {
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1,
    };
    
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const heading = element.querySelector("h2").innerText;

                // Késleltetés milliszekundumban (pl. 300 ms)
                const delay = 500; 

                setTimeout(() => {
                    if (heading === "Új év, új lehetőségek!" || heading === "Itt talál meg bennünket!") {
                        element.classList.add("slide-in-left");
                    } else {
                        element.classList.add("slide-in-right");
                    }
                }, delay);

                observer.unobserve(element);
            }
        });
    }, options);

    const elements = document.querySelectorAll(".p-md-3.p-xl-5.mt-4.mt-md-0");

    elements.forEach((element) => {
        observer.observe(element);
    });
});

window.onscroll = function() {
    var indicator = document.getElementById("scroll-indicator");
    var scrollTop = window.scrollY; // A görgetés mértéke
    var docHeight = document.body.scrollHeight - window.innerHeight; // Az oldal teljes magassága
    var scrollPercent = (scrollTop / docHeight) * 100; // A görgetés hány százalékát tetted meg

    indicator.style.width = scrollPercent + '%'; // A csík szélessége
};

document.addEventListener("DOMContentLoaded", function() {
    const lazyImages = document.querySelectorAll('img.lazy');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.classList.remove('lazy');
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => {
        observer.observe(img);
    });
});