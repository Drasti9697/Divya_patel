window.addEventListener("scroll", function(){
    var header = this.document.querySelector('header')
    header.classList.toggle("sticky", window.scrollY > 0);
   

    const scrollTo = ele => {
        ele.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      };
})


$(document).on('click', 'ul li', function(){
    $(this).addClass('active').siblings().removeClass('active').scroll()
     
} )
$('a[href^="#"]').on('click', function (e) {
    
            e.preventDefault();
    
            $(document).off("scroll");
    
             
    
            $('a').each(function () {
    
                $(this).removeClass('active');
    
            })    
        $(this).addClass('active');
    
             var target = this.hash,
    
             menu = target;
    
            $target = $(target);
    
                   
    
           $('html, body').stop().animate({
    
                'scrollTop': $target.offset().top+2
    
            }, 600, 'swing', function () {
    
                window.location.hash = target;
    
                $(document).on("scroll", onScroll);
    
            });
       });
    


var typed = new Typed('.typer-title', {
    strings: [
        "i'm ui/ux designer", 
        "i'm Web Developer",
        "LET'S WORK TOGETHER"
    ],
    typeSpeed: 60,
    startDelay: 0,
    loop:true,
    endless: true,
    cursorChar: ' ',
    backDelay: 1000
    
  });