<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="shortcut icon"
      href="image/favicons/momong 3.svg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Momong</title>
  </head>
  <body>
    <a href="#main" class="skip-to-content">Skip To Content</a>
    <header class="header">
      <div class="header__content">
        <a href="/" target="_blank" rel="noopener" class="logo header__brand"
          ><img
            class="header__logo"
            src="img/momong 3.svg"
          />Momong</a
        >
        <a
          href="#"
          target="_blank"
          rel="noopener"
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
              <a href="/" class="nav__link"
                >Home</a
              >
            </li>
            <li><a href="/blog" class="nav__link">Blog</a></li>
            <li>
              <a href="/favorite" class="nav__link nav__link--active">Favorite</a>
            </li>
            <li>
              <a href="/konsultasi" class="nav__link">Konsultasi</a>
            </li>
            <li>
              <a href="/login" class="nav__link Login"
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

    <main id="main">
      <div class="container">
        <div class="list" id="root-content">
          <section class="post-header">
            <div class=" post-container">
              <section>
                <div class="daftar-article container">
                  <h2 class="article-title">Favorite Articles</h2>
                  <section class="post container">
                    <!-- Post Box 1 -->
                    <div class="post-box Bayi">
                      <img src="img/post-1.jpg" alt="" class="post-img" />
                      <h2 class="category">Algoritma</h2>
                      <a href="Article.html" class="post-title">
                        Belajar Bayi binary search
                      </a>
                      <span class="post-date">18 Oktober 2022</span>
                      <p class="post-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Alias adipisci, dolorum, sint nesciunt sunt quis beatae
                        optio velit praesentium iste ipsam ratione cupiditate
                        aspernatur molestias eius consequatur fuga quo
                        consectetur?
                      </p>
                      <!-- Profile -->
                    </div>
                    <!-- Post Box 2 -->
                    <div class="post-box Usia-sekolah">
                      <img
                        src="img/polaasuh.jpg"
                        alt="Tipe Pola Asuh Ideal untuk Anak Usia Sekolah Dasar 7-12 Tahun  "
                        class="post-img"
                      />
                      <h2 class="category">Usia Sekolah</h2>
                      <a href="Article.html" class="post-title">
                        Tipe Pola Asuh Ideal untuk Anak Usia Sekolah Dasar 7-12
                        Tahun
                      </a>
                      <span class="post-date">14 Oktober 2021</span>
                      <p class="post-description">
                        Untuk membentuk karakter dapat dilakukan dengan pola
                        asuh yang tepat. Pola asuh yang diterapkan berpengaruh
                        penting dalam kemampuan anak dalam menyelesaikan atau
                        menyikapi beragam hal. Semua orang tua pasti
                        menginginkan yang terbaik untuk buah hatinya, namun
                        tidak jarang
                      </p>
                      <!-- Profile -->
                    </div>
                    <!-- Post Box 3 -->
                    <div class="post-box Orang-tua">
                      <img src="img/post-3.jpg" alt="" class="post-img" />
                      <h2 class="category">Python</h2>
                      <a href="Article.html" class="post-title">
                        Python dasar untuk Data Science
                      </a>
                      <span class="post-date">18 Oktober 2022</span>
                      <p class="post-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Alias adipisci, dolorum, sint nesciunt sunt quis beatae
                        optio velit praesentium iste ipsam ratione cupiditate
                        aspernatur molestias eius consequatur fuga quo
                        consectetur?
                      </p>
                </div>
              </section>
            </div>
          </section>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
      <div class="container-footer">
        <div class="row-footer">
          <div class="footer-col">
            <h4>Halaman Kami</h4>
            <ul>
              <li><a href="/" target="_blank" rel="noopener">Home</a></li>
              <li><a href="/blog" target="_blank" rel="noopener">Blog</a></li>
              <li><a href="/favorite" target="_blank" rel="noopener">Favorite</a></li>
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

    <!-- Jquery Link -->
    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
    <script src="js/script.js"></script>
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