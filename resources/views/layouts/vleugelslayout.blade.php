<!doctype html>
<html data-theme="dark" 
      lang="{{ str_replace('_','-', app()->getLocale()) }}">
 
  <head data-theme="pastel">
    @include('layouts.basislayout')
  </head>
  <body>
    <div data-theme="lofi" id="app" class="container-fluid"
         style="width:100%">
      @include('partials.navbar')
             
      <main class="container-fluid" style="width:100%">
        @yield('content')
      </main>
    </div>
    @include('layouts.footer')
  </body>
</html>