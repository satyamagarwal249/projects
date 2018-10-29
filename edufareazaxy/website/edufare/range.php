<!doctype html>
 <html lang="en">
  <head>
   <meta charset="utf-8">
   <title>jQuery UI Slider - Range slider</title>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
   <script src="//code.jquery.com/jquery-1.9.1.js"></script>
   <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script>
    $(function() {
     $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500],
      slide: function( event, ui ) {
       $( "#mi" ).val( "$" + ui.values[ 0 ] );
	   $( "#ma" ).val( "$" + ui.values[ 1] );
      }
    });

    $( "#mi" ).val(   $( "#slider-range" ).slider( "values", 0 ) );
	$( "#ma" ).val(  $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
 </head>
 <body>
 
<div style="width:25%">
  <p>
   <label for="amount">Price range:</label>
   <input type="text" size="2" id="mi"  name="min" style="border:0; color:#f6931f; font-weight:bold;">
   <input type="text" size="2" id="ma"  name="max" style="border:0; color:#f6931f; font-weight:bold;">
  </p>
  <div id="slider-range"></div>
  </div>
  </div>
 </body>
</html>