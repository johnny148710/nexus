
// wait until DOM is ready
jQuery(function ($) {
    window.addEventListener("load", function(e) {
        gsap.to(".tower", {
            duration: 1,
            x: 0,
            y: 0,
            scale: 1,
            CSSRule: '100',
            transformOrigin:"top",
            scaleY: 1,
            ease:"power1.inOut"
        });
        
        gsap.to(".svg-icon path", {drawSVG:0, duration:2, stagger:0.1});
              
      // custom GSAP code goes here
       console.log("window loaded");
      
    }, false);
    
    //list as many as you'd like
    // gsap.registerPlugin(DrawSVGPlugin, CSSPlugin);
    // gsap.from(".tower", {height: 0 });

    gsap.to('.svg-icon path', {
        drawSVG:1,
        duration: 0.3,
        cssRule: {opacity: 1},
        ease: Power2.easeOut
    },'=-0.2');
    
    gsap.to(".svg-icon path", {drawSVG:0, duration:2, stagger:0.1});

});

