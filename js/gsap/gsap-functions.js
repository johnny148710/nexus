
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {

    import { gsap } from "gsap";

let moduleFunction = function() {

	'use strict';

	const hello = 'hello!';
	console.log(hello);
	window.hello = hello;

	gsap.set('body > div', {
		backgroundColor: '#333333'
	});

}

moduleFunction();

        //list as many as you'd like
    // gsap.registerPlugin(DrawSVGPlugin, CSSPlugin);
    // gsap.from(".tower", {height: 0 });

    gsap.to(".tower", {
        duration: 1,
        x: 0,
        y: 0,
        scale:1,
        cssRule: { height: 100 },
        transformOrigin:" top",
        scaleY: 1,
        ease:"power1.inOut"
    });

    // gsap.to('.svg-icon path', {
    //     drawSVG:1,
    //     duration: 0.3,
    //     cssRule: {opacity: 1},
    //     ease: Power2.easeOut
    // },'=-0.2');
    
    gsap.to(".svg-icon path", {drawSVG:0, duration:2, stagger:0.1});
    
  
    console.log("DOM loaded");
    
    // wait until images, links, fonts, stylesheets, and js is loaded
    window.addEventListener("load", function(e) {
      
      // custom GSAP code goes here
       console.log("window loaded");
      
    }, false);
    
  });
jQuery(document).ready(function($){
    //list as many as you'd like
    // gsap.registerPlugin(DrawSVGPlugin, CSSPlugin);
    // gsap.from(".tower", {height: 0 });

    // gsap.to(".tower", {
    //     duration: 1,
    //     x: 0,
    //     y: 0,
    //     scale:1,
    //     cssRule: { height: 100 },
    //     transformOrigin:" top",
    //     scaleY: 1,
    //     ease:"power1.inOut"
    // });

    // gsap.to('.svg-icon path', {
    //     drawSVG:1,
    //     duration: 0.3,
    //     cssRule: {opacity: 1},
    //     ease: Power2.easeOut
    // },'=-0.2');
    
    gsap.to(".svg-icon path", {drawSVG:0, duration:2, stagger:0.1});

});

