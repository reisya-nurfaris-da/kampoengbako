<?php 
include 'header.php'; 
?>

<?php
function renderFeaturedSection1() {
    ?>
    <div>
        <div class="home card mb-2 w-100">
          <div class="card-body">
            <div class="row">
              <!-- Left Column -->
              <div>
                <h5 class="banner-card-title">Produk Terbaru</h5>
                <p class="card-text">
                    Hadirkan pengalaman terbaik dengan produk tembakau terbaru kami. Kami menghadirkan pilihan tembakau berkualitas tinggi dengan aroma dan cita rasa yang khas, diracik untuk memenuhi standar kenikmatan sejati. Jelajahi koleksi terbaru kami dan temukan yang terbaik untuk Anda.
                </p>
              </div>
              <!-- Right Column -->
              <div>
                <div class="image-container">
                    <div id="carouselExample1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/banner-heritage.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                          <img src="img/banner-grandpa.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php
}

function renderFeaturedSection2() {
    ?>
    <div>
        <div class="home card mb-5 w-100">
            <div class="card-body">
              <div class="row">
                <!-- Left Column -->
                <div>
                    <div class="image-container">
                        <div id="carouselExample2" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="img/banner-4.png" class="d-block w-100" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                              <img src="img/banner-5.png" class="d-block w-100" alt="Image 2">
                            </div>
                            <div class="carousel-item">
                              <img src="img/banner-6.png" class="d-block w-100" alt="Image 3">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column -->
                <div>
                    <h5 class="banner-card-title">Cita Rasa Berkelas</h5>
                    <p class="card-text">
                        Rasakan perpaduan sempurna antara tradisi dan inovasi dalam produk tembakau terbaru kami. Diracik dengan bahan pilihan dan proses berkualitas tinggi, setiap hisapan menghadirkan pengalaman yang lebih mendalam dan berkelas. Jelajahi koleksi terbaru kami sekarang.
                    </p>
                </div>
              </div>
            </div>
          </div>
    </div>
    <?php
}

function renderProductCard($imgSrc, $title, $price, $desc) {
    ?>
    <div class="col-md-4 col-sm-6">
        <div class="card product-card mb-4">
            <div class="image-container">
                <img src="<?php echo htmlspecialchars($imgSrc); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($title); ?>">
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($title); ?></h5>
                <p class="product-price"><?php echo htmlspecialchars($price); ?></p>
                <p class="card-text"><?php echo htmlspecialchars($desc); ?></p>
                <!-- Button with data attributes triggers the modal -->
                <button type="button" 
                        class="btn btn-secondary purchase-button" 
                        data-title="<?php echo htmlspecialchars($title); ?>" 
                        data-price="<?php echo htmlspecialchars($price); ?>">
                    Beli
                </button>
            </div>
        </div>
    </div>
    <?php
}

function renderProductListings() {
    ?>
    <div class="container my-5">
        <h1 class="text-center mb-4">Produk</h1>
        <!-- Tembakau Linting Original -->
        <h2 class="text-center mb-4 mt-4">Tembakau Linting Original</h2>
        <div class="row">
            <?php
            renderProductCard('img/kampoeng-anggur.png', 'Kampoeng Anggur', 'Rp15.000', 'Tingwe racikan original rasa anggur');
            renderProductCard('img/kampoeng-anggur-ice.png', 'Kampoeng Anggur ICE', 'Rp15.000', 'Tingwe racikan original rasa anggur dingin');
            renderProductCard('img/kampoeng-blueberry.png', 'Kampoeng Blueberry', 'Rp15.000', 'Tingwe racikan original rasa blueberry');
            renderProductCard('img/kampoeng-blueberry-ice.png', 'Kampoeng Blueberry ICE', 'Rp15.000', 'Tingwe racikan original rasa blueberry dingin');
            renderProductCard('img/kampoeng-madu.png', 'Kampoeng Madu', 'Rp15.000', 'Tingwe racikan original rasa madu');
            renderProductCard('img/kampoeng-mangga.png', 'Kampoeng Mangga', 'Rp15.000', 'Tingwe racikan original rasa mangga');
            renderProductCard('img/kampoeng-mangga-ice.png', 'Kampoeng Mangga ICE', 'Rp15.000', 'Tingwe racikan original rasa mangga dingin');
            renderProductCard('img/kampoeng-melon.png', 'Kampoeng Melon', 'Rp15.000', 'Tingwe racikan original rasa melon');
            renderProductCard('img/kampoeng-melon-ice.png', 'Kampoeng Melon ICE', 'Rp15.000', 'Tingwe racikan original rasa melon dingin');
            renderProductCard('img/kampoeng-nanas.png', 'Kampoeng Nanas', 'Rp15.000', 'Tingwe racikan original rasa nanas');
            renderProductCard('img/kampoeng-nanas-ice.png', 'Kampoeng Nanas ICE', 'Rp15.000', 'Tingwe racikan original rasa nanas dingin');
            renderProductCard('img/kampoeng-stroberi.png', 'Kampoeng Stroberi', 'Rp15.000', 'Tingwe racikan original rasa stroberi');
            renderProductCard('img/kampoeng-stroberi-ice.png', 'Kampoeng Stroberi ICE', 'Rp15.000', 'Tingwe racikan original rasa stroberi dingin');
            ?>
        </div>
        <!-- Tembakau Linting Lain -->
        <h2 class="text-center mb-4 mt-4">Tembakau Linting Lain</h2>
        <div class="row">
            <?php
            renderProductCard('img/Grandpa-Green-light-1.jpeg', 'Grandpa Green Light', 'Rp10.500', 'Tingwe racikan pabrikan LA Menthol');
            renderProductCard('img/Grandpa-Jambu-Kakek.jpeg', 'Grandpa Jambu Kakek', 'Rp10.500', 'Tingwe racikan pabrikan Juara Jambu');
            renderProductCard('img/Grandpa-Merah-membara.jpeg', 'Grandpa Merah Membara', 'Rp10.500', 'Tingwe racikan pabrikan GG Merah');
            renderProductCard('img/Grandpa-Sinar.jpeg', 'Grandpa Sang Sinar', 'Rp10.500', 'Tingwe racikan pabrikan rasa surya');
            renderProductCard('img/Grandpa-Tajam.jpeg', 'Grandpa Tajam', 'Rp10.500', 'Tingwe racikan pabrikan Djarum Super');
            renderProductCard('img/Grandpa-Teh-Kakek.jpg', 'Grandpa Teh Kakek', 'Rp10.500', 'Tingwe racikan pabrikan Juara Teh Manis');
            ?>
        </div>
        <!-- Kertas Linting -->
        <h2 class="text-center mb-4 mt-4">Kertas Linting</h2>
        <div class="row">
            <?php
            renderProductCard('img/paperbox.png', 'Kampoeng Bako Cigarette Paper (50x50 pcs)', 'Rp50.000', 'Kertas Linting Manis Original');
            ?>
        </div>
    </div>
    <?php
}


function renderPage() {
    renderFeaturedSection1();
    renderFeaturedSection2();
    renderProductListings();
}

renderPage();
?>

<div class="modal fade" id="purchaseModal" tabindex="-1" role="dialog" aria-labelledby="purchaseModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="#" >
        <div class="modal-header">
          <h5 class="modal-title" id="purchaseModalLabel">Pesan Produk</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="productTitle">Produk</label>
            <input type="text" class="form-control" id="productTitle" name="productTitle" readonly>
          </div>
          <div class="form-group">
            <label for="productPrice">Harga</label>
            <input type="text" class="form-control" id="productPrice" name="productPrice" readonly>
          </div>

          <div class="form-group">
            <label for="buyerName">Nama</label>
            <input type="text" class="form-control" id="buyerName" name="buyerName" placeholder="Masukkan nama anda" required>
          </div>
          <div class="form-group">
            <label for="buyerEmail">Email</label>
            <input type="email" class="form-control" id="buyerEmail" name="buyerEmail" placeholder="Masukkan email anda" required>
          </div>
          <div class="form-group">
            <label for="buyerPhone">Nomor Telpon</label>
            <input type="tel" class="form-control" id="buyerPhone" name="buyerPhone" placeholder="Masukkan nomor telpon anda" required>
          </div>
          <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Masukkan jumlah pembelian" min="1" required>
          </div>
          <div class="form-group">
            <label for="shippingAddress">Alamat</label>
            <textarea class="form-control" id="shippingAddress" name="shippingAddress" rows="3" placeholder="Masukkan alamat pengiriman" required></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Pesan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $(document).on('click', '.purchase-button', function(e){
    e.preventDefault();

    var title = $(this).data('title');
    var price = $(this).data('price');

    $('#productTitle').val(title);
    $('#productPrice').val(price);

    $('#purchaseModal').modal('show');
  });
});
</script>

<?php include 'footer.php'; ?>
