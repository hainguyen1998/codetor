<!DOCTYPE html>
<html lang="en">
<body>
    <a>jQuery.com</a>
    <a>jQuery.vn</a>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>   (function ($) {
       // Using DOM node properties to set the title attribute      
       $('a').get(1).title = 'jQuery.com';
       //$('a').get(0).title = 'jQuery.com'; 
       //$('a')[0].title = 'jQuery.com'
       // Manipulation of DOM element using jQuery methods      
       $('a').attr('href', 'http://www.jquery.com');
   })(jQuery);
    </script>
</body>
</html>