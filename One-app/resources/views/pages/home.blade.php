<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>One homePage</title>
    </head>
   <style> body{margin:9; padding:0;}</style>
<body class="antialiased">
    @include('css.homeCss') <!--this is css link page-->
   
<div class ='page-container'>
    
    <nav>
        <section class="h-logo-section">
            <img src="images/ONE-logo-black.png" alt="h-logo">
        </section>
        <section class="menue">
            <button class="btn">DOWNLOAD REPORT</button>
            <ul class="menue-list">
                <li><a href="#" class="menue-item">HOME</a></li>
                <li><a href="#" class="menue-item">ABOUT REPORT</a></li>
                <li><a href="#" class="menue-item">DATA & DOCUMENTATION</a></li>
            </ul>
        </section>
        <section class="h-toggle-section">
            <button class="btn">DOWNLOAD REPORT</button>
            <span class='toggle-icon' onclick="openNav()">&#9776; </span>
            <div id="menue_icon" class="overlay"><a href="javascript:void(0)" class="closebtn"
                    onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="#">HOME</a>
                    <a href="#">ABOUT REPORT</a>
                    <a href="#">DATA & DOCUMENTATION</a>
        </section>
    </nav>

    <main>
    @include('layouts\components\sslider')
    @include('layouts\components\states')
    @include('layouts\components\building-block')
    @include('layouts\components\features')
    @include('layouts\components\partnership')
    <!-- building block -->
    @include('layouts\components\Footer')
    
</main>
                
</div>
         <!-- javascript for menue -->
        <script> function openNav() { document.getElementById("menue_icon").style.width = "100%"; } function closeNav() { document.getElementById("menue_icon").style.width = "0%"; }</script>
        <!-- javascript for menue  -->

   
    



   









</body>
<html>