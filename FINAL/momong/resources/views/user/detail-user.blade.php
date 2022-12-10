<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="shortcut icon"
      href="img/momong 3.svg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/boxicons.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/c133b2d014.js" crossorigin="anonymous"></script>
    <title>Momong</title>
  </head>
  <body>
    <a href="#main" class="skip-to-content">Skip To Content</a>
    <header class="header">
      <div class="header__content">
        <a href="Index.html" class="logo header__brand"
          ><img
            class="header__logo"
            src="/img/momong 3.svg"
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
              <a href="/home-user" class="nav__link">Home</a>
            </li>
            <li><a href="/blog-user" class="nav__link nav__link--active">Blog</a></li>
            <li>
              <a href="/konsultasi-user" class="nav__link">Konsultasi</a>
            </li>
            <li>
                <a href="/logout" style="text-decoration:none" class="nav__link"
                  ><i class="fa-solid fa-right-from-bracket"></i> LOGOUT</a
                >
              </li>
              <li>
                <a  class="nav__link register"
                   style="text-transform: uppercase"><b><?php echo Auth::user()->nama; ?></b></a
                >
              </li>
          </ul>
        </nav>
      </div>
    </header>

    <main id="main">
      <div class="container">
        <div class="list" id="root-content">
          <ul class="breadcrumb">
            <li><a href="/home-user">Home</a></li>
            <li><a href="/blog-user">Blog</a></li>
            <li id="NamaKategori">{{$article->CategoryArticles->category_name}}</li>
            <li id="IdKategori">{{$article->category}}</li>
          </ul>

          <section class="pos-header">
            <div class="header-content pos-container">
              <a href="/blog-user" class="back-home">Back To Blog</a>
              <!--Title-->
              <h1 class="header-title" id="titleArticle">
                {{$article->title}}
              </h1>
              <img src="/img/artikel/{{$article->img}}" class="header-img" />
              <span class="post-date">{{ $article->date }}</span>
            </div>
          </section>

          <!--Posts-->
          <section class="pos-content pos-container">
            <p class="pos-text">
            {{$article->article}}
            </p>
          </section>
        </div>
      </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
      <div class="container-footer">
        <div class="row-footer">
          <div class="footer-col">
            <h4>Halaman Kami</h4>
            <ul>
              <li><a href="/home-user" target="_blank" rel="noopener">Home</a></li>
              <li><a href="/blog-user" target="_blank" rel="noopener">Blog</a></li>
              <li><a href="/konsultasi-user" target="_blank" rel="noopener">Konsultasi</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Blog</h4>
            <ul>
              <li><a href="/blog-user/1" target="_blank" rel="noopener">Keluarga</a></li>
              <li><a href="/blog-user/2" target="_blank" rel="noopener">Bayi</a></li>
              <li>
                <a href="/blog-user/3" target="_blank" rel="noopener">Usia Sekolah</a>
              </li>
              <li><a href="/blog-user/4" target="_blank" rel="noopener">Orang Tua</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Logout</h4>
            <ul>
                <li><a href="/logout" target="_blank" rel="noopener">Logout</a></li>
              </ul>
          </div>
          <div class="footer-col">
            <img src="../img/momong 3.svg"/>
            <h4>follow us</h4>
            <div class="social-links">
              <a href="/home-user" target="_blank" rel="noopener"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="/home-user" target="_blank" rel="noopener"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="/home-user" target="_blank" rel="noopener"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="/home-user" target="_blank" rel="noopener"
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
    <script src="/js/script.js"></script>
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
