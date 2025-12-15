import './bootstrap';
import './slider';

// import videojs
import 'video.js/dist/video-js.min.css';
import videojs from 'video.js';
window.videojs = videojs;

// import aos
import AOS from 'aos';
AOS.init({
    duration: 600,
    once: true
});
