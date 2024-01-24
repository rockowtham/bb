<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Books Collection</title>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
<link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body style="overflow: auto;">
  
    @include('web.partials.header')
    <div id="app" data-v-app="">
        @include('web.partials.navigation',['menu'=> $menu])
        @yield('content')
    </div>
    @include('web.partials.secondfooter')
    @include('web.partials.footer')

  </body>
</html>