<nav class="navbar p-0 fixed-top d-flex flex-row" style="background-color:#ffff;left:237px">
  <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg"
        alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav w-100">

    </ul>
    <ul class="navbar-nav navbar-nav-right">
      

      <li>
        <form method="post" action="{{route('logout')}}">
          @csrf
          <!-- <input type="submit" value="logout" class="btn btn-primary"> -->
          <button class="btn btn-primary">LOGOUT</button>
        </form>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="mdi mdi-format-line-spacing"></span>
    </button>
  </div>
</nav>