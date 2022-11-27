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
            <!-- <span class="filter-item active-filter" data-filter="all">Semua</span> -->
            <span class="filter-item" data-filter="keluarga">Keluarga</span>
            <span class="filter-item" data-filter="Bayi">Bayi</span>
            <span class="filter-item" data-filter="Usia-sekolah"
              >Usia Sekolah</span
            >
            <span class="filter-item" data-filter="Orang-tua">Orang tua</span>
          </div>

          <!-- Posts -->
          <section class="post container">
            <!-- Post Box 1 -->
            <div class="post-box Bayi">
              <img src="img/post-1.jpg" alt="" class="post-img" />
              <h2 class="category">Algoritma</h2>
              <a href="Article.html" class="post-title">
                Belajar Bayia binary search
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                adipisci, dolorum, sint nesciunt sunt quis beatae optio velit
                praesentium iste ipsam ratione cupiditate aspernatur molestias
                eius consequatur fuga quo consectetur?
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
                Tipe Pola Asuh Ideal untuk Anak Usia Sekolah Dasar 7-12 Tahun
              </a>
              <span class="post-date">14 Oktober 2021</span>
              <p class="post-description">
                Untuk membentuk karakter dapat dilakukan dengan pola asuh yang
                tepat. Pola asuh yang diterapkan berpengaruh penting dalam
                kemampuan anak dalam menyelesaikan atau menyikapi beragam hal.
                Semua orang tua pasti menginginkan yang terbaik untuk buah
                hatinya, namun tidak jarang
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                adipisci, dolorum, sint nesciunt sunt quis beatae optio velit
                praesentium iste ipsam ratione cupiditate aspernatur molestias
                eius consequatur fuga quo consectetur?
              </p>
              <!-- Profile -->
              <div class="profile"></div>
            </div>
            <!-- Post Box 4 -->
            <div class="post-box Bayi">
              <img src="img/post-1.jpg" alt="" class="post-img" />
              <h2 class="category">Algoritma</h2>
              <a href="Article.html" class="post-title">
                Belajar Bayia binary search
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                adipisci, dolorum, sint nesciunt sunt quis beatae optio velit
                praesentium iste ipsam ratione cupiditate aspernatur molestias
                eius consequatur fuga quo consectetur?
              </p>
              <!-- Profile -->
            </div>
            <!-- Post Box 5 -->
            <div class="post-box Usia-sekolah">
              <img
                src="img/PolaAsuhTepat.webp"
                alt="Pola Asuh yang Tepat Bagi Anak Usia Pra sekolah"
                class="post-img"
              />
              <h2 class="category">Usia Sekolah</h2>
              <a href="Article.html" class="post-title">
                Pola Asuh yang Tepat Bagi Anak Usia Pra sekolah
              </a>
              <span class="post-date">26 April 2022</span>
              <p class="post-description">
                Menginjak umur 3 tahun, Si Buah Hati memasuki usia anak
                prasekolah, yaitu anak yang berusia antara 3-6 tahun yang mana
                ia mengalami peningkatan perkembangan psikososial dan kognitif.
                Maka jangan heran jika di usia ini, Si Buah Hati akan semakin
                pintar, kritis, dan kreatif Di fase usia 3 tahun, Bunda akan
                dibuat takjub dengan keinginan si Buah Hati yang ingin melakukan
                semua aktivitas sendiri. Hal itu dapat menjadi indikasi bahwa
                tumbuh-kembangnya berlangsung optimal. Bunda perlu menerapkan
                pola asuh anak usia pra sekolah saat di rumah. Yuk, dukung Si
                Buah Hati raih kemandiriannya dengan beberapa cara sebagai
                berikut ini!
              </p>
              <!-- Profile -->
            </div>
            <!-- Post Box 6 -->
            <div class="post-box Orang-tua">
              <img src="img/post-3.jpg" alt="" class="post-img" />
              <h2 class="category">Python</h2>
              <a href="Article.html" class="post-title">
                Python dasar untuk Data Science
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                adipisci, dolorum, sint nesciunt sunt quis beatae optio velit
                praesentium iste ipsam ratione cupiditate aspernatur molestias
                eius consequatur fuga quo consectetur?
              </p>
              <!-- Profile -->
              <div class="profile"></div>
            </div>
            <!-- Post Box 7 -->
            <div class="post-box Bayi">
              <img src="img/post-1.jpg" alt="" class="post-img" />
              <h2 class="category">Algoritma</h2>
              <a href="Article.html" class="post-title">
                Belajar Bayia binary search
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                adipisci, dolorum, sint nesciunt sunt quis beatae optio velit
                praesentium iste ipsam ratione cupiditate aspernatur molestias
                eius consequatur fuga quo consectetur?
              </p>
              <!-- Profile -->
            </div>
            <!-- Post Box 8 -->
            <div class="post-box Usia-sekolah">
              <img
                src="img/pola-asuh-5tahun.webp"
                alt="ola Asuh yang Tepat untuk Anak Usia 5-10 Tahun"
                class="post-img"
              />
              <h2 class="category">Usia Sekolah</h2>
              <a href="Article.html" class="post-title">
                ola Asuh yang Tepat untuk Anak Usia 5-10 Tahun
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Banyak orang yang mengatakan jika anak adalah cerminan dari
                orangtua. Hal tersebut karena anak mencontoh setiap kebiasaan
                yang dilakukan ayah dan ibunya, dan akhirnya juga menjadi
                kebiasaan dirinya. Maka dari itu, setiap orangtua wajib
                memperlihatkan contoh yang baik dan melakukan pola asuh anak
                yang benar agar perkembangan fisik dan mentalnya menjadi lebih
                baik. Saat memasuki usia 5 tahun ke atas, anak akan menjadi
                lebih aktif dan juga lebih kritis terkait semua hal yang ingin
                diketahuinya. Maka dari itu, orangtua harus menentukan pola asuh
                yang tepat saat anak berusia 5 hingga 10 tahun. Cara ini
                diharapkan dapat membentuk sifat dan perilakunya agar senantiasa
                positif. Berikut beberapa pola asuh yang dapat ibu terapkan!
              </p>
              <!-- Profile -->
            </div>
            <!-- Post Box 9 -->
            <div class="post-box Orang-tua">
              <img src="img/post-3.jpg" alt="" class="post-img" />
              <h2 class="category">Python</h2>
              <a href="Article.html" class="post-title">
                Python dasar untuk Data Science
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                adipisci, dolorum, sint nesciunt sunt quis beatae optio velit
                praesentium iste ipsam ratione cupiditate aspernatur molestias
                eius consequatur fuga quo consectetur?
              </p>
            </div>
            <div class="post-box keluarga">
              <img src="img/mewariskan-berat.jpg" alt="" class="post-img" />
              <h2 class="category">Keluarga</h2>
              <a href="Article.html" class="post-title">
                Apakah Orang Tua Mewariskan Berat Badan ke Anak?
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Anda mungkin sudah tahu beberapa hal dari orang tua yang dapat
                diturunkan secara genetis pada anak, antara lain adalah bentuk
                rambut, warna mata, warna kulit, juga tinggi badan. Sebuah
                penelitian yang diterbitkan dalam jurnal Economics and Human
                Biology menunjukkan bahwa berat badan anak ternyata juga
                merupakan warisan genetis dari orang tua. Secara garis besar,
                penelitian yang dilakukan oleh Prof. Peter Dalton, Ph.D., dari
                University of Sussex di Inggris ini bekerja dengan cara
                memperkirakan transmisi berat massa tubuh antargenerasi, yakni
                antara orang tua dan anak. Timnya menghitung berapa banyak berat
                massa tubuh anak yang didapat dari berat massa tubuh orang
                tuanya. Hasilnya menunjukkan bahwa anak-anak mewarisi sekitar
                40% berat massa tubuh atau body mass index (BMI) orang tuanya.
                Analisis terhadap sekitar 100.000 anak yang tersebar di 6
                negara, yakni Amerika Serikat, Inggris, Cina, Indonesia,
                Spanyol, dan Meksiko ini memperlihatkan bahwa sekitar 20% indeks
                massa tubuh anak diwarisi dari ayahnya, sementara sekitar
                20%-nya lagi diwarisi dari ibu mereka. Risiko Obesitas Dari
                sini, tim peneliti menemukan bahwa orang tua yang memiliki berat
                massa tubuh berlebih memiliki risiko 2 kali lebih banyak untuk
                mengalami obesitas. Obesitas yang dialami pada masa anak-anak
                memiliki risiko jangka panjang pada kesehatan, termasuk risiko
                asma, diabetes tipe 2, penyakit jantung, serta beberapa bentuk
                kanker. Di samping itu, anak-anak yang obesitas juga lebih
                cenderung memiliki masalah kesehatan emosional, seperti minder
                dan harga diri yang rendah. Perhatikan, ya, Ma... Perlu
                diperhatikan bahwa penting bagi anak-anak untuk memiliki pola
                makan yang sehat serta melakukan aktivitas fisik secara teratur
                untuk menjaga berat badan tetap sehat.
              </p>
            </div>
            <div class="post-box keluarga">
              <img
                src="img/hubungan-stress.jpg"
                alt="7 Fakta tentang Hubungan Stres dan Pengasuhan"
                class="post-img"
              />
              <h2 class="category">Keluarga</h2>
              <a href="Article.html" class="post-title">
                7 Fakta tentang Hubungan Stres dan Pengasuhan
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Dr. Keith Crnic, pengajar psikologi di Arizona State University,
                AS, mengatakan bahwa kekhasan hubungan antara orang tua dan anak
                disebabkan oleh berbagai macam faktor, antara lain karakteristik
                setiap orang tua—baik ayah maupun ibu, karakteristik anak,
                faktor ekonomi, faktor sosial, dan juga faktor psikologis.
                Berdasarkan penelitian yang dilakukannya, ia melihat bahwa
                masalah emosi dan perilaku baik dari orang tua dan anak-anak
                memiliki pengaruh negatif satu sama lain dalam pengasuhan.
                Berikut ini hasil studinya: 1. Temperamen anak ternyata
                dipengaruhi oleh manajemen emosi orang tua. Kehangatan dan
                kontrol orang tua secara positif, adalah dua atribut orang tua
                yang paling penting yang membantu menciptakan efek positif. Cara
                orang tua merespon positif emosinya dan memanajemennya menjadi
                faktor penting dalam pengasuhan karena dapat mengembangkan
                temperamen anak yang sehat. Sebaliknya, bila orang tua tidak
                memiliki manajemen emosi yang baik, maka anak akan memiliki
                kecenderungan temperamen yang kurang sehat. 2. Interaksi yang
                kurang baik antara anak dan orang tua menyebabkan pengasuhan
                menjadi lebih dipenuhi dengan stres. 3. Efek stres yang terkait
                dengan pengasuhan anak seperti masalah anak yang suka membantah,
                anak yang sulit mendengar, dan masalah perilaku anak jauh lebih
                besar bagi orang tua daripada efek stres kehidupan umum pada
                keluarga seperti masalah keuangan, pembagian waktu, atau
                pekerjaan rumah. 4. Pertengakaran antara satu orang tua dan anak
                dapat menjadi stresor yang mengganggu kemampuan pihak orang tua
                lain untuk mempertahankan hubungan positif dengan anak-anaknya.
                5. Kondisi psikologis ibu saat hamil memengaruhi kesehatan dan
                perkembangan bayi. Ibu yang mengalami stres dan kurang support
                system akan lebih sulit untuk beradaptasi dengan bayinya dan
                pada akhirnya berisiko mengalami depresi. 6. Perilaku ayah yang
                negatif dapat menyebabkan masalah perilaku pada anak. Sementara,
                perilaku negatif ibu dapat menyebabkan anak mengalami kesulitan
                bahkan dalam hal akademik. 7. Hubungan ayah dan anak lebih
                rentan terhadap konflik ketimbang hubungan ibu dan anak. Akan
                tetapi, umumnya hubungan ayah-anak pada awal-awal tahun terjaga
                baik.
              </p>
            </div>
            <div class="post-box keluarga">
              <img
                src="img/BJ-Habibie.jpg"
                alt="Menjadi Papa yang Bisa Membesarkan Anak Berprestasi Seperti BJ Habibie"
                class="post-img"
              />
              <h2 class="category">Keluarga</h2>
              <a href="Article.html" class="post-title">
                Menjadi Papa yang Bisa Membesarkan Anak Berprestasi Seperti BJ
                Habibie
              </a>
              <span class="post-date">18 Oktober 2022</span>
              <p class="post-description">
                Prof. Dr. Ing. H. Bacharuddin Jusuf Habibie adalah salah satu
                putra bangsa terbaik. Meninggalkan Indonesia, ia melanjutkan
                kuliah di jurusan Konstruksi Pesawat Terbang di Rheinisch
                Westfählische Technische Hochschule (RWTH), Achen, Jerman Barat.
                Ia menyelesaikan pendidikan S1 hingga S3 selama sepuluh tahun
                dan meraih gelar doktor teknik atau doktor ingenieur dengan
                predikat summa cum laude. Kembali ke Tanah Air, ia menciptakan
                pesawat terbang penumpang N250 Gatotkaca yang diujicobakan pada
                10 Agustus 1995. Ia kemudian menjabat menjadi direktur PT
                Dirgantara Indonesia. Habibie tidak hanya terkenal di dunia
                dirgantara dalam negeri, melainkan juga di luar negeri. Ia
                menciptakan teori yang memungkinkan pesawat memiliki ketahanan
                ketika mengudara dan mencegah pesawat hancur saat terbang. Teori
                yang dikenal dengan Teori Habibie ini kemudian menjadi jawaban
                atas permasalahan penerbangan komersial selama 40 tahun. Teori
                ini diakui oleh lembaga penerbangan Eropa dan diadopsi dalam
                pesawat komersial seperti Airbus. Ternyata, kejeniusan Habibie
                tak lepas dari peran pengasuhan Ayahnya, Alwi Abdul Jalil
                Habibie yang berprofesi sebagai ahli pertanian. Alwi yang
                menjabat sebagai Kepala Departemen Pertanian Negara menjadi
                sumber inspirasi sekaligus fasilitator bagi Habibie kecil untuk
                belajar. Berikut pola asuh yang diterima oleh Bapak Dirgantara
                Indonesia ini yang bisa kita praktikkan untuk menumbuhkan
                anak-anak dengan rasa ingin tahu dan pemecahan masalah yang
                tinggi. Tidak Meremehkan Logika Anak Habibie sejak kecil
                memiliki rasa ingin tahu yang besar. Ia selalu menanyakan apa
                pun yang dilihatnya, termasuk apa pun yang dikerjakan ayahnya.
                Misalnya, ketika melihat sang ayah menggabungkan dua batang
                pohon yang berbeda, Habibie kecil menanyakan apa yang dilakukan
                ayahnya. Alih-alih menjelaskan ala kadarnya, Ayah Habibie justru
                membuat penjelasan serius dengan bahasa sederhana agar logika
                anak mampu memahami apa yang sedang dilakukannya. Alwi
                menjelaskan bahwa dirinya sedang melakukan eksperimen yang
                disebut dengan stek supaya mereka bisa menemukan jawaban dari
                percobaan yang dilakukan. Sang Ayah juga menjelaskan secara
                sederhana bahwa ia ingin mendapatkan buah mangga yang enak untuk
                dimakan anaknya sehingga menggabungkan mangga yang sudah ada di
                rumahnya dengan batang mangga dari Jawa yang terkenal lebih
                manis. Alwi memang selalu membuat penjelasan sederhana yang bisa
                dipahami oleh anak kecil. Hal tersebut justru makin memicu
                keingintahuan Habibie hingga ia tumbuh dewasa. Investasi Buku di
                Rumah Orang tua mungkin berpikir bahwa membelikan mainan akan
                jadi hadiah yang paling menyenangkan bagi anak-anak. Hal
                tersebut tidak salah. Akan tetapi, buku juga bisa menjadi hadiah
                terbaik untuk anak-anak. Sejak kecil, Habibie sudah rajin
                membaca buku-buku yang disediakan ayahnya. Membaca menjadi
                bagian dari hidupnya. Ia sangat suka membaca, mulai dari buku
                cerita hingga ensiklopedia. Hobi membaca ini membuat hasrat
                keingintahuan Habibie terpenuhi. Membantu Anak Memecahkan Solusi
                Habibie kecil juga suka membaca buku dalam bahasa Belanda. Ia
                selalu bertanya kepada orang tuanya saat ada kata-kata yang tak
                dipahami. Sebagai bagian dari memecahkan masalah, ayahnya pun
                membelikannya kamus Indonesia-Belanda agar Habibie bisa belajar
                sendiri. Hal ini tentu menumbuhkan kemandiriannya dalam belajar.
                Apa yang dilakukan oleh Ayah Habibie ini dapat dilihat sebagai
                upaya untuk mengembangkan minat literasi dan sains anak.
                Kebiasaan tersebut membuat anak-anak tumbuh menjadi anak yang
                mampu memahami masalah dan memecahkannya sendiri.
                Prinsip-prinsip pengasuhan ini tentu sangat dibutuhkan, terutama
                bagi orang tua dengan anak-anak generasi alfa yang sangat erat
                dengan dunia digital. Tumbuhkan minat sains dan literasi mereka
                agar tumbuh menjadi anak yang berdaya saing.
              </p>
            </div>
          </section>
          <div class="pagination">
            <ul>
              <!--pages or li are comes from javascript -->
            </ul>
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