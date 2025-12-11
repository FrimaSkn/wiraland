// import splidejs slider
import { Splide } from '@splidejs/splide';
import '@splidejs/splide/css';

function ifexists(selector, callback) {
    const elements = document.querySelectorAll(selector);
    if (elements.length > 0) {
        callback(elements);
    }
}


ifexists('.banner_slider', (elements) => {
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
});

ifexists('.partner_slider', (elements) => {
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
                perPage: 3,
            },
        },
    });
    partnerSlider.mount();
});

ifexists('.portfolio_slider', (elements) => {
    let options = {
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
    };

    let portfolioSlider = new Splide('.portfolio_slider', options);
    portfolioSlider.mount();

    document.addEventListener('reinitSlider', () => {
        portfolioSlider.destroy();
        new Splide('.portfolio_slider', options).mount();
    });
});


ifexists('.testimonial_slider', (elements) => {
    let testimonialSlider = new Splide('.testimonial_slider', {
        type       : 'loop',
        perPage    : 1,
        padding    : '25vw',
        gap        : '1rem',
        autoplay   : true,
        interval   : 8000,
        pauseOnHover: false,
        pauseOnFocus: false,
        pagination: false,
        arrows: false,
        breakpoints: {
            1024: {
                padding: '15vw',
            },
            768: {
                padding: '10vw',
            },
            480: {
                padding: '2vw',
            },
        },
    });
    testimonialSlider.mount();
});
