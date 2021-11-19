<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sistema bar</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/formpdv.css')}}">
        <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{ asset('css/modalProd.css')}}">  
        <link rel="stylesheet" href="{{ asset('css/pdv_form.css')}}">
        <link rel="stylesheet" href="{{ asset('css/listarProdutos.css')}}">
  
    <!-- Fonts -->

   @livewireStyles 


</head>

<body>


  <!--  @yield('content') -->

    @livewireScripts 
    
    <script src="js/app.js"></script>
    <script src="js/bootstrap.js"></scri>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Bundle with Popper  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
     <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>
