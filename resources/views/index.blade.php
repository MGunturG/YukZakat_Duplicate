<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="{{ asset('css/sites/bootstrap.min.css') }}"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- FONT LATO -->
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('css/sites/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('img/sites/logo-ipb.png') }}" />
    <title>Beranda</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a href="#">
          <img
            src="{{ asset('img/sites/logo.png') }}"
            alt="logo"
            class="logo"
          />
        </a>
        <a class="navbar-brand pl-3" href="/">YUKZAKAT</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link active" href="#">
              Beranda
            </a>
            <li class="nav-item dropdown">
              <a
                class="nav-link"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Zakat
                <i class="fa fa-chevron-left"></i>
              </a>
              <div
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a
                  class="dropdown-item"
                  href="/kalkulasi-zakat"
                  >Kalkulasi Zakat</a
                >
                <a
                  class="dropdown-item"
                  href="/bayar-zakat"
                  >Pembayaran Zakat</a
                >
              </div>
            </li>
            <a class="nav-link" href="/rekening"
              >Rekening</a
            >
            <a class="nav-link" href="/login"
              >Masuk</a
            >
            <a
              class="btn btn-primary tombol-nav"
              href="/register"
              >Daftar</a
            >
          </div>
        </div>
      </div>
    </nav>
    <!-- END OF NAVBAR -->

    <!-- Jumbotron Card -->
    <div class="jumbotron jumbotron-fluid jumbot">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 pt-4">
            <h1 class="py-2">YukZakat</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item bread-text"><a href="#">Home</a></li> -->
                <li
                  class="breadcrumb-item active bread-text"
                  aria-current="page"
                >
                  Beranda
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Jumbotron Card -->

    <!-- Konten Beranda -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <a href="/kalkulasi-zakat">
                <img
                  class="mx-auto d-block"
                  src="{{ asset('img/sites/info-1.png') }}"
                  alt="kalkulator-zakat"
                />
              </a>
              <p>
                Gunakan kalkulator zakat untuk menghitng jumlah zakat yang harus
                anda bayarkan.
                <br />
                <br />
                Pastikan harta anda sudah melebihi nishab (85 gram emas)
              </p>
            </div>
            <div class="col-lg">
              <a href="/bayar-zakat">
                <img
                  class="mx-auto d-block"
                  src="{{ asset('img/sites/info-2.png') }}"
                  alt="bayar-zakat"
                />
              </a>
              <p>
                Sudah mengetahui berapa zakat anda? <br />
                Silakan langsung mengisikan nominalnya dan melakukan pembayaran
                zakat di sini.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF Konten Beranda -->

    <!-- FOOTER -->
    <footer>
      <!-- Copyright -->
      <div class="footer-copyright footer-all text-center py-3 mt-5">
        <span> © YukZakat 2020 </span>
        <span> <a href="#">Tentang Kami</a> </span>
      </div>

      <!-- Copyright -->
    </footer>
    <!-- END OF FOOTER -->

    <!-- <script src="/assets/sites/js/script.js"></script> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('js/sites/bootstrap.min.js') }}"></script>
  </body>
</html>
