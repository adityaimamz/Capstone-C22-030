<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="img/momong 3.svg"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/boxicons.min.css" />

    <title>Momong</title>
</head>
<body>
    <a href="#main" class="skip-to-content">Skip To Content</a>
    <header class="header">
        <div class="header__content">
            <a href="/" class="logo header__brand"
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
                  <a href="/" class="nav__link">Home</a>
                </li>
                <li><a href="/blog" class="nav__link">Blog</a></li>
                <li>
                  <a href="/konsultasi" class="nav__link nav__link--active">Konsultasi</a>
                </li>
                <li>
                  <a href="/login" class="nav__link Login">Login</a>
                </li>
                <li>
                  <a href="/daftar" class="nav__link register">Register</a>
                </li>
              </ul>
            </nav>
          </div>
    </header>

    <main id="main">
        <section id="informasi-pembayaran" class="bg-light" data-aos="fade-up">
            <div class="container bg-light">
                <div class="row mt-5 p-5">
                    <div class="col-md-12 mx-auto text-center bg-light m-5 p-5">
                        <h1>Langkah mudah memulai konsultasi</h1>
                    </div>
                    <div class="col-md-4 mx-auto text-center ">
                        <img src="img/img-pembayaran.png" style="width: 100px;"/>
                        <h4>1. Pembayaran</h4>
                    </div>
                    <div class="col-md-4 mx-auto text-center ">
                        <img src="img/img-form-konsultasi.png" style="width: 100px;"/>
                        <h4>2. Isi form awal</h4>
                    </div>
                    <div class="col-md-4 mx-auto text-center pt-5">
                        <img src="img/img-konsultasi.png" style="width: 100px;"/>
                        <h4>3. Mulai konsultasi</h4>
                    </div>
                </div>
            </div>
        </section>

        <section id="informasi-konsultasi" class="page-informasi-konsultasi" data-aos="fade-up" style="background-color:#4072B7">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto p-5">
                        <h2 class="text-center p-4 text-white">Kenapa harus konsultasi di momong ?</h2>
                        <div class="card mb-3 mx-auto bg-light kenapa">
                          <div class="row g-0">
                            <div class="col-md-4 p-3 ">
                              <img src="img/konsultasi1.svg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title fw-bold">Buat keluarga lebih bahagia</h5>
                                <p class="card-text">Kami menyediakan layanan konsultasi untuk membantu menyelesaikan masalah keluarga anda. Kamu bisa cerita sama Mentor terlatih.
                                  Bareng-bareng cari solusi dari masalah yang sedang dihadapi.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-3 mx-auto kenapa">
                          <div class="row g-0">
                            <div class="col-md-4 p-3">
                              <img src="img/konsultasi2.svg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 ">
                              <div class="card-body special-card">
                                <h5 class="card-title fw-bold">Konsultasi dimanapun kapanpun</h5>
                                <p class="card-text">Anda bisa melakukan konsultasi dimanapun dan kapanpun dengan jadwal yang anda tentukan sendiri dan memilih media konsultasinya seperti menggunakan Chat/Voice Call/Video Call WhatsApp.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card mb-3 mx-auto kenapa">
                          <div class="row g-0">
                            <div class="col-md-4 p-3">
                              <img src="img/konsultasi3.svg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8 special-card">
                              <div class="card-body special-card">
                                <h5 class="card-title fw-bold">Cerita anda aman dengan kami</h5>
                                <p class="card-text">Tidak perlu khawatir cerita dan identitas anda aman bersama kami.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-4 mx-auto text-center pt-5 mt-5" style="border-left: 1px solid black;">
                        <h4 class="text-white fs-3">Konsultasi Sekarang!</h4>
                        <p class="text-white bg-danger mt-4">HARGA CUMA</p>
                        <p class="text-white fs-5">Rp 100.000</p>
                        <p class="text-white mt-5 fs-3">Rek. 123 5432 121 2134</p>
                        <p class="text-white mt-4 fs-4">a.n. momong (bank)</p>
                        <p class="text-white mt-5">note: Harap simpan bukti pembayaran untuk dilampirkan di form berikutnya</p>
                    </div>
                </div>
            </div>
        </section>

        <form id="form-konsultasi" class="bg-light" data-aos="fade-up" action="login" method="post">
          {{ csrf_field() }}  
          <div class="container">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center">
                        <h2 class="pb-4">Form Data Diri</h2>
                        <form>
                          <div class="row g-3 pb-4">
                              <div class="col">
                                <label class="form-check-label" for="inputNamaLengkap"  id="nama"  required>Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" aria-label="First name">
                              </div>
                              <div class="col">
                                <label class="form-check-label" for="inputNamaPanggilan" required>Nama Panggilan</label>
                                <input type="text" class="form-control" id="nama_singkat" name="nama_singkat" placeholder="Nama Panggilan" aria-label="Last name">
                              </div>
                          </div>
                            <div class="col-12 pb-4">
                              <label class="form-check-label" for="tanggalLahir" required>Tanggal Lahir</label>
                              <input type="date" class="form-control" id="tanggalLahir" name="tgllahir">
                            </div>
                            <div class="col-12 pb-4">
                              <label class="form-check-label" for="inputNomorTelp"  required>Nomor Telepon / WhatsApp</label>
                              <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Telepon">
                            </div>

                            {{-- <label class="text-start">Jenis Kelamin :</label>
                            <div class="form-check form-check-inline pb-4 ">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                              <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                            </div> --}}

                            <div class="col-12 pb-4">
                              <label class="form-check-label" for="jadwalKonsultasi">Jadwal Konsultasi</label>
                              <input type="date" class="form-control" id="jadwalKonsultasi" name="jadwal" placeholder="Jadwal Konsultasi">
                            </div>

                            <div class="col-12 pb-4">
                              <label class="form-check-label" for="inputAddress">Deskripsi Singkat Masalah</label>
                              <textarea class="form-control" id="keluhan" name="keluhan" placeholder="Deskripsi Masalah"></textarea>
                            </div>

                            <div class="row g-3 pb-4">
                              <div class="col">
                                <label class="form-check-label" for="jenisKategori">Jenis Kategori</label>
                                <select class="form-control" placeholder="Jenis Kategori" id="jenisKategori" name="kategori" aria-label="Jenis-Kategori">
                                  <option value="keluarga">Keluarga</option>
                                  <option value="bayi">Bayi</option>
                                  <option value="usia-sekolah">Usia Sekolah</option>
                                  <option value="orang-tua">Orang Tua</option>
                                </select>
                              </div>
                              <div class="col">
                                <label class="form-check-label" for="jenisKonsultasi">Jenis Konsultasi</label>
                                <select class="form-control" placeholder="Jenis Konsultasi" id="jenisKonsultasi"  name="jenis_konsultasi" aria-label="Jenis Konsultasi">
                                  <option value="chat">Chat WhatsApp</option>
                                  <option value="voice-call">Voice Call WhatsApp</option>
                                </select>
                              </div>
                          </div>

                          <div class="mb-3 pb-4">
                            <label class="form-check-label" for="buktiPembayaran">Bukti Pembayaran</label>
                              <input class="form-control" type="file" id="buktiPembayaran">
                          </div>
                          <div class="col-md-12 pb-5">
                            <a href="login" type="submit" name="submit" value='Submit' class='btn btn-primary'>Submit</a>
                        </form>
                    </div>
                </div>
            </div>
          </form>

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
    
    <!-- JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 200,
        duration: 1000,
      });
    </script>
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