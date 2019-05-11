<!doctype html>
  @include('partials.head')
  <body>
    @include('partials.header')
    <div class="wrap container">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @include('partials.footer')
  </body>
</html>
