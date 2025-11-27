// import splidejs slider
import { Splide } from '@splidejs/splide';
import '@splidejs/splide/css';

// if exist
if (document.querySelector('.splide')) {
    // import splidejs slider for banner slider
    let bannerSlider = new Splide('.banner_slider', {
        type       : 'loop',
        perPage    : 1,
        autoplay   : true,
        interval   : 7000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });

    bannerSlider.mount();


    // import splidejs slider for partner slider
    let partnerSlider = new Splide('.partner_slider', {
        type       : 'loop',
        perPage    : 5,
        gap        : '1rem',
        autoplay   : true,
        interval   : 5000,
        pauseOnHover: false,
        pauseOnFocus: false,
        breakpoints: {
            1024: {
                perPage: 4,
            },
            768: {
                perPage: 3,
            },
            480: {
                perPage: 2,
            },
        },
    });

    partnerSlider.mount();


    let portfolioSlider = new Splide('.portfolio_slider', {
        type       : 'loop',
        perPage    : 3,
        gap        : '1rem',
        autoplay   : true,
        padding    : { right: '.5rem', left: '.5rem' },
        interval   : 6000,
        pauseOnHover: false,
        pauseOnFocus: false,
        pagination: false,
        breakpoints: {
            768: {
                perPage: 2,
            },
            480: {
                perPage: 1,
            },
        },
    });

    portfolioSlider.mount();
}
