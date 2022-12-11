<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="dicoding:email" content="20102217@ittelkom-pwt.ac.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="/img/momong 3.svg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,600;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    {{-- <link rel="stylesheet" href="/Home/css/main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/boxicons.min.css" /> --}}
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <title>Momong</title>
  </head>
  <body>
  <a href="#main" class="skip-to-content">Skip To Content</a>
    <header class="header">
      <div class="header__content">
        <a href="/" rel="noopener" class="logo header__brand"
          ><img
            class="header__logo"
            src="img/momong 3.svg"
          />Momong</a
        >
        <a
          href="#"
          class="nav__toggle"
          aria-label="navigation-menu"
        >
          <span></span>
          <span></span>
          <span></span>
        </a>
        <nav class="nav">
          <ul class="nav__list">
            <li>
              <a href="/" class="nav__link nav__link--active"
                >Home</a
              >
            </li>
            <li><a href="/blog" class="nav__link">Blog</a></li>
            <li>
              <a href="/konsultasi"class="nav__link"
                >Konsultasi</a
              >
            </li>
            <li>
              <a href="/login" class="nav__link login"
                >Login</a
              >
            </li>
            <li>
              <a href="/daftar" class="nav__link register"
                >Register</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="hero vh-100 d-flex align-items-center" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="display-4 text-white">
              Selamat Datang di MOMONG parenting!
            </h1>
            <p class="text-white my-3">
              Temukan berbagai Artikel informasi Parenting yang akan mengedukasi anda
            </p>
            <a href="#main" class="btn me-2 btn-primary">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <main id="main">
      <section id="newArticle" class="bg-light">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="text-primary">BLOG</h6>
              <h1>Artikel Terbaru</h1>
              <div
                id="carouselExampleCaptions"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="img/BJ-Habibie.jpg"
                      class="d-block w-100"
                      alt="..."
                    />
                    <div class="carousel-caption d-none d-md-block caption">
                      <a class="menuju-blog" href="/blog"
                        ><h5>
                          Menjadi Papa yang Bisa Membesarkan Anak Berprestasi
                          Seperti BJ Habibie
                        </h5></a
                      >
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img
                      src="img/hubungan-stress.jpg"
                      class="d-block w-100"
                      alt="..."
                    />
                    <div class="carousel-caption d-none d-md-block">
                      <a class="menuju-blog" href="/blog"
                        ><h5>
                          7 Fakta tentang Hubungan Stres dan Pengasuhan
                        </h5></a
                      >
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img
                      src="img/mewariskan-berat.jpg  "
                      class="d-block w-100"
                      alt="..."
                    />
                    <div class="carousel-caption d-none d-md-block">
                      <a class="menuju-blog" href="/blog"
                        ><h5>
                          Apakah Orang Tua Mewariskan Berat Badan ke Anak?
                        </h5></a
                      >
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="row w-100 py-0" id="konsultasi">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <h6 class="text-primary title-konsultasi">Momong Konsultasi</h6>
                <h1>Ceritakan Masalah parenting anda kepada ahlinya.</h1>
                <p>
                  3.73% balita yang mendapatkan pola pengasuhan tidak layak.
                  Sekarang, kami hadir bersama para ahli yang siap membantu
                  anda.
                </p>
                <div class="feature d-flex mt-3">
                  <div class="iconbox me-3">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                  </div>
                  <div>
                    <h5>Apa yang anda dapatkan?</h5>
                    <p>
                      Kamu bisa cerita sama Mentor terlatih. <br />
                      Bareng-bareng cari solusi dari masalah yang sedang
                      dihadapi. <br />
                      Bisa melalui Chat/Voice Call atau Video Call
                    </p>
                    <a
                      href="/konsultasi"
                      rel="noopener"
                      class="btn me-2 btn-primary"
                      >Cari tau lebih lanjut</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="blog" class="bg-light">
        <div class="container">
          <div class="categories">
            <div class="wrapper">
              {{-- <h6 class="category-sub-title text-primary title-blog">Blog</h6> --}}
              <h1 class="category-title">Kategori Artikel</h1>

              <div class="categories-container">
                <div class="category">
                  <img src="img/keluarga.webp" alt="" />
                  <div class="category-body">
                    <h4>Keluarga</h4>
                  </div>
                </div>

                <div class="category">
                  <img src="img/bayi.jpg" alt="" />
                  <div class="category-body">
                    <h4>Bayi</h4>
                  </div>
                </div>

                <div class="category">
                  <img src="img/usia-sekolah.jpg" alt="" />
                  <div class="category-body">
                    <h4>Usia Sekolah</h4>
                  </div>
                </div>

                <div class="category">
                  <img src="img/orang-tua.jpg" alt="" />
                  <div class="category-body">
                    <h4>Orang Tua</h4>
                  </div>
                  <h4>Lorem, ipsum</h4>
                </div>
              </div>

              <a class="btn me-2 btn-primary" href="/blog" >
                Show all
              </a>
            </div>
          </div>
        </div>
      </section>

      <section id="team">
        <div class="container">
          <div class="row mb-6">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="text-primary">TEAM</h6>
              <h1>Meet Our Crew Members</h1>
              <p>
                Kami adalah sekelompok mahasiswa - mahasiswi Indonesia yang
                berfokus dalam dunia software developer khususnya dalam bidang
                Front-End dan Back End. Misi kami kali ini adalah untuk membantu
                sesama terutama masyarakat disekitar kami. Harapan utama
                dibuatnya Momong adalah agar dapat membantu masyarakat terutama
                para orang tua dalam memberikan pola asuh atau parenting kepada
                anak yang baik dan benar sehingga anak mereka dapat tumbuh
                dengan baik dan membuat keluarga lebih bahagia dengan bantuan
                para ahli melalui layanan konsultasi.
              </p>
            </div>
          </div>
          <div class="row text-center g-4">
            <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                <img src="img/foto_aditya.png" alt="" />
                <h5 class="mb-0 mt-4">Aditya Imam Zuhdi</h5>
                <p>IT Telkom Purwokerto</p>
                <div class="social-icons">
                  <a
                    href="https://www.linkedin.com/in/izaditya/"
                    target="_blank"
                    rel="noopener"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                    href="https://github.com/adityaimamz"
                    target="_blank"
                    rel="noopener"
                    ><i class="fab fa-github"></i
                  ></a>
                  <a
                    href="https://www.instagram.com/adityaimamz/"
                    target="_blank"
                    rel="noopener"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                <img src="img/foto_risma.png" alt="" />
                <h5 class="mb-0 mt-4">Kharismaharani Aisyah P</h5>
                <p>Universitas Negeri Surabaya</p>
                <div class="social-icons">
                  <a href="https://www.linkedin.com/in/kharismaharani/" target="_blank" rel="noopener"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a href="https://github.com/kharismaharanii" target="_blank" rel="noopener"
                    ><i class="fab fa-github"></i
                  ></a>
                  <a href="https://www.instagram.com/kharismaharani_/" target="_blank" rel="noopener"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                <img src="img/foto_indah.png" alt="" />
                <h5 class="mb-0 mt-4">Indah Aulia Andriani</h5>
                <p>Universitas Dian Nuswantoro</p>
                <div class="social-icons">
                  <a href="https://www.linkedin.com/in/indah-aulia-andriani-935733178/" target="_blank" rel="noopener"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a href="https://github.com/indahaulia" target="_blank" rel="noopener"
                    ><i class="fab fa-github"></i
                  ></a>
                  <a href="https://www.instagram.com/indahauk/" target="_blank" rel="noopener"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="team-member card-effect">
                <img src="img/foto_udinus.jpg" alt="" />
                <h5 class="mb-0 mt-4">M. Daffa Arkan P</h5>
                <p>Universitas Dian Nuswantoro</p>
                <div class="social-icons">
                  <a href="https://www.linkedin.com/in/daffa-arkan-71ab18256/" target="_blank" rel="noopener"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a href="https://github.com/Arcane02" target="_blank" rel="noopener"
                    ><i class="fab fa-github"></i
                  ></a>
                  <a href="https://www.instagram.com/daffaarkan02/" target="_blank" rel="noopener"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container-footer">
        <div class="row-footer">
          <div class="footer-col">
            <h4>Halaman Kami</h4>
            <ul>
              <li><a href="/" target="_blank" rel="noopener">Home</a></li>
              <li><a href="/blog" target="_blank" rel="noopener">Blog</a></li>
              <li><a href="/konsultasi" target="_blank" rel="noopener">Konsultasi</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Blog</h4>
            <ul>
              <li><a href="/blog/1" target="_blank" rel="noopener">Keluarga</a></li>
              <li><a href="/blog/2" target="_blank" rel="noopener">Bayi</a></li>
              <li>
                <a href="/blog/3" target="_blank" rel="noopener">Usia Sekolah</a>
              </li>
              <li><a href="/blog/4" target="_blank" rel="noopener">Orang Tua</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Join Us</h4>
            <ul>
              <li><a href="/login" target="_blank" rel="noopener">Login</a></li>
              <li><a href="/daftar" target="_blank" rel="noopener">Register</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <img src="img/momong 3.svg" />
            <h4>follow us</h4>
            <div class="social-links">
              <a href="/" target="_blank" rel="noopener"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="/" target="_blank" rel="noopener"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="/" target="_blank" rel="noopener"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="/" target="_blank" rel="noopener"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script></script>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/blog.js"></script>
    <script src="/js/slider.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>