<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>One</title>
    </head>
   <style> body{margin:9; padding:0;}</style>
<body class="antialiased">
    @include('css.indexCss') <!--this is css link blade-->
   
<div class ='page-container'>
    


    <main>
        @include('layouts\components\sslider')
        @include('layouts\components\states')
        @include('layouts\components\building-block')
        @include('layouts\components\features')
        @include('layouts\components\partnership')
        <!-- building block -->
        @include('layouts\components\Footer')
        <!-- @include('layouts\components\video-effect') -->
        @include('layouts\components\navbar')
    
</main>
                
</div>
         <!-- javascript for menue -->
        <script> function openNav() { document.getElementById("menue_icon").style.width = "100%"; } function closeNav() { document.getElementById("menue_icon").style.width = "0%"; }</script>
        <!-- javascript for menue  -->
</body>
<html>