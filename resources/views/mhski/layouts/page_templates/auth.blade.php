<div class="wrapper ">
  @include('mhski.layouts.navbars.sidebar')
  <div class="main-panel">
    @include('mhski.layouts.navbars.navs.auth')
    @yield('content')
    @include('mhski.layouts.footers.auth')
  </div>
</div>