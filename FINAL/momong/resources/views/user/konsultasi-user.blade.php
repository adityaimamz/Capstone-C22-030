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
                  <a href="/home-user" class="nav__link"
                    >Home</a
                  >
                </li>
                <li><a href="/blog-user" class="nav__link">Blog</a></li>
                <li>
                  <a href="/konsultasi-user"class="nav__link nav__link--active"
                    >Konsultasi</a
                  >
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

        {{-- <form action="your_path" method="post" enctype="multipart/form-data"> --}}
        <form id="form-konsultasi" class="bg-light" data-aos="fade-up" action="/konsultasi/store" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}  
          <div class="container">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center">
                    @if(session('success'))
                      <div class="alert alert-success">
                        <strong>Success!</strong> Mohon tunggu informasi dari Kami ya!
                      </div>
                    @elseif(session('error'))
                      <div class="alert alert-danger">
                        <strong>Gagal!</strong> Mohon isi data dengan lengkap!
                      </div>
                    @elseif(session('error-jpg'))
                      <div class="alert alert-danger">
                        <strong>Gagal!</strong> File harus berekstensi .jpg!
                      </div>
                    @endif
                        <h2 class="pb-4">Form Data Diri</h2>
                        <form>
                          <div class="row g-3 pb-4">
                              <div class="col">
                                <label class="form-check-label" for="inputNamaLengkap"  id="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" aria-label="First name">
                              </div>
                              <div class="col">
                                <label class="form-check-label" for="inputNamaPanggilan">Nama Panggilan</label>
                                <input type="text" class="form-control" id="nama_singkat" name="nama_singkat" placeholder="Nama Panggilan" aria-label="Last name">
                              </div>
                          </div>
                            <div class="col-12 pb-4">
                              <label class="form-check-label" for="tanggalLahir">Tanggal Lahir</label>
                              <input type="date" class="form-control" id="tanggalLahir" name="tgllahir">
                            </div>
                            <div class="col-12 pb-4">
                              <label class="form-check-label" for="inputNomorTelp">Nomor Telepon / WhatsApp</label>
                              <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor Telepon">
                            </div>
                            <div class="row g-3 pb-4">
                              <div class="col">
                                <label class="form-check-label" for="jenisKategori">Jenis Kelamin</label>
                                <select class="form-control" placeholder="Jenis Kelamin" id="jeniskelamin" name="jeniskelamin" aria-label="Jenis-Kategori">
                                  <option value="1">Laki-laki</option>
                                  <option value="2">Perempuan</option>
                                </select>
                              </div>
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
                                  <option value="1">Keluarga</option>
                                  <option value="2">Bayi</option>
                                  <option value="3">Usia Sekolah</option>
                                  <option value="4">Orang Tua</option>
                                </select>
                              </div>
                              <div class="col">
                                <label class="form-check-label" for="jenisKonsultasi">Jenis Konsultasi</label>
                                <select class="form-control" placeholder="Jenis Konsultasi" id="jenisKonsultasi"  name="jenis_konsultasi" aria-label="Jenis Konsultasi">
                                  <option value="1">Chat WhatsApp</option>
                                  <option value="2">Voice Call WhatsApp</option>
                                </select>
                              </div>
                          </div>

                          <div class="mb-3 pb-4">
                            <label class="form-check-label" for="buktiPembayaran">Bukti Pembayaran</label>
                              <input class="form-control" type="file" id="buktiPembayaran" name="bukti">
                          </div>
                          <div class="col-md-12 pb-5">
                            <input type="submit" name="submit" value='Submit' class='btn btn-primary'>
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
            <img src="img/momong 3.svg" />
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