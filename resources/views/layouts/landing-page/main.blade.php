<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Hotel Hebat</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    @include('layouts.landing-page.css')
  </head>
  <body>

    @include('layouts.landing-page.navbar')

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('images/room-2.jpg')"
      data-stellar-background-ratio="0.5"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
          data-scrollax-parent="true"
        >
          <div class="col-md-7 ftco-animate">
            <h2 class="subheading font-weight-bold">Selamat datang di Hotel Hebat</h2>
            <h1 class="mb-4">Pilih kami untuk liburan Anda</h1>
          </div>
        </div>
      </div>
    </div>

    @include('layouts.landing-page.room')

    @include('layouts.landing-page.fasilitas-umum')


    <footer class="footer">
      <div class="w-100 mt-5 border-top py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-8">
              <p class="copyright mb-0">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Todos os direitos reservados | Esse site foi criado por equipe
                <a>Flozô</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
            <div class="col-md-6 col-lg-4 text-md-right">
              <p class="mb-0 list-unstyled">
                <a class="mr-md-3" href="#">Termos</a>
                <a class="mr-md-3" href="#">Privacidade</a>
                <a class="mr-md-3" href="#">Conformidades</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    @include('layouts.landing-page.js')
  </body>
</html>
