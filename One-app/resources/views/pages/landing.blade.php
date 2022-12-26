<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>One</title>

        <!-- Fonts
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
          -->
          <style>
            body {
                font-family: 'Nunito', sans-serif;
                margin:0;
                padding:0;
            }
        </style>
    </head>
    <body class="antialiased">
    @component('layouts.components.navbar')
    @endcomponent
    @component('layouts.components.small-slider')
    @endcomponent
    @component('layouts.components.state-status')
    @endcomponent

  
    
     </body>
</html>
