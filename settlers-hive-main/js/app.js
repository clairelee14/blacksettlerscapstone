document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");
    const headerContainer = document.querySelector(".header-container");
    const more = document.querySelector(".more");

    // Detect window size on load and remove or add "header-container-reset" class accordingly
    if (window.innerWidth >= 750) {
        headerContainer.classList.remove("header-container-reset");
    } else {
        headerContainer.classList.add("header-container-reset");
    }

    toggleBtn.addEventListener('click', () => {
        menu.classList.toggle("showNav");
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            menu.classList.remove("showNav");
        }
    });

    more.addEventListener('click', () => {
        menu.classList.toggle("autoHeight");
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1053) {
            menu.classList.remove("autoHeight");
        }

        // Remove or add "header-container-reset" class based on window size
        if (window.innerWidth >= 750) {
            headerContainer.classList.remove("header-container-reset");
        } else {
            headerContainer.classList.add("header-container-reset");
        }
    });

    //smooth scroll 
    // Get all the anchor links that point to a section
        const sectionLinks = document.querySelectorAll('a.section-link');

        // Add an event listener to each link
        sectionLinks.forEach(link => {
            link.addEventListener('click', event => {
                event.preventDefault();

                // Get the section to scroll to
                const sectionId = link.getAttribute('href');
                const section = document.querySelector(sectionId);

                // Scroll smoothly to the section
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

});
