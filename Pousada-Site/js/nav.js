 $(document).ready(function(){
      $('.carousel').carousel();
    });
     
         $(document).ready(function(){
    
        var tam = $('#outro').height();
        var tammeio = tam/2;
        
        var altera = $("#altera");


         $(window).scroll(function() {

            if($(window).scrollTop() > 380) {
              altera.removeClass("container").addClass("container-fluid");
              altera.css({"background-color" : "#ffb74d "}); 
              altera.css({"transition" : "0.1s"}); 
              $('a').css({"color" : "#fff !important"});

            } else {

              altera.removeClass("container-fluid").addClass("container");
              altera.css({"background-color" : "transparent"});
              altera.css({"transition" : "0.1s"});
            }
          });

   });