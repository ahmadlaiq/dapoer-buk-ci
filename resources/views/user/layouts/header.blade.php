<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top" style="">
  <div class="container text-light">
      <div class="w-100 d-flex justify-content-between">
          <div>
              <i class="fa fa-envelope mx-2"></i>
              <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:dapoerbuci@gmail.com">dapoerbuci@gmail.com</a>
              <i class="fa fa-phone mx-2"></i>
              <a class="navbar-sm-brand text-light text-decoration-none" href="tel:0812-3562-4746">0812-3562-4746</a>
          </div>
          <div>
              <a class="text-light" href="https://www.facebook.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
              <a class="text-light" href="https://www.instagram.com/iirma.st" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
              <a class="text-light" href="" target="_blank"><i class="fab fa-tiktok fa-sm fa-fw me-2"></i></a>
              <a class="text-light" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube fa-sm fa-fw"></i></a>
          </div>
      </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light shadow ">
  <div class="container d-flex justify-content-between align-items-center">

      <a class="" href="/">
        <img src="{{asset('user/img/logo.svg')}}" width="" height="30" alt="">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="templatemo_main_nav">
          <div class="flex-fill">
              <ul class="nav navbar-nav d-flex justify-content-between ml-lg-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.kategori') }}">Kategori</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.promo') }}">Promo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.cekongkir') }}">Cek Ongkir</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.contactus') }}">Contact Us</a>
                  </li>
              </ul>
          </div>
          </div>
      </div>
  </div>
</nav>