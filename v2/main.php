<html>
<head>
<style>
</style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <body>
        <p id="fyou">For you</p>
        <p id="popul">Popular</p>
        <p class="result"></p>
    <script>
        $.get( "scripts/backend.php", function( data ) {
  $( ".result" ).html( data );
});
    </script>
    </body>


</html>