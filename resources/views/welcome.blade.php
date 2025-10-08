<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Copyright" content="Sewoapp" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Lithia" />
    <meta name="rating" content="general" />
    <meta name="language" content="English" />
    <meta name="application-name" content="Sewoapp" />
    <meta
      name="description"
      content="Sewoapp is your trusted partner for all rental needs."
    />
    <meta name="keywords" content="company" />
    <meta
      name="twitter:title"
      content="Sewoapp | Your Trusted Rental Partner"
    />
    <meta
      name="twitter:description"
      content="Sewoapp is your trusted partner for all rental needs."
    />
    <meta name="twitter:image" content="./assets/img/inazuma-cover.png" />
    <meta
      content="Sewoapp | Your Trusted Rental Partner"
      property="og:title"
    />
    <meta content="Sewoapp" property="og:site_name" />
    <meta
      content="Sewoapp is your trusted partner for all rental needs."
      property="og:description"
    />
    <meta content="./assets/img/inazuma-cover.png" property="og:image" />
    <meta content="https://ranyeh24.github.io/inazuma-tailwind" property="og:url" />
    <meta content="website" property="og:type" />

    <meta name="msapplication-TileColor" content="#3d63dd" />
    <meta
      name="msapplication-TileImage"
      content="./assets/favicon/mstile-144x144.png"
    />
    <meta name="theme-color" content="#3d63dd" />

    <!-- Page title -->
    <title>Sewoapp | Your Trusted Rental Partner</title>

    <!-- Canonical -->
    <link rel="canonical" href="https://sewoapp.com/" />

    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="194x194"
      href="./assets/favicon/favicon-194x194.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="./assets/favicon/android-chrome-192x192.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="./assets/favicon/site.webmanifest.json" />
    <link
      rel="mask-icon"
      href="./assets/favicon/safari-pinned-tab.svg"
      color="#3d63dd"
    />

    <!-- CSS Plugins -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"
    />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    @vite(['resources/css/main.css'])
  </head>
  <body>
    <!-- Page loading -->
    <div
      class="page-loading fixed top-0 bottom-0 left-0 right-0 z-[99999] flex items-center justify-center bg-primary-light-1 dark:bg-primary-dark-1 opacity-100 visible pointer-events-auto"
      role="status"
      aria-live="polite"
      aria-atomic="true"
      aria-label="Loading..."
    >
      <img
        src="{{ asset('images/Loading_Screen.png') }}"
        alt="Sewoapp Logo"
        class="w-8 h-auto animate-blink"
      />
      <style>
        @keyframes blink {
          0%, 100% { opacity: 1; }
          50% { opacity: 0.3; }
        }
        .animate-blink {
          animation: blink 3s infinite;
        }
      </style>
    </div>

    <!-- Navbar -->
    <header
      class="ic-navbar absolute left-0 top-0 z-40 flex w-full items-center bg-transparent"
      role="banner"
      aria-label="Navigation bar"
    >
      <div class="container">
        <div
          class="ic-navbar-container relative -mx-5 flex items-center justify-between"
        >
          <div class="w-60 lg:w-56 max-w-full px-5">
            <a
              href="."
              class="ic-navbar-logo block w-full py-5 text-primary-color"
            >
              <img
                src="{{ asset('images/Sewoapp_Navbar.png') }}"
                alt="Sewoapp Navbar Logo"
                class="w-full h-auto"
              />
            </a>
          </div>
          <div class="flex w-full items-center justify-between px-5">
            <div>
              <button
                type="button"
                class="ic-navbar-toggler absolute right-4 top-1/2 block -translate-y-1/2 rounded-md px-3 py-[6px] text-[22px]/none text-primary-color ring-primary focus:ring-2 lg:hidden"
                data-web-toggle="navbar-collapse"
                data-web-target="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation menu"
              >
                <i class="lni lni-menu"></i>
              </button>

              <nav
                id="navbarMenu"
                class="ic-navbar-collapse absolute right-4 top-[80px] w-full max-w-[250px] rounded-lg hidden bg-primary-light-1 py-5 shadow-lg dark:bg-primary-dark-1 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6"
              >
                <ul
                  class="block lg:flex"
                  role="menu"
                  aria-label="Navigation menu"
                >
                  <li class="group relative">
                    <a
                      href="#home"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mx-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70 active"
                      role="menuitem"
                      >Beranda</a
                    >
                  </li>

                  <li class="group relative">
                    <a
                      href="#services"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem"
                      >Fitur</a
                    >
                  </li>

                  {{-- <li class="group relative">
                    <a
                      href="#portfolio"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem"
                      >Portfolio</a
                    >
                  </li> --}}

                  {{-- <li class="group relative">
                    <a
                      href="#pricing"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem"
                      >Pricing</a
                    >
                  </li> --}}

                  <li class="group relative">
                    <a
                      href="#team"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem"
                      >Tim</a
                    >
                  </li>

                  <li class="group relative">
                    <a
                      href="#contact"
                      class="ic-page-scroll mx-8 flex py-2 text-base font-medium text-body-light-12 group-hover:text-primary dark:text-body-dark-12 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-primary-color lg:dark:text-primary-color lg:group-hover:text-primary-color lg:group-hover:opacity-70"
                      role="menuitem"
                      >Kontak</a
                    >
                  </li>
                </ul>
              </nav>
            </div>
            <div class="flex items-center justify-end pr-[52px] lg:pr-0">
              <button
                type="button"
                class="inline-flex items-center text-primary-color text-[24px]/none"
                aria-label="Switch theme"
                data-web-trigger="web-theme"
              ></button>
              <div class="hidden sm:flex">
                <a
                  href="javascript:void(0)"
                  class="btn-navbar ml-5 px-6 py-3 rounded-md bg-primary-color bg-opacity-20 text-base font-medium text-primary-color hover:bg-opacity-100 hover:text-primary"
                  role="button"
                  >Segera Hadir!</a
                >
              </div>
            </div>
          </div>
        </div>
      </header>

    <main class="main relative">
      <!-- Hero section -->
      <section
        id="home"
        class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]"
      >
        <div class="container">
          <div class="-mx-5 flex flex-wrap items-center">
            <div class="w-full px-5">
              <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                <h1
                  class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight"
                >
                  Sewoapp - Solusi Mudah Rental Kendaraan
                </h1>
                <p
                  class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal"
                >
                  Temukan dan sewa kendaraan dengan mudah, cepat, dan aman. Sewoapp menyediakan berbagai pilihan mobil, motor, dan kendaraan listrik untuk kebutuhan perjalanan Anda.
                </p>
                <ul
                  class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5"
                >
                <li>
                    <a
                        href="javascript:void(0)"
                        class="inline-flex items-center justify-center rounded-md bg-white !text-primary px-5 py-3 text-center text-base font-medium shadow-md cursor-not-allowed opacity-70 md:px-7 md:py-[14px] hover:opacity-100 hover:shadow-lg hover:scale-105 transition-all duration-200"
                        role="button"
                        aria-disabled="true"
                        style="background-color: #fff !important; color: #3d63dd !important; border: none !important;"
                    >
                        <i class="lni lni-play-store mr-4 text-lg"></i>
                        Segera Hadir di Play Store
                    </a>
                </li>
                </ul>
                <div>
                  <p class="mb-4 text-center text-primary-color">Tersedia untuk semua kebutuhan perjalanan Anda</p>
                  <div class="scroll-revealed flex items-center justify-center gap-4 text-center">
                    <span class="text-primary-color/60 hover:text-primary-color">Mobil</span>
                    <span class="text-primary-color/60 hover:text-primary-color">Motor</span>
                    <span class="text-primary-color/60 hover:text-primary-color">Kendaraan Listrik</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full px-5">
              <div class="scroll-revealed relative z-10 mx-auto max-w-[845px]">
                <figure class="mt-16">
                  <img
                    src="./assets/img/hero-rental.png"
                    alt="Rental Kendaraan"
                    class="mx-auto max-w-full rounded-t-xl rounded-tr-xl"
                  />
                </figure>
                <div class="absolute -left-9 bottom-0 z-[-1]">
                  <img
                    src="./assets/img/dots.svg"
                    alt
                    class="w-[120px] opacity-75"
                  />
                </div>
                <div class="absolute -right-6 -top-6 z-[-1]">
                  <img
                    src="./assets/img/dots.svg"
                    alt
                    class="w-[120px] opacity-75"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About section -->
      <section id="about" class="section-area">
        <div class="container">
          <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
            <div class="w-full">
              <figure class="scroll-revealed max-w-[480px] mx-auto">
                <img
                  src="./assets/img/about-rental.jpg"
                  alt="Tentang Sewoapp"
                  class="rounded-xl"
                />
              </figure>
            </div>

            <div class="w-full">
              <div class="scroll-revealed">
                <h6 class="mb-2 block text-lg font-semibold text-primary">
                  Tentang Sewoapp
                </h6>
                <h2 class="mb-6">
                  Aplikasi Rental Kendaraan Terpercaya di Indonesia
                </h2>
              </div>
              <div class="tabs scroll-revealed">
                <nav
                  class="tabs-nav flex flex-wrap gap-4 my-8"
                  role="tablist"
                  aria-label="Tentang Sewoapp"
                >
                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-profile"
                    id="tabs-list-profile"
                    role="tab"
                    aria-controls="tabs-panel-profile"
                  >
                    Profil Kami
                  </button>

                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-vision"
                    id="tabs-list-vision"
                    role="tab"
                    aria-controls="tabs-panel-vision"
                  >
                    Visi
                  </button>

                  <button
                    type="button"
                    class="tabs-link inline-block py-2 px-4 rounded-md text-body-light-12 dark:text-body-dark-12 bg-body-light-12/10 dark:bg-body-dark-12/10 text-inherit font-medium hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    data-web-toggle="tabs"
                    data-web-target="tabs-panel-history"
                    id="tabs-list-history"
                    role="tab"
                    aria-controls="tabs-panel-history"
                  >
                    Sejarah
                  </button>
                </nav>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-profile"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-profile"
                >
                  <p>
                    Sewoapp hadir sebagai solusi digital untuk kebutuhan rental kendaraan di Indonesia. Kami menyediakan layanan sewa mobil, motor, dan kendaraan listrik dengan proses mudah, harga transparan, dan armada terawat.
                  </p>
                </div>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-vision"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-vision"
                >
                  <p>
                    Menjadi aplikasi rental kendaraan nomor satu yang memberikan kemudahan, keamanan, dan kenyamanan bagi seluruh masyarakat Indonesia.
                  </p>
                </div>

                <div
                  class="tabs-content mt-4"
                  id="tabs-panel-history"
                  tabindex="-1"
                  role="tabpanel"
                  aria-labelledby="tabs-list-history"
                >
                  <p>
                    Sewoapp didirikan pada tahun 2022 oleh tim berpengalaman di bidang transportasi dan teknologi, dengan tujuan memudahkan akses rental kendaraan secara online.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services section -->
      <section id="services" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Layanan Kami
            </h6>
            <h2 class="mb-6">Pilihan Rental Kendaraan Terbaik</h2>
            <p>
              Sewoapp menyediakan berbagai layanan rental kendaraan sesuai kebutuhan Anda, mulai dari harian, mingguan, hingga bulanan.
            </p>
          </div>
          <div class="row">
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-car"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Sewa Mobil
                  </h4>
                  <p>
                    Pilihan mobil keluarga, city car, hingga SUV untuk perjalanan nyaman dan aman.
                  </p>
                </div>
              </div>
            </div>
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-scooter"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Sewa Motor
                  </h4>
                  <p>
                    Motor matic dan manual untuk mobilitas praktis di perkotaan.
                  </p>
                </div>
              </div>
            </div>
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-bolt"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Sewa Kendaraan Listrik
                  </h4>
                  <p>
                    Kendaraan listrik ramah lingkungan untuk perjalanan yang lebih hijau.
                  </p>
                </div>
              </div>
            </div>
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-calendar"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Sewa Harian/Mingguan/Bulanan
                  </h4>
                  <p>
                    Fleksibel sesuai kebutuhan Anda, baik untuk perjalanan singkat maupun jangka panjang.
                  </p>
                </div>
              </div>
            </div>
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-shield"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Armada Terawat & Asuransi
                  </h4>
                  <p>
                    Semua kendaraan rutin servis dan dilengkapi asuransi perjalanan.
                  </p>
                </div>
              </div>
            </div>
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div class="group hover:-translate-y-1">
                <div
                  class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color"
                >
                  <i class="lni lni-support"></i>
                </div>
                <div class="w-full">
                  <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                    Layanan 24/7
                  </h4>
                  <p>
                    Tim support siap membantu Anda kapan saja selama proses rental.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- <!-- Intro video section -->
      <section id="intro" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Intro Video
            </h6>
            <h2 class="mb-6">Watch Our Intro Video</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="scroll-revealed relative max-w-[900px] mx-auto">
            <img
              src="./assets/img/intro-video.jpg"
              alt="Intro video"
              class="w-full h-full aspect-video rounded-xl object-cover"
            />
            <a
              href="javascript:void(0)"
              class="video-popup w-[80px] h-[80px] rounded-full inline-flex items-center justify-center bg-primary text-primary-color text-[1.875rem] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-md hover:bg-primary-color hover:text-primary hover:shadow-xl focus:bg-primary-color focus:text-primary focus:shadow-xl"
            >
              <i class="lni lni-play"></i>
            </a>
          </div>
        </div>
      </section>

      <!-- Portfolio section -->
      <section id="portfolio" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Portfolio
            </h6>
            <h2 class="mb-6">Our Recent Works</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <nav
            class="scroll-revealed portfolio-menu mb-[3.750rem] text-center"
            aria-label="Portfolio filter"
          >
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color active"
              data-filter="all"
            >
              All Work
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="branding"
            >
              Branding
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="marketing"
            >
              Marketing
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="planning"
            >
              Planning
            </button>
            <button
              type="button"
              class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
              data-filter="research"
            >
              Research
            </button>
          </nav>

          <div class="scroll-revealed portfolio-grid row">
            <div class="portfolio col-12 sm:col-6 lg:col-4">
              <article class="group" data-filter="branding">
                <div
                  class="relative overflow-hidden w-full aspect-[4/3] rounded-xl"
                >
                  <img
                    src="./assets/img/portfolio/portfolio-1.jpg"
                    alt="Graphics Design"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible"
                  >
                    <div class="flex flex-wrap gap-2 p-4">
                      <div class="inline-block relative">
                        <a
                          href="./assets/img/portfolio/portfolio-1.jpg"
                          class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-zoom-in"></i>
                        </a>
                      </div>
                      <div class="portfolio-icon">
                        <a
                          href="javascript:void(0)"
                          class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-4">
                  <h4 class="mb-2">
                    <a
                      href="javascript:void(0)"
                      class="text-[1.5rem] leading-tight text-inherit"
                      >Graphics Design</a
                    >
                  </h4>
                  <p>
                    Short description for the ones who look for something new.
                    Awesome!
                  </p>
                </div>
              </article>
            </div>

            <div class="portfolio col-12 sm:col-6 lg:col-4">
              <article class="group" data-filter="research">
                <div
                  class="relative overflow-hidden w-full aspect-[4/3] rounded-xl"
                >
                  <img
                    src="./assets/img/portfolio/portfolio-2.jpg"
                    alt="Web Development"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible"
                  >
                    <div class="flex flex-wrap gap-2 p-4">
                      <div class="inline-block relative">
                        <a
                          href="./assets/img/portfolio/portfolio-2.jpg"
                          class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-zoom-in"></i>
                        </a>
                      </div>
                      <div class="portfolio-icon">
                        <a
                          href="javascript:void(0)"
                          class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-4">
                  <h4 class="mb-2">
                    <a
                      href="javascript:void(0)"
                      class="text-[1.5rem] leading-tight text-inherit"
                      >Web Development</a
                    >
                  </h4>
                  <p>
                    Short description for the ones who look for something new.
                    Awesome!
                  </p>
                </div>
              </article>
            </div>

            <div class="portfolio col-12 sm:col-6 lg:col-4">
              <article class="group" data-filter="marketing">
                <div
                  class="relative overflow-hidden w-full aspect-[4/3] rounded-xl"
                >
                  <img
                    src="./assets/img/portfolio/portfolio-3.jpg"
                    alt="App Development"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible"
                  >
                    <div class="flex flex-wrap gap-2 p-4">
                      <div class="inline-block relative">
                        <a
                          href="./assets/img/portfolio/portfolio-3.jpg"
                          class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-zoom-in"></i>
                        </a>
                      </div>
                      <div class="portfolio-icon">
                        <a
                          href="javascript:void(0)"
                          class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-4">
                  <h4 class="mb-2">
                    <a
                      href="javascript:void(0)"
                      class="text-[1.5rem] leading-tight text-inherit"
                      >App Development</a
                    >
                  </h4>
                  <p>
                    Short description for the ones who look for something new.
                    Awesome!
                  </p>
                </div>
              </article>
            </div>

            <div class="portfolio col-12 sm:col-6 lg:col-4">
              <article class="group" data-filter="planning">
                <div
                  class="relative overflow-hidden w-full aspect-[4/3] rounded-xl"
                >
                  <img
                    src="./assets/img/portfolio/portfolio-4.jpg"
                    alt="Digital Marketing"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible"
                  >
                    <div class="flex flex-wrap gap-2 p-4">
                      <div class="inline-block relative">
                        <a
                          href="./assets/img/portfolio/portfolio-4.jpg"
                          class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-zoom-in"></i>
                        </a>
                      </div>
                      <div class="portfolio-icon">
                        <a
                          href="javascript:void(0)"
                          class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-4">
                  <h4 class="mb-2">
                    <a
                      href="javascript:void(0)"
                      class="text-[1.5rem] leading-tight text-inherit"
                      >Digital Marketing</a
                    >
                  </h4>
                  <p>
                    Short description for the ones who look for something new.
                    Awesome!
                  </p>
                </div>
              </article>
            </div>

            <div class="portfolio col-12 sm:col-6 lg:col-4">
              <article class="group" data-filter="branding">
                <div
                  class="relative overflow-hidden w-full aspect-[4/3] rounded-xl"
                >
                  <img
                    src="./assets/img/portfolio/portfolio-5.jpg"
                    alt="SEO Services"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible"
                  >
                    <div class="flex flex-wrap gap-2 p-4">
                      <div class="inline-block relative">
                        <a
                          href="./assets/img/portfolio/portfolio-5.jpg"
                          class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-zoom-in"></i>
                        </a>
                      </div>
                      <div class="portfolio-icon">
                        <a
                          href="javascript:void(0)"
                          class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-4">
                  <h4 class="mb-2">
                    <a
                      href="javascript:void(0)"
                      class="text-[1.5rem] leading-tight text-inherit"
                      >SEO Services</a
                    >
                  </h4>
                  <p>
                    Short description for the ones who look for something new.
                    Awesome!
                  </p>
                </div>
              </article>
            </div>

            <div class="portfolio col-12 sm:col-6 lg:col-4">
              <article class="group" data-filter="marketing">
                <div
                  class="relative overflow-hidden w-full aspect-[4/3] rounded-xl"
                >
                  <img
                    src="./assets/img/portfolio/portfolio-6.jpg"
                    alt="Product Design"
                    class="w-full h-full object-cover"
                  />
                  <div
                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible"
                  >
                    <div class="flex flex-wrap gap-2 p-4">
                      <div class="inline-block relative">
                        <a
                          href="./assets/img/portfolio/portfolio-6.jpg"
                          class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-zoom-in"></i>
                        </a>
                      </div>
                      <div class="portfolio-icon">
                        <a
                          href="javascript:void(0)"
                          class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color"
                        >
                          <i class="lni lni-link"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-4">
                  <h4 class="mb-2">
                    <a
                      href="javascript:void(0)"
                      class="text-[1.5rem] leading-tight text-inherit"
                      >Product Design</a
                    >
                  </h4>
                  <p>
                    Short description for the ones who look for something new.
                    Awesome!
                  </p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section> --}}
{{--
      <!-- Pricing section -->
      <section id="pricing" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Pricing
            </h6>
            <h2 class="mb-6">Pricing & Plans</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="row">
            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div
                class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-card-1 hover:shadow-lg"
              >
                <div>
                  <h6
                    class="inline-block font-medium text-base mb-6 text-primary bg-primary/10 rounded-md py-2 px-8 pricing-title"
                  >
                    Starter
                  </h6>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Iste, similique ea.
                  </p>
                  <div class="pt-8">
                    <h2
                      class="font-semibold inline-block relative pl-4 text-[55px]"
                    >
                      <span
                        class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5"
                        >$</span
                      >0<span
                        class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal"
                        >/mo</span
                      >
                    </h2>
                  </div>
                </div>
                <div class="pt-8 pb-10">
                  <a
                    href="javascript:void(0)"
                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary/10 text-primary hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    >Start Free Trial</a
                  >
                </div>
                <div>
                  <ul>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Cras justo odio.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Dapibus ac facilisis in.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Morbi leo risus.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Excepteur sint occaecat velit.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div
                class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-lg"
              >
                <div>
                  <h6
                    class="inline-block font-medium text-base mb-6 text-primary-color bg-primary rounded-md py-2 px-8 pricing-title"
                  >
                    Exclusive
                  </h6>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Iste, similique ea.
                  </p>
                  <div class="pt-8">
                    <h2
                      class="font-semibold inline-block relative pl-4 text-[55px]"
                    >
                      <span
                        class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5"
                        >$</span
                      >99<span
                        class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal"
                        >/mo</span
                      >
                    </h2>
                  </div>
                </div>
                <div class="pt-8 pb-10">
                  <a
                    href="javascript:void(0)"
                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 hover:text-primary-color focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 focus:text-primary-color"
                    >Purchase Now</a
                  >
                </div>
                <div>
                  <ul>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Cras justo odio.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Dapibus ac facilisis in.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Morbi leo risus.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Excepteur sint occaecat velit.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
              <div
                class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-card-1 hover:shadow-lg"
              >
                <div>
                  <h6
                    class="inline-block font-medium text-base mb-6 text-primary bg-primary/10 rounded-md py-2 px-8 pricing-title"
                  >
                    Premium
                  </h6>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Iste, similique ea.
                  </p>
                  <div class="pt-8">
                    <h2
                      class="font-semibold inline-block relative pl-4 text-[55px]"
                    >
                      <span
                        class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5"
                        >$</span
                      >150<span
                        class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal"
                        >/mo</span
                      >
                    </h2>
                  </div>
                </div>
                <div class="pt-8 pb-10">
                  <a
                    href="javascript:void(0)"
                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary/10 text-primary hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                    >Purchase Now</a
                  >
                </div>
                <div>
                  <ul>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Cras justo odio.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Dapibus ac facilisis in.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-primary text-base leading-[24px]"
                      ></i>
                      <span>Morbi leo risus.</span>
                    </li>
                    <li
                      class="text-left relative mb-3 inline-flex gap-3 w-full"
                    >
                      <i
                        class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"
                      ></i>
                      <span>Excepteur sint occaecat velit.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
{{--
      <!-- Call action section -->
      <section
        id="call-action"
        class="section-area !bg-primary !text-primary-color"
      >
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto">
            <h2 class="mb-8 text-inherit">
              We love to make perfect solutions for your business
            </h2>
            <p>
              Why I say old chap that is, spiffing off his nut cor blimey
              guvnords geeza bloke knees up bobby, sloshed arse William cack
              Richard. Bloke fanny around chesed of bum bag old lost the pilot
              say there spiffing off his nut.
            </p>
            <a
              href="javascript:void(0)"
              class="inline-block px-5 py-3 rounded-md mt-11 bg-green-400 text-white hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white"
              role="button"
              >Get Started Now</a
            >
          </div>
        </div>
      </section> --}}

      <!-- Team section -->
      <section id="team" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">Team</h6>
            <h2 class="mb-6">Our Creative Team</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div class="row">
            <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
              <figure
                class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1"
              >
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                  <img
                    src="./assets/img/avatar/avatar-1.jpg"
                    alt="Team picture"
                    class="h-full w-full rounded-full object-cover"
                  />
                  <span
                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"
                  ></span>
                  <span
                    class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"
                  ></span>
                </div>
                <figcaption class="text-center block">
                  <h4
                    class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12"
                  >
                    Garret Edwards
                  </h4>
                  <p
                    class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11"
                  >
                    Art Director
                  </p>
                  <div class="flex items-center justify-center gap-5">
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-facebook-fill"></i>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-twitter-original"></i>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-instagram-original"></i>
                    </a>
                  </div>
                </figcaption>
              </figure>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
              <figure
                class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1"
              >
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                  <img
                    src="./assets/img/avatar/avatar-2.jpg"
                    alt="Team picture"
                    class="h-full w-full rounded-full object-cover"
                  />
                  <span
                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"
                  ></span>
                  <span
                    class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"
                  ></span>
                </div>
                <figcaption class="text-center block">
                  <h4
                    class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12"
                  >
                    Jonathan Leeson
                  </h4>
                  <p
                    class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11"
                  >
                    Web Developer
                  </p>
                  <div class="flex items-center justify-center gap-5">
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-facebook-fill"></i>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-twitter-original"></i>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-instagram-original"></i>
                    </a>
                  </div>
                </figcaption>
              </figure>
            </div>

            <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
              <figure
                class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1"
              >
                <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                  <img
                    src="./assets/img/avatar/avatar-3.jpg"
                    alt="Team picture"
                    class="h-full w-full rounded-full object-cover"
                  />
                  <span
                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"
                  ></span>
                  <span
                    class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"
                  ></span>
                </div>
                <figcaption class="text-center block">
                  <h4
                    class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12"
                  >
                    Joe Russell
                  </h4>
                  <p
                    class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11"
                  >
                    UX Designer
                  </p>
                  <div class="flex items-center justify-center gap-5">
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-facebook-fill"></i>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-twitter-original"></i>
                    </a>
                    <a
                      href="javascript:void(0)"
                      class="text-body-light-10 dark:text-body-dark-10 hover:text-primary"
                    >
                      <i class="lni lni-instagram-original"></i>
                    </a>
                  </div>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonials section -->
      <section id="testimonials" class="section-area">
        <div class="container">
          <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
            <h6 class="mb-2 block text-lg font-semibold text-primary">
              Client Reviews
            </h6>
            <h2 class="mb-6">Our Testimonials</h2>
            <p>
              There are many variations of passages of Lorem Ipsum available but
              the majority have suffered alteration in some form.
            </p>
          </div>

          <div
            class="swiper testimonial-carousel common-carousel scroll-revealed"
          >
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-4.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Ralf Nacht
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Web Entrepreneur
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-5.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Sebastian Toft
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Web Developer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-6.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Bao Shen
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        UI/UX Designer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>

              <div class="swiper-slide">
                <div
                  class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8"
                >
                  <p
                    class="mb-6 text-base text-body-light-11 dark:text-body-dark-11"
                  >
                    "Our members are so impressed. It's intuitive. It's clean.
                    It's distraction free. If you're building a community."
                  </p>
                  <figure class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden">
                      <img
                        src="./assets/img/avatar/avatar-7.jpg"
                        alt="Testimonial picture"
                        class="h-full w-full rounded-full object-cover"
                      />
                    </div>
                    <figcaption class="flex-grow">
                      <h3
                        class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11"
                      >
                        Emanuel Velzeboer
                      </h3>
                      <p
                        class="text-xs text-body-light-10 dark:text-body-dark-10"
                      >
                        Graphics Designer
                      </p>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>

            <div class="mt-[60px] flex items-center justify-center gap-1">
              <div class="swiper-button-prev">
                <i class="lni lni-arrow-left"></i>
              </div>
              <div class="swiper-button-next">
                <i class="lni lni-arrow-right"></i>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- FAQ section -->
    <section id="faq" class="section-area relative">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
        <h6 class="mb-2 block text-lg font-semibold text-primary">FAQ</h6>
        <h2 class="mb-6">Pertanyaan Umum tentang Rental Kendaraan</h2>
        <p>
          Temukan jawaban atas pertanyaan seputar proses rental kendaraan di Sewoapp.
        </p>
        </div>

        <div class="grid gap-x-8 gap-y-12 grid-cols-1 lg:grid-cols-2">
        <div class="scroll-revealed flex">
          <div
            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
          >
            <i class="lni lni-question-circle"></i>
          </div>
          <div class="w-full">
            <h3
            class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
            >
            Apa saja syarat untuk menyewa kendaraan di Sewoapp?
            </h3>
            <p class="text-body-light-11 dark:text-body-dark-11">
            Anda perlu memiliki KTP, SIM yang masih berlaku, dan mengisi formulir pemesanan. Beberapa kendaraan mungkin membutuhkan dokumen tambahan sesuai kebijakan Sewoapp.
            </p>
          </div>
        </div>

        <div class="scroll-revealed flex">
          <div
            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
          >
            <i class="lni lni-question-circle"></i>
          </div>
          <div class="w-full">
            <h3
            class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
            >
            Apakah harga rental sudah termasuk asuransi?
            </h3>
            <p class="text-body-light-11 dark:text-body-dark-11">
            Ya, semua kendaraan Sewoapp sudah dilengkapi asuransi dasar. Untuk perlindungan tambahan, Anda dapat memilih paket asuransi sesuai kebutuhan saat pemesanan.
            </p>
          </div>
        </div>

        <div class="scroll-revealed flex">
          <div
            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
          >
            <i class="lni lni-question-circle"></i>
          </div>
          <div class="w-full">
            <h3
            class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
            >
            Bagaimana cara pembayaran rental kendaraan?
            </h3>
            <p class="text-body-light-11 dark:text-body-dark-11">
            Pembayaran dapat dilakukan secara online melalui transfer bank, e-wallet, atau kartu kredit. Anda juga bisa membayar langsung di lokasi pengambilan kendaraan.
            </p>
          </div>
        </div>

        <div class="scroll-revealed flex">
          <div
            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]"
          >
            <i class="lni lni-question-circle"></i>
          </div>
          <div class="w-full">
            <h3
            class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl"
            >
            Apakah bisa membatalkan atau mengubah jadwal rental?
            </h3>
            <p class="text-body-light-11 dark:text-body-dark-11">
            Tentu, Anda dapat membatalkan atau mengubah jadwal rental melalui aplikasi Sewoapp atau menghubungi customer service. Ketentuan refund dan perubahan mengikuti kebijakan Sewoapp.
            </p>
          </div>
        </div>
        </div>
      </div>

        <div>
          <span class="absolute left-5 top-5 -z-[1]">
            <svg
              class="w-20 h-auto fill-teal-500"
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="1280.000000pt"
              height="1280.000000pt"
              viewBox="0 0 1280.000000 1280.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                stroke="none"
              >
                <path
                  d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
              </g>
            </svg>
          </span>
          <span class="absolute right-5 bottom-5 -z-[1]">
            <svg
              class="w-20 h-auto fill-indigo-500"
              version="1.0"
              xmlns="http://www.w3.org/2000/svg"
              width="1280.000000pt"
              height="1280.000000pt"
              viewBox="0 0 1280.000000 1280.000000"
              preserveAspectRatio="xMidYMid meet"
            >
              <g
                transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                stroke="none"
              >
                <path
                  d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
-255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
16z"
                />
                <path
                  d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
-319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z"
                />
                <path
                  d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
                <path
                  d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
-369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z"
                />
              </g>
            </svg>
          </span>
        </div>
      </section>

    <!-- Blog section -->
    <section id="blog" class="section-area">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
        <h6 class="mb-2 block text-lg font-semibold text-primary">Blog</h6>
        <h2 class="mb-6">Berita Rental Kendaraan</h2>
        <p>
          Dapatkan informasi terbaru seputar dunia rental kendaraan, tips perjalanan, dan update layanan Sewoapp.
        </p>
        </div>

        <div class="row">
        <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
          <article class="group">
            <div class="relative">
            <a
              href="javascript:void(0)"
              class="w-full aspect-[3/2] rounded-xl overflow-hidden block"
            >
              <img
                src="./assets/img/thumbnail/thumbnail-1.jpg"
                alt="Thumbnail"
                class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]"
              />
            </a>
            </div>
            <span
            class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10"
            >Admin Sewoapp - 10 Juni 2024</span
            >
            <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
            <a
              href="javascript:void(0)"
              class="text-body-light-12 dark:text-body-dark-12"
              >Tips Aman dan Nyaman Sewa Kendaraan Online</a
            >
            </h4>
            <p>
            Simak tips penting agar proses sewa kendaraan secara online berjalan lancar, mulai dari pengecekan armada hingga perlengkapan dokumen.
            </p>
          </article>
        </div>

        <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
          <article class="group">
            <div class="relative">
            <a
              href="javascript:void(0)"
              class="w-full aspect-[3/2] rounded-xl overflow-hidden block"
            >
              <img
                src="./assets/img/thumbnail/thumbnail-2.jpg"
                alt="Thumbnail"
                class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]"
              />
            </a>
            </div>
            <span
            class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10"
            >Admin Sewoapp - 5 Mei 2024</span
            >
            <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
            <a
              href="javascript:void(0)"
              class="text-body-light-12 dark:text-body-dark-12"
              >Keuntungan Rental Mobil untuk Liburan Keluarga</a
            >
            </h4>
            <p>
            Rental mobil memberikan fleksibilitas dan kenyamanan saat berlibur bersama keluarga. Temukan alasan mengapa rental mobil jadi pilihan utama.
            </p>
          </article>
        </div>

        <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
          <article class="group">
            <div class="relative">
            <a
              href="javascript:void(0)"
              class="w-full aspect-[3/2] rounded-xl overflow-hidden block"
            >
              <img
                src="./assets/img/thumbnail/thumbnail-3.jpg"
                alt="Thumbnail"
                class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]"
              />
            </a>
            </div>
            <span
            class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10"
            >Admin Sewoapp - 20 April 2024</span
            >
            <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
            <a
              href="javascript:void(0)"
              class="text-body-light-12 dark:text-body-dark-12"
              >Update Armada Baru Sewoapp: Lebih Banyak Pilihan!</a
            >
            </h4>
            <p>
            Sewoapp kini menghadirkan armada kendaraan terbaru untuk memenuhi kebutuhan perjalanan Anda, mulai dari city car hingga kendaraan listrik.
            </p>
          </article>
        </div>
        </div>
      </div>
    </section>

    <!-- Mitra section -->
    <section id="mitra" class="section-area">
      <div class="container">
        <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
        <h6 class="mb-2 block text-lg font-semibold text-primary">
          Mitra
        </h6>
        <h2 class="mb-6">Mitra Sewoapp</h2>
        <p>
          Sewoapp telah dipercaya oleh berbagai mitra bisnis terkemuka untuk solusi rental kendaraan yang profesional dan terpercaya.
        </p>
        </div>

        <div class="">
        <div class="row">
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/airbnb.svg"
            alt="Logo Mitra Airbnb"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/coca-cola.svg"
            alt="Logo Mitra Coca-Cola"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/facebook.svg"
            alt="Logo Mitra Facebook"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/mandiri.svg"
            alt="Logo Mitra Mandiri"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/shopware.svg"
            alt="Logo Mitra Shopware"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/spotify.svg"
            alt="Logo Mitra Spotify"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/tunnel-id.svg"
            alt="Logo Mitra Tunnel ID"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
          <div
            class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3"
          >
            <img
            src="./assets/img/brand/walmart.svg"
            alt="Logo Mitra Walmart"
            class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0"
            />
          </div>
        </div>
        </div>
      </div>
    </section>

      <!-- Contact section -->
      <section id="contact" class="section-area">
        <div class="container">
          <div class="row">
            <div class="col-12 xl:col-4">
              <div class="row">
                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-phone w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Kontak</h4>
                      <p class="m-0">0984537278623</p>
                      <p class="m-0">yourmail@gmail.com</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-map-marker w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Alamat</h4>
                      <p class="m-0">175 5th Ave, New York, NY 10010</p>
                      <p class="m-0">United States</p>
                    </div>
                  </div>
                </div>

                <div class="col-12 md:col-6 xl:col-12">
                  <div
                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg"
                  >
                    <div>
                      <i
                        class="lni lni-alarm-clock w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"
                      ></i>
                    </div>
                    <div>
                      <h4 class="text-[1.25rem] text-primary mb-3">Jadwal</h4>
                      <p class="m-0">24 Jam / 7 Hari Buka</p>
                      <p class="m-0">Waktu kantor: 10:00 AM - 5:30 PM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 xl:col-8">
              <div
                class="scroll-revealed bg-body-light-1 dark:bg-primary-dark-2 rounded-xl py-8 sm:py-12 px-6 sm:px-10 z-10 relative shadow-card-1 hover:shadow-lg"
              >
                <div class="text-center max-w-[550px] mx-auto mb-12">
                  <h6 class="mb-2 block text-lg font-semibold text-primary">
                    Hubungi Kami
                  </h6>
                  <h2 class="mb-3">Siap untuk Memulai</h2>
                  <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus
                    quiblanditiis praesentium
                  </p>
                </div>

                <form action="#" method="POST" class="flex flex-col gap-6">
                  <div class="row">
                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="name"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Nama"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="email"
                        name="email"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Email"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="phone"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Telepon"
                        required
                      />
                    </div>

                    <div class="col-12 md:col-6">
                      <input
                        type="text"
                        name="subject"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Subjek"
                        required
                      />
                    </div>

                    <div class="col-12">
                      <textarea
                        name="message"
                        rows="5"
                        class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                        placeholder="Tulis pesan Anda"
                        required
                      ></textarea>
                    </div>

                    <div class="col-12">
                      <div class="w-full text-center">
                        <button
                          type="submit"
                          class="inline-block px-5 py-3 rounded-md text-base bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10"
                        >
                          Kirim Pesan
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Map section -->
      {{-- <section id="map" class="w-full h-[500px] overflow-hidden -mt-[12rem]">
        <object
          data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.0094028113572!2d98.67188956289421!3d3.583155328672593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1723787393945!5m2!1sid!2sid"
          class="border-0 w-full h-full"
        ></object>
      </section> --}}
    </main>

    <!-- Footer -->
    <footer class="bg-primary-dark-2 text-white">
      <div class="container py-20 lg:py-[100px]">
        <div class="row">
          <div class="col-12 order-first lg:col-4">
            <div class="w-full">
              <a href="." class="inline-block mb-5">
              <img
                src="{{ asset('images/Sewoapp_Footer.png') }}"
                alt="Sewoapp Navbar Logo"
                class="w-auto mx-auto"
              />
            </a>

              <div class="-mx-3 flex items-center">
                <a
                  href="javascript:void(0)"
                  class="px-3 text-body-dark-11 hover:text-body-dark-12"
                  >Kebijakan Privasi</a
                >

                <a
                  href="javascript:void(0)"
                  class="px-3 text-body-dark-11 hover:text-body-dark-12"
                  >Pemberitahuan Hukum</a
                >

                <a
                  href="javascript:void(0)"
                  class="px-3 text-body-dark-11 hover:text-body-dark-12"
                  >Syarat Layanan</a
                >
              </div>
            </div>
          </div>
          <div class="col-6 lg:col-2">
            <div class="w-full">
              <h4 class="mb-9 text-lg font-semibold text-inherit">Produk & Layanan</h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >Sewa Mobil</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >List Kendaraan</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >Carbon Offsetting</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >Customer Service</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-6 lg:col-2">
            <div class="w-full">
              <h4 class="mb-9 text-lg font-semibold text-inherit">Tentang Kami</h4>
              <ul>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >FAQ</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >Testimoni</a
                  >
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="mb-3 inline-block text-body-dark-11 hover:text-primary"
                    >Mitra</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="col-12 -order-3 lg:col-4 lg:order-1">
            <div class="w-full">
              <h4 class="mb-9 text-lg font-semibold text-inherit">Langganan</h4>

              <p class="text-body-dark-11">
                Daftar ke newsletter kami untuk pembaruan terbaru
              </p>

              <form action="#" method="POST" target="_blank" class="mt-8 flex">
                <input
                  type="email"
                  name="email"
                  class="inline-block flex-grow px-5 py-3 rounded-md rounded-e-none border border-solid border-alpha-dark text-inherit text-base focus:border-primary"
                  placeholder="Alamat email"
                  required
                />

                <button
                  type="submit"
                  class="inline-block py-3 w-[50px] rounded-md rounded-s-none text-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10"
                >
                  <i class="lni lni-envelope"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full border-t border-solid border-alpha-dark"></div>
      <div class="container py-8">
        <div class="flex flex-wrap">
          <div class="w-full md:w-1/2">
            <div class="my-1">
            <div class="flex flex-wrap justify-center gap-x-3 md:justify-start">
                <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12" aria-label="Instagram">
                    <i class="lni lni-instagram-original"></i>
                </a>
                <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12" aria-label="YouTube">
                    <i class="lni lni-youtube"></i>
                </a>
                <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12" aria-label="LinkedIn">
                    <i class="lni lni-linkedin-original"></i>
                </a>
                <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12" aria-label="Twitter">
                    <i class="lni lni-twitter-original"></i>
                </a>
                <a href="javascript:void(0)" class="text-body-dark-11 hover:text-body-dark-12" aria-label="TikTok">
                    <i class="lni lni-tiktok"></i>
                </a>
            </div>
            </div>
          </div>

          <div class="w-full md:w-1/2">
            <div class="my-1 flex justify-center md:justify-end">
              <p class="text-body-dark-11">
                &#169; 2024 Sewoapp. All rights reserved.</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <button
      type="button"
      class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
      data-web-trigger="scroll-top"
      aria-label="Scroll to top"
    >
      <i class="lni lni-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    @vite(['resources/css/main.css', 'resources/js/main.js'])
    <script>
      // Scroll Reveal
      const sr = ScrollReveal({
        origin: "bottom",
        distance: "16px",
        duration: 1000,
        reset: false,
      });

      sr.reveal(`.scroll-revealed`, {
        cleanup: true,
      });

      // GLightBox
      GLightbox({
        selector: ".video-popup",
        href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
        type: "video",
        source: "youtube",
        width: 900,
        autoplayVideos: true,
      });

      const myGallery3 = GLightbox({
        selector: ".portfolio-box",
        type: "image",
        width: 900,
      });

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>
  </body>
</html>
