 $(window).ready(function () {

     $(".button-collapse").sideNav();


     // navbar mobile 

     $('.carousel.carousel-slider').carousel({
         fullWidth: true
     });




     // abrir modal
     $(document).ready(function () {

         $('.modal').modal();
     });
     // abrir modal





     // dropdown
     $(document).ready(function () {
         $('select').material_select();
     });
     // dropdown






     $(document).ready(function () {
         $('.parallax').parallax();
     });





     $(document).ready(function () {
         $('.slider').slider({
             height: 730,
             indicators: false
         });
     });




     // tabs  

     $(document).ready(function () {
         $('ul.tabs').tabs({});
     });



     // tabs   


     // dataform
     $('.datepicker').pickadate({
         selectMonths: true, // Creates a dropdown to control month
         selectYears: 15, // Creates a dropdown of 15 years to control year,
         today: 'Today',
         clear: 'Clear',
         close: 'Ok',
         closeOnSelect: false // Close upon selecting a date,
     });
     // dataform






 });
