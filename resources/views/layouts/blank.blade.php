<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<body>

    <div id="app">
      @yield('content')
    </div>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123989535-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-123989535-1');
    </script>
    @yield('scripts')

</body>
</html>
