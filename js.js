AOS.init({
    delay: 100,
    duration: 800, 
    easing: 'ease',
    once: true,
    mirror:false
});








document.addEventListener('DOMContentLoaded', function() {

        var x = screen.width;
    
        
        
        if (x< 993){
            document.getElementById('demoo').removeAttribute("data-aos");
            document.getElementById('demo1').removeAttribute("data-aos");
            document.getElementById('demo2').removeAttribute("data-aos");
            document.getElementById('demo3').removeAttribute("data-aos");
            document.getElementById('demo4').removeAttribute("data-aos");
            document.getElementById('demo5').removeAttribute("data-aos");
            document.getElementById('demo6').removeAttribute("data-aos");
            document.getElementById('demo7').removeAttribute("data-aos");


        }
    // comsole.log(x)


 }, false);



