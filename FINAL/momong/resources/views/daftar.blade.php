<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Momong</title>
    <link rel="stylesheet" href="css/style-daftar.css" />
    <link
      rel="shortcut icon"
      href="img/momong 3.svg"
      type="image/x-icon"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="wrapper">
      <!-- left section -->
      <div class="left">
        <a href="/"
          ><svg
            class="icon_back"
            xmlns="http://www.w3.org/2000/svg"
            width="45"
            height="45"
            viewBox="0 0 24 24"
            style="fill: #18181b; transform: msFilter"
          >
            <path
              d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"
            ></path></svg></a>
        <section class="content_left">
          <img src="img/Logo.png" alt="logo" />
          <div class="text_masuk">
            <h1>Register</h1>
          </div>

          <form method="POST" action="/daftar">
                @csrf
                <div class="email">
                  <label for="nama">Username</label>
                  <div class="input_email">
                    <input
                      name="nama"
                      id="nama"
                      placeholder="Username..."
                    />
                    <i class="bx bx-user bx-sm"></i>
                  </div>
                </div>
                <div class="email">
                  <label for="email">Email</label>
                  <div class="input_email">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="Email..."
                    />
                    <i class="bx bx-envelope bx-sm"></i>
                  </div>
                </div>
                <div class="password">
                  <label for="password">Password</label>
                  <div class="input_password">
                    <input
                      class="pass"
                      type="password"
                      name="password"
                      id="password"
                      placeholder="Password..."
                    />
                    <i class="bx bx-lock-alt bx-sm"></i>
                    <div class="eye-off"></div>
                  </div>
                </div>
                <button class="button_masuk">Register</button>
        </form>
        
          <div class="link_masuk">
            <p>
              Belum punya akun? <span><a href="/login">Login</a></span>
            </p>
          </div>
        </section>
      </div>

      <!-- right section -->
      <div class="right">
        <section class="content_right">
          <img src="img/bg_masuk.png" alt="bg-login" />
          <div class="text_daftar">
            <h1>Selamat Datang</h1>
            <h3>Temuin Dunia Barumu Disini</h3>
          </div>
        </section>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>