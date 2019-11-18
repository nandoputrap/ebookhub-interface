<?php
  require_once("templates/header.php");
?>


<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'book';

$db = mysqli_connect($host, $user, $password, $database);
global $db;
$get_ebooks = 'select ebook.*, penulis.nama_penulis from ebook INNER JOIN penulis ON ebook.penulis_id=penulis.penulis_id';

$run_ebooks = mysqli_query($db, $get_ebooks);

while($row_ebooks = mysqli_fetch_array($run_ebooks)){
  $ebook_id = $row_ebooks['ebook_id'];
  $penulis_id = $row_ebooks['penulis_id'];
  $nama_penulis = $row_ebooks['nama_penulis'];
  $judul_ebook = $row_ebooks['judul_ebook'];
  $tampilkan_judul = $judul_ebook;
  $harga = $row_ebooks['harga'];
  $cover_ebook = $row_ebooks['cover_ebook'];
  $ebook_docs = $row_ebooks['ebook_docs'];
  $deskripsi_ebook = $row_ebooks['deskripsi_ebook'];
  $isbn = $row_ebooks['isbn'];
  $sku = $row_ebooks['sku'];
  $tahun = $row_ebooks['tahun'];
  $jumlah_halaman = $row_ebooks['jumlah_halaman'];
}
 ?>


<div class="shop">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php">Teknologi</a></li>
          <li><a href="index.php">Pemrograman</a></li>
          <li>Buku Sakti Framework Laravel</li>
        </ul>
      </div>
    </div>

    <div class="row">

      <div class="col-md-3">
        <div class="item">
          <div class="card box-shadow text-center card-product-details">
            <?php echo "<img class='card-img-top img-fluid' src='$cover_ebook' alt='card-img'>" ?>
          </div>




          <div class="table-details">
            <table class="table table-hover table-bordered">
              <tbody>
                <tr>
                  <td>Tahun Terbit</td>
                  <td><?php echo "$tahun"; ?></td>
                </tr>
                <tr>
                  <td>Jumlah Halaman</td>
                  <td><?php echo "$jumlah_halaman"; ?></td>
                </tr>
                <tr>
                  <td>Bahasa</td>
                  <td>Indonesia</td>
                </tr>
                <tr>
                  <td>ISBN</td>
                  <td><?php echo "$isbn"; ?></td>
                </tr>
                <tr>
                  <td>SKU</td>
                  <td><?php echo "$sku"; ?></td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>

      <div class="col-md-9 description-box">

        <div class="row">
          <h1 id="ebook-title"><?php echo "$judul_ebook"; ?></h1>

          <p class="ebook-author"><?php echo "$nama_penulis"; ?></p>

          <p class="ebook-description text-justify">
            <?php echo "$deskripsi_ebook"; ?>
          </p>

          <p class="ebook-author">Format yang tersedia:</p>
          <ul class="list-inline">
            <?php echo "<li> <a href='$ebook_docs'>.pdf</a></li>"  ?>
            <li>.epub</li>
            <li>.mobi</li>
          </ul>

          <h4 class="ebook-price ebook-price-single"><strong><?php echo "Rp. $harga"; ?></strong></h4>

          <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"></i>&nbsp; Beli</a>
          <a href="cart.php" class="btn btn-lg btn-info btn-beli text-capitalize"><i class="fa fa-plus"> </i>&nbsp; Tambah ke Keranjang</a>


        </div>
      </div>
    </div>


    </div>

</div>

<?php
  require_once("templates/footer.php");
?>
