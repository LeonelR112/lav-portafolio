document.addEventListener('DOMContentLoaded', e => {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

    new Splide('#cert_splide', {
        type: 'slide',
        autoplay: false,
        interval: 5000,
        nearby: 'nearby',
        perPage: 3,
        pagination : false,
        breakpoints: {
            550 :{
                perPage : 1
            },
            820 :{
                perPage: 2
            },
            1300: {
                perPage: 3
            },
            2000: {
                perPage: 4
            }
        }
    } ).mount();

    $('.background-1').parallax({
        imageSrc: URL_BG1,
        speed : 0.5
    });
})

window.addEventListener('scroll', e => {
    let navbar = document.getElementById('main-navbar');
    if(window.scrollY > 500){
        navbar.classList.add("fondo-blur");
        navbar.classList.remove("bg-primary");
    }
    else{
        navbar.classList.add("bg-primary");
        navbar.classList.remove('fondo-blur');
    }
})