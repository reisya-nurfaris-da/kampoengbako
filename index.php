<?php 
include 'header.php'; 
?>
<?php

function renderBanner() {
    ?>
    <div class="banner container d-flex flex-column align-items-center justify-content-center text-center my-4 vh-100">
      <p>WELCOME TO</p>
      <img class="banner-logo" src="img/logo.svg" alt="">
      <h5 class="mt-5" style="color: #F0E6C5;">Scroll</h5>
      <i class="bi bi-chevron-down"></i>
    </div>
    <?php
}

function renderCard($title, $description, $imgSrc, $imageFirst = false) {
  ?>
  <div class="home card mb-5">
      <div class="card-body">
          <div class="row">
              <?php if (!empty($imgSrc)): ?>
                  <?php if ($imageFirst): ?>
                      <!-- gambar kiri-->
                      <div>
                          <img src="<?php echo htmlspecialchars($imgSrc); ?>" class="img-fluid" alt="Card image">
                      </div>
                      <div>
                          <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                          <div class="card-text"><?php echo $description; ?></div>
                      </div>
                  <?php else: ?>
                    <!-- gambar kanan -->
                      <div>
                          <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                          <div class="card-text"><?php echo $description; ?></div>
                      </div>
                      <div>
                          <img src="<?php echo htmlspecialchars($imgSrc); ?>" class="img-fluid" alt="Card image">
                      </div>
                  <?php endif; ?>
              <?php else: ?>
                  <?php if ($imageFirst): ?>
                      <!-- gambar kosong kiri -->
                      <div>
                          <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                      </div>
                      <div>
                          <div class="card-text"><?php echo $description; ?></div>
                      </div>
                  <?php else: ?>
                      <!-- gambar kosong kanan -->
                      <div>
                          <div class="card-text"><?php echo $description; ?></div>
                      </div>
                      <div>
                          <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                      </div>
                  <?php endif; ?>
              <?php endif; ?>
          </div>
      </div>
  </div>
  <?php
}


function renderCards() {
    renderCard(
      "TENTANG KAMPOENG BAKO", 
      "Kampoeng Bako adalah toko tembakau yang mengusung keunikan dan inovasi dalam setiap produknya. Kami menyediakan beragam produk tembakau berkualitas, mulai dari koleksi tembakau klasik hingga varian inovatif dengan berbagai rasa yang memanjakan lidah para penikmat. Dengan menggabungkan kearifan tradisional dan sentuhan modern, Kampoeng Bako hadir sebagai destinasi utama bagi pecinta tembakau di seluruh Nusantara.
            <h5 class='mt-3'>Visi Kami</h5>
            <ul>
              <li>Menjadi toko tembakau terpercaya dan terdepan di Indonesia, dengan mengutamakan kualitas produk serta pelayanan prima kepada setiap pelanggan, baik online maupun offline.</li>
            </ul>
            <h5 class='mt-3'>Misi Kami</h5>
            <ul>
              <li>Menyediakan produk tembakau pilihan berkualitas tinggi</li>
              <li>Menyajikan layanan pelanggan yang ramah, profesional, dan responsif</li>
              <li>Terus berinovasi dalam menghadirkan varian rasa baru yang sesuai dengan selera masa kini</li>
            </ul>",
      "",
      true
    );

    renderCard(
      "KERTAS", 
      "Kampoeng Bako menghadirkan kemasan baru untuk kertas linting, dengan desain packaging yang lebih premium. Bikin kamu makin stylish di tongkrongan maupun saat dipajang di etalase toko tembakau favoritmu.
      <p class='mt-4'></p>
      Kertas linting Kampoeng Bako terbuat dari bahan berkualitas nomor satu di kelasnya. Memiliki rasa manis yang lembut dan ukuran yang pas untuk kenyamanan penggunaan.
      <p class='mt-4'></p>
      Cocok banget buat pemula yang baru belajar tingwe, karena kertasnya mudah digulung dan dirancang untuk pengalaman linting yang lebih praktis.
      ",
      "img/paperbox.png",
      true
    );

    renderCard(
      "KAMPOENG ORIGINALS", 
      "Kampoeng Bako dengan bangga menghadirkan Kampoeng Originals, seri tembakau pilihan yang diracik dengan kualitas terbaik untuk para pecinta linting.
      <p class='mt-4'></p>Kampoeng Originals 50 gram kini hadir dengan rasa dan aroma yang lebih kaya. Tidak hanya sekadar penyempurnaan rasa dan aroma, tetapi juga pemilihan bahan baku yang telah disesuaikan dengan keinginan para penikmat tembakau sejati.
      </p>
      <p class='mt=4'>Nikmati pengalaman linting yang lebih autentik dengan Kampoeng Originals—tembakau khas dengan cita rasa otentik yang siap menemani setiap momenmu.
      </p>",
      "img/kampoeng-anggur.png"
    );

    renderCard(
      "KOTAK KAYU", 
      "Kampoeng Bako terus berinovasi dengan berkolaborasi bersama pegiat tembakau serta pengrajin kayu lokal. Tujuan dari kolaborasi ini adalah untuk mendukung usaha kecil masyarakat sekaligus menghadirkan produk berkualitas bagi para pecinta tembakau.
      <p class='mt-4'></p>Kini, tembakau Kampoeng Bako hadir dengan box kayu eksklusif, yang dirancang sebagai wadah penyimpanan tembakau agar tetap terjaga kualitasnya. Dengan desain yang estetis dan fungsional, box kayu ini semakin menambah daya tarik bagi para penikmat linting.
      </p>",
      "img/woodenbox.png",
      true
    );
}


function renderPage() {
    renderBanner();
    renderCards();
}

renderPage();
?>

<?php include 'footer.php'; ?>