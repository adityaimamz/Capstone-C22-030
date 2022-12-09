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
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
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
            src="/img/momong 3.svg"
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
              <a href="/" class="nav__link">Home</a>
            </li>
            <li><a href="/blog" class="nav__link nav__link--active">Blog</a></li>
            <li>
              <a href="/favorite" class="nav__link">Favorite</a>
            </li>
            <li>
              <a href="/konsultasi" target="_blank" rel="noopener" class="nav__link"
                >Konsultasi</a
              >
            </li>
            <li>
              <a href="/login" class="nav__link Login">Login</a>
            </li>
            <li>
              <a href="Daftar.html" class="nav__link register">Sign Up</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main id="main">
      <div class="container">
        <div class="list" id="root-content">
          <!-- Post Filter -->
          <div class="post-filter container">
            <a href="/blog" class="post-title">All</a>
            @foreach ($category as $cat)
            <a href="/blog/{{ $cat->id }}" class="post-title">{{$cat->category_name}}</a>
            @endforeach
          </div>

          <!-- Posts -->
          <section class="post container" >
            <!-- Post Box 1 -->
            @foreach ($article as $item)
            <div class="post-box Bayi" id="card-artikel">
              <img src="/img/artikel/{{$item->img}}" alt="" class="post-img" />
              <h2 class="category">{{ $item->CategoryArticles->category_name}}</h2>
              <a href="/detail/{{ $item->id }}" class="post-title">
              {{ $item->title }}
              </a>
              <span class="post-date">{{ $item->date }}</span>
              <p class="post-description">
                {{ $item->article}}
              </p>
              <!-- Profile -->
            </div>
            @endforeach
          </section>
          
          <div>
            {{ $article->links() }}
          </div>
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
              <li><a href="Index.html">Home</a></li>
              <li><a href="Blog.html">Blog</a></li>
              <li><a href="Favorite.html">Favorite</a></li>
              <li><a href="#">Konsultasi</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Blog</h4>
            <ul>
              <li><a href="Blog.html">Keluarga</a></li>
              <li><a href="Blog.html">Bayi</a></li>
              <li>
                <a href="Blog.html">Usia Sekolah</a>
              </li>
              <li><a href="Blog.html">Orang Tua</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Join Us</h4>
            <ul>
              <li><a href="Login.html">Login</a></li>
              <li><a href="Daftar.html">Sign Up</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <img src="image/momong 3.svg" />
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
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