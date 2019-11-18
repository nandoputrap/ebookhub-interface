<?php
  require_once("templates/header.php");
  // include_once("functions.php");
?>


<!-- Begin Welcome -->
<div class="welcome">
  <div class="container">
    <div class="row">
      <div class="col-md-6 greetings">
        <h1 id="greetings-1">Hi, kami Ebookhub!</h1>
        <h3 id="greetings-2">Platform untuk menerbitkan e-book, membaca e-book, dan membeli e-book yang tepat untukmu!</h3>
        <h3 id="greetings-3">Ebookhub ingin membantu minat baca di Indonesia, ayo mulai membaca dan menerbitkan sekarang!</h3>

        <div class="col-md-6">
          <button type="button" class="btn btn-primary btn-block btn-ebookhub" onclick="window.location='#kategori'">Mulai Baca</button>
        </div>
        <div class="col-md-6">
          <button type="button" class="btn btn-primary btn-block btn-ebookhub">Mulai Terbitkan</button>
        </div>
      </div>

      <div class="col-md-6 devices text-center">
        <img src="images/devices.png" alt="" class="img-responsive">
      </div>
    </div>
  </div>
</div>
<!-- End Welcome -->

<!-- Begin How-to-use -->
<div class="how-to-use">
  <div class="container">
    <div class="row">

        <div class="col-lg-12">
          <h1 class="how-to-use-title text-center">Bagaimana menerbitkan buku di Eboookhub?</h1>
        </div>

        <div class="col-md-4 col-sm-12">
          <div class="box-how-to-use box-shadow text-center">
            <i class="fa fa-upload fa-how-to-use" aria-hidden="true"></i>
            <h2>Unggah</h2>
            <p>Unggah draft e-book mu dan kami akan segera melakukan pengecekan dan kelayakan terbit.</p>

          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          <div class="box-how-to-use box-shadow text-center">
            <i class="fa fa-edit fa-how-to-use" aria-hidden="true"></i>
            <h2>Proses Edit</h2>
            <p>Proses pengeditan ± 1 bulan, apabila draft e-book mu layak, maka akan dihubungi oleh tim kami dan melanjutkan ke proses negosiasi harga jual buku.</p>

          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          <div class="box-how-to-use box-shadow text-center">
            <i class="fa fa-book fa-how-to-use" aria-hidden="true"></i>
            <h2>Terbit</h2>
            <p>Unggah draft e-book mu dan kami akan segera melakukan pengecekan dan kelayakan terbit.</p>

          </div>
        </div>


    </div>
</div>
</div>
<!-- End How-to-use -->

<!-- Begin Baru diterbitkan -->
<div class="baru-diterbitkan">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Baru Diterbitkan</h1>
      </div>

      <div class="col-lg-12 text-center">
        <div id="owl-baru-diterbitkan" class="owl-carousel owl-theme">

          <?php

            getEbooks();

           ?>

        </div>

        <div class="customNavigation">
          <a class="btn prev">Previous</a>
          <a class="btn next">Next</a>
          <!-- <a class="btn play">Autoplay</a>
          <a class="btn stop">Stop</a> -->
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End Baru diterbitkan -->

<!-- Begin Buku terpopuler -->
<div class="baru-diterbitkan">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Buku Terpopuler</h1>
      </div>

      <div class="col-lg-12 text-center">
        <div id="owl-buku-terpopuler" class="owl-carousel owl-theme">

          <div class="item">
            <div class="card box-shadow">
              <img class="card-img-top img-fluid" src="images/ebook-1.png" alt="card-img">
              <div class="card-body">
                <a href="index.php"><h3 class="card-title ebook-title"><strong>Judul buku</strong></h3></a>
                <p class="card-text ebook-author">Nama Penulis</p>
                <h4 class="card-title ebook-price"><strong>Rp. 100.000</strong></h4>
                <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"> </i>&nbsp; Beli</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="card box-shadow">
              <img class="card-img-top img-fluid" src="images/ebook-2.png" alt="card-img">
              <div class="card-body">
                <a href="index.php"><h3 class="card-title ebook-title"><strong>Judul buku</strong></h3></a>
                <p class="card-text ebook-author">Nama Penulis</p>
                <h4 class="card-title ebook-price"><strong>Rp. 100.000</strong></h4>
                <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"> </i>&nbsp; Beli</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="card box-shadow">
              <img class="card-img-top img-fluid" src="images/ebook-1.png" alt="card-img">
              <div class="card-body">
                <a href="index.php"><h3 class="card-title ebook-title"><strong>Judul buku</strong></h3></a>
                <p class="card-text ebook-author">Nama Penulis</p>
                <h4 class="card-title ebook-price"><strong>Rp. 100.000</strong></h4>
                <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"> </i>&nbsp; Beli</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="card box-shadow">
              <img class="card-img-top img-fluid" src="images/ebook-2.png" alt="card-img">
              <div class="card-body">
                <a href="index.php"><h3 class="card-title ebook-title"><strong>Judul buku</strong></h3></a>
                <p class="card-text ebook-author">Nama Penulis</p>
                <h4 class="card-title ebook-price"><strong>Rp. 100.000</strong></h4>
                <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"> </i>&nbsp; Beli</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="card box-shadow">
              <img class="card-img-top img-fluid" src="images/ebook-1.png" alt="card-img">
              <div class="card-body">
                <a href="index.php"><h3 class="card-title ebook-title"><strong>Judul buku</strong></h3></a>
                <p class="card-text ebook-author">Nama Penulis</p>
                <h4 class="card-title ebook-price"><strong>Rp. 100.000</strong></h4>
                <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"> </i>&nbsp; Beli</a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="card box-shadow">
              <img class="card-img-top img-fluid" src="images/ebook-2.png" alt="card-img">
              <div class="card-body">
                <a href="index.php"><h3 class="card-title ebook-title"><strong>Judul buku</strong></h3></a>
                <p class="card-text ebook-author">Nama Penulis</p>
                <h4 class="card-title ebook-price"><strong>Rp. 100.000</strong></h4>
                <a class="btn btn-lg btn-danger btn-beli text-capitalize"><i class="fa fa-shopping-cart"></i>&nbsp; Beli</a>
              </div>
            </div>
          </div>
        </div>

        <div class="customNavigation">
          <a class="btn prev2">Previous</a>
          <a class="btn next2">Next</a>
          <!-- <a class="btn play">Autoplay</a>
          <a class="btn stop">Stop</a> -->
        </div>
      </div>
    </div>
  </div>

</div>
<!-- End Buku terpopuler -->


<!-- Begin Kategori -->
<div class="kategori" id="kategori">
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-12">
        <h1 class="text-center">Kategori</h1>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="hvrbox">
          <div class="centered"><h1>Non-Fiksi</h1></div>
			    <img src="images/non-fiction.jpg" alt="Fiksi" class="hvrbox-layer_bottom">
			    <div class="hvrbox-layer_top hvrbox-layer_slideup hvr-non-fiction">
				    <div class="hvrbox-text">
              <ul>
                <?php getCategoriesNonfiction(); ?>
              </ul>
            </div>
			    </div>
		    </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="hvrbox">
          <div class="centered"><h1>Fiksi</h1></div>
			    <img src="images/fiction.jpg" alt="Mountains" class="hvrbox-layer_bottom">
			    <div class="hvrbox-layer_top hvrbox-layer_slideup hvr-fiction">
				    <div class="hvrbox-text">
              <ul>
                <?php getCategoriesFiction(); ?>
              </ul>
            </div>
			    </div>
		    </div>
      </div>
    </div>
  </div>
</div>
<!-- End Kategori -->

<!-- Begin partner -->
<div class="partner">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-12">
        <h1>Partner Kami</h1>
      </div>

      <div class="col-md-3 col-sm-12">
        <img src="images/gramedia.png" alt="">
      </div>
      <div class="col-md-3 col-sm-12">
        <img src="images/kompas.jpg" alt="">
      </div>
      <div class="col-md-3 col-sm-12">
        <img src="images/elex.png" alt="">
      </div>
      <div class="col-md-3 col-sm-12">
        <img src="images/mizan.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<!-- End partner -->

<!-- Begin Subscribe -->
<div class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 subscribe-box text-center">
        <h2>Jadilah yang pertama tahu berita dan promosi menarik dari kami! (Gratis)</h2>
        <div class="input-group input-subscribe">
          <input type="email" class="form-control" placeholder="Masukkan alamat e-mail...">
          <span class="input-group-btn">
            <button class="btn btn-danger" type="submit">Berlangganan</button>
          </span>
        </div>
	    </div>
    </div>
  </div>
</div>
<!-- End Subscribe -->


<?php
  require_once("templates/footer.php");
?>
