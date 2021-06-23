// scrollFire




   
 $(document).ready(function){




var options = [  {selector: '#img1', offset: 200, callback: $(this).addClass("animated fadeinLeft") },

                 {selector: '#img2', offset: 100, callback: function(el) { Materialize.fadeInImage($(el)); } } 

                 {selector: '#img3', offset: 150, callback: function(el) { Materialize.fadeInImage($(el)); } } 

                 {selector: '#img4', offset: 200, callback: function(el) { Materialize.fadeInImage($(el)); } }

                 {selector: '#img5', offset: 250, callback: function(el) { Materialize.fadeInImage($(el)); } }




 ]; Materialize.scrollFire(options); 


});
// scrollFire




