<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/style.css">
    
</head> 
<bodY style="background-color:#f1f1f1">
    
    <!--  INICIO DO  NAV-->
    

<div class="col s12 m4 l3 blue"> <!-- Note that "m4 l3" was added -->
  <!-- Grey navigation panel

        This content will be:
    3-columns-wide on large screens,
    4-columns-wide on medium screens,
    12-columns-wide on small screens  -->

</div>

<div class="col s12 m8 l9 black"> <!-- Note that "m8 l9" was added -->
  <!-- Teal page content

        This content will be:
    9-columns-wide on large screens,
    8-columns-wide on medium screens,
    12-columns-wide on small screens  -->

</div>

</div>
    <!-- FIM FOOTER -->

     <!--  Scripts-->
    
    
    <script src="../jquery/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script>
        var elem = document.querySelector('.sidenav');
        var instance = M.Sidenav.init(elem, options);

        // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
        // var collapsibleElem = document.querySelector('.collapsible');
        // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

        // Or with jQuery

        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
            
  </script>
  <script>
    /* initialize floating buttons */
    $(document).ready(function(){
        $('.fixed-action-btn').floatingActionButton();
    });
    var elem = document.querySelector('.fixed-action-btn');
    var instance = M.FloatingActionButton.init(elem, {
        direction: 'left'
    });
  </script>


</body>
</html> 