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
              <a class="text-light" href="" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
              <a class="text-light" href="" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
              <a class="text-light" href="" target="_blank"><i class="fab fa-tiktok fa-sm fa-fw me-2"></i></a>
              <a class="text-light" href="" target="_blank"><i class="fab fa-youtube fa-sm fa-fw"></i></a>
          </div>
      </div>
  </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-light shadow">
  <div class="container d-flex justify-content-between align-items-center">

      <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
        <img src="{{asset('user/img/logo.svg')}}" width="" height="30" alt="">
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
          <div class="flex-fill">
              <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
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
          <div class="navbar align-self-center d-flex">
              <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                <form action="" method="get" class="modal-content modal-body border-0 p-0">
                  <div class="input-group mb-2 mt-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Mau pesan apa?" />
                    <button type="submit" class="input-group-text bg-success text-light">
                      <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                  </div>
                </form>
              </div>
              <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                  <i class="fa fa-fw fa-search text-dark mr-2"></i>
              </a>
              <a class="nav-icon position-relative text-decoration-none" href="#">
                  <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
              </a>
              {{-- <a class="nav-icon position-relative text-decoration-none" href="#">
                  <i class="fa fa-fw fa-user text-dark mr-3"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
              </a> --}}
          </div>
      </div>

  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="templatemo_search" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cari Makanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                  <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Mau pesan apa?" />
                  <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                  </button>
                </div>
              </form>
        </div>
        
      </div>
    </div>
  </div>