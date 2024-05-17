document.addEventListener('DOMContentLoaded', function() {
    /*==================== SHOW MENU ====================*/
    const navMenu = document.getElementById('nav-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navClose = document.getElementById('nav-close');

    /*===== OPEN MENU =====*/
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show-menu');
        });
    }

    /*===== CLOSE MENU =====*/
    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('show-menu');
        });
    }

    /*==================== CERRAR EL ELEMENTO DE NAVEGACIÓN DEL MENÚ HACER CLIC ====================*/
    function linkAction() {
        if (this.scrollY >= 100) navMenu.classList.add('scroll-header');
        else navMenu.classList.remove('scroll-header');
    }

    const navLink = document.querySelectorAll('.nav_link');
    navLink.forEach(n => n.addEventListener('click', linkAction));

    /*==================== AGREGAR SOMBRAS AL ENCABEZADO ====================*/
    function scrollHeader() {
        const header = document.getElementById('header');
        if (window.scrollY >= 50) {
            header.classList.add('scroll-header');
        } else {
            header.classList.remove('scroll-header');
        }
    }

    window.addEventListener('scroll', scrollHeader);

    /*==================== TESTIMONIAL SWIPER ====================*/
    let swiper = new Swiper('.testimonial_container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        spaceBetween: 32,
        coverflowEffect: {
            rotate: 0,
        },
    });

    /*==================== MOSTRAR DESPLAZARSE HACIA ARRIBA ====================*/
    function scrollUp() {
        const scrollUp = document.getElementById('scroll-up');
        if (window.scrollY >= 200) {
            scrollUp.classList.add('show-scroll');
        } else {
            scrollUp.classList.remove('show-scroll');
        }
    }
    window.addEventListener('scroll', scrollUp);

    /*==================== SECCIÓN ACTUAL ENLACE ACTIVO ====================*/
    const sections = document.querySelectorAll('section[id]');
    function scrollActive() {
        const scrollY = window.pageYOffset;
        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 150;
            const sectionId = current.getAttribute('id');
            const sectionLink = document.querySelector('.nav_menu a[href*=' + sectionId + ']');

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                if (sectionLink) {
                    sectionLink.classList.add('active-link');
                }
            } else {
                if (sectionLink) {
                    sectionLink.classList.remove('active-link');
                }
            }
        });
    }
    window.addEventListener('scroll', scrollActive);

    /*==================== ANIMACIÓN DE REVELACIÓN DE DESPLAZAMIENTO ====================*/
    const sr = ScrollReveal({
        distance: '60px',
        duration: 2800,
        reset: true,
    });

    sr.reveal('.home_data, .home_social-link, .home_img, .service_card-title, .testimonial_container,.experience_data, .esperience_overlay, .project_card, .footer_card, .footer_data, .footer_title, .footer_social-container', {
        origin: 'top',
        interval: 100,
    });

    sr.reveal('.about_data, .contact_data', {
        origin: 'left',
    });

    sr.reveal('.about_img-overlay, .contact_content', {
        origin: 'right',
        interval: 100,
    });


});