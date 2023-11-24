<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "mumtazweb";
  $conn = mysqli_connect($server, $user, $pass, $database);
  if (!$conn) {
      die("Koneksi ke database gagal: " . mysqli_connect_error());
  }

  error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mumtaz Aqiqah Bekasi</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700;800&display=swap" rel="stylesheet">

  <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar"> 

      <a href="#" class="navlogo">Mumtaz Aqiqah <span>Bekasi</span></a>
      <div class="navnav" id="navbarlink">
      <a href="#home">Home</a>
      <a href="#pricelist">Pricelist</a>
      <a href="#menul">Menu</a>
      <a href="#abus">Tentang Kami</a>
      <a href="#feedback">Feedback</a>
      </div>
      <div class="sidebar" id="sidebar">
        <i class="fa-solid fa-bars"></i>
      </div>

      <div class="dropdown-menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#pricelist">Pricelist</a></li>
      <li><a href="#menul">Menu</a></li>
      <li><a href="#abus">Tentang Kami</a></li>
      <li><a href="#feedback">Feedback</a></li>
      </div>

  </nav>
  <!-- Navbar End -->

  <!-- Java script -->
  <script src="script/script.js"></script>

  <!-- Home Section Start -->
  <section class="herhome" id="home">
    <main class="content">
      <h2>Selamat Datang di <br>Mumtaz Aqiqah <span>Bekasi</span></h2>
      <p>Kami adalah penyedia layanan aqiqah di Bekasi dengan harga murah, rasa enak, profesional, terpercaya dan amanah.
        <br><br><span>Mumtaz Aqiqah <span class="mum">Bekasi</span></span> mempunyai komitmen memberikan yang terbaik pada setiap pelayanan dengan menggunakan bahan kualitas terbaik dan diolah oleh tim yang profesional sehingga kami dipercaya oleh Ayah dan Bunda sejak tahun 2016.
        Mari tunaikan ibadah aqiqah orang tercinta bersama Mumtaz
      </p>
    <a href="https://wa.me/62895336683496" class="cta" target="_blank">Pesan Sekarang</a>   
    </main>
  </section>
  <!-- Home Section End -->

  <!-- Pricelist Start -->
  <section id="pricelist" class="pricelist">
    <h2><span>Price</span>list</h2>
    <div class="row">
      <div class="product-card">
        <div class="product-img">
          <img src="img/product/box.webp" alt="PAKET BOX">
        </div>
        <div class="product-content">
          <h3>PAKET BOX</h3>
        </div>
        <div class="product-icon">
          <a href="#" class="item-detail-button1"><i class="fa-regular fa-eye fa-lg"></i></a>
        </div>
      </div>
      <div class="product-card">
        <div class="product-img">
          <img src="img/product/bento.webp" alt="PAKET BENTO">
        </div>
        <div class="product-content">
          <h3>PAKET BENTO</h3>
        </div>
        <div class="product-icon">
          <a href="#" class="item-detail-button2"><i class="fa-regular fa-eye fa-lg"></i></a>
        </div>
      </div>
      </div>
  </section>
  <!-- Pricelist End -->

  <!-- Menu -->
<section id="menul" class="menu">
  <h2><span>Menu</span> Kami</h2>
  <p>Berikut daftar menu kami.</p>
  <div class="row">
    <div class="menu-card">
      <img src="img/menu/menu1.png" alt="Daging Panggang" class="menu-card-img">
      <div class="menu-stars">
          </div>
      <h3 class="menu-card-title">- Daging Panggang -</h3>
    </div>
    <div class="menu-card">
      <img src="img/menu/menu2.png" alt="Kentang" class="menu-card-img">
      <div class="menu-stars">
          </div>
      <h3 class="menu-card-title">- Kentang -</h3>
    </div>
    <div class="menu-card">
      <img src="img/menu/menu3.png" alt="Gulai Kambing" class="menu-card-img">
      <div class="menu-stars">
          </div>
      <h3 class="menu-card-title">- Gulai Kambing -</h3>
    </div>
    <div class="menu-card">
      <img src="img/menu/menu4.png" alt="Daging Lada Hitam" class="menu-card-img">
      <div class="menu-stars">
          </div>
      <h3 class="menu-card-title">- Daging Lada Hitam -</h3>
    </div>
</section>
  <!-- Menu End -->

  <!-- About us Start -->
  <section id="abus" class="abus">
    <h2><span>Tentang</span> Kami</h2>
    <div class="row">
      <div class="img-abus">
        <img src="img/abus.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Kenapa harus Mumtaz ?</h3>
        <p>Mumtaz Aqiqah Bekasi adalah penyedia layanan aqiqah di Bekasi dengan harga murah, rasa enak, profesional, terpercaya dan amanah.</p>
        <p>Kami berdiri sejak tahun 2016 dan memiliki komitmen untuk memberikan yang terbaik di setiap pelayanan dengan amanah dan sesuai Syari'at Islam. Karena kepuasan dan kepercayaan dari Ayah dan Bunda sangat kami utamakan.</p>
      </div>
    </div>
  </section>
  <!-- About us End -->

  <!-- FeedBack Start -->

  <section class="feedback" id="feedback">
    <h2><span>Feed</span>back</h2>

    
    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d671.0141712125322!2d107.0588668792359!3d-6.24154412946059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698fef1aa5627b%3A0x9716d139239178d3!2sMumtaz%20Aqiqah%20Bekasi!5e0!3m2!1sid!2sid!4v1699847960708!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        
        <form action="index.php" method="post">
          <div class="input-group">
            <i class="fa-solid fa-user fa-lg"></i>
            <input type="hidden" name="post_id" value="<?= $_GET['id'] ?>">
            <input type="text" placeholder="Nama" name="nama" required>
          </div>
          <div class="input-group">
            <i class="fa-solid fa-envelope fa-lg"></i>
            <input type="email" placeholder="Email" name="email" required>
          </div>
          <div class="input-group">
            <i class="fa-solid fa-phone fa-lg"></i>
      <input type="text" placeholder="No. hp" name="telpon" required>
    </div>
    <div class="input-message">
      <textarea name="komentar" id="komentar" cols="30" rows="10" placeholder="Masukan" required></textarea>
    </div>
    <button type="submit" class="btn" name="submit">Kirim Masukan</button>
  </form>
</div>

<h2 class="terakhir"><span>Feedback</span> Terakhir</h2>

<div class="komen">

<?php
// Assuming $conn is your database connection

// Displaying comments
$sql = "SELECT * FROM feedback ORDER BY waktu DESC";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    $feed = mysqli_fetch_array($query);
        $nama = htmlspecialchars($feed['username']);
        
        // Mensensor bagian dari email
        $email = htmlspecialchars($feed['email']);
        $sensored_email = censorEmail($email);
        $telpon = htmlspecialchars($feed['telpon']);
        $sensored_telpon = censorTelpon($telpon);

        // Mensensor beberapa kata dalam komentar
        $komentar = htmlspecialchars($feed['komentar']);
        $sensored_komentar = censorWords($komentar);

        $waktu = htmlspecialchars($feed['waktu']);

        // Pisahkan setiap komentar dengan elemen HTML yang sesuai
        echo "<div class='komentak'>";
        echo "<h3> Nama <span>: $nama</span></h3>";
        echo "<h4> Email <span>: $sensored_email</span></h4>";
        echo "<h4> No. Telpon <span>: $sensored_telpon </span></h4>";
        echo "<p class='isi'> Komentar <span class='isikom'>:<br><br>$sensored_komentar</span></p>";
        echo "<p class='waktu' style='text-align:right;'><span>$waktu</span></p>";
        echo "</div>";
    }
else {
    echo "<p>Tidak ada komentar.</p>";
}

// Function to censor part of the email
function censorEmail($email) {
    list($username, $domain) = explode('@', $email);
    $censored_username = substr($username, 0, 1) . str_repeat('*', max(strlen($username) - 2, 0)) . substr($username, -1);
    return $censored_username . '@' . $domain;
}

// Function to censor part of the Telpon
function censorTelpon($Telpon) {
  // Menghilangkan karakter selain digit (0-9)
  $nomorTelepon = preg_replace('//', '', $Telpon);

  // Menghitung panjang nomor telepon
  $panjangNomor = strlen($nomorTelepon);

  // Menentukan berapa banyak digit yang akan disensor (misalnya, 4 digit terakhir tidak disensor)
  $digitTidakDisensor = 4;
  $digitSensored = $panjangNomor - $digitTidakDisensor;

  // Menghasilkan string yang terdiri dari karakter bintang (*) sebanyak digit yang disensor
  $stringBintang = str_repeat('*', $digitSensored);

  // Menggabungkan digit yang tidak disensor dan string bintang untuk membentuk nomor telepon yang disensor
  $Telponsensor = substr($nomorTelepon, 0, $digitTidakDisensor) . $stringBintang;

  return $Telponsensor;
}

// Function to censor some words in the comment
function censorWords($komentar) {
    // List of words to censor
    $censor_words = array("bajingan", "anjing", "bangsat");

    // Replace censored words with asterisks
    foreach ($censor_words as $word) {
        $komentar = str_ireplace($word, str_repeat('*', strlen($word)), $komentar);
    }

    return $komentar;
}?>
</div>
  </section>

<!-- Feedback Insert SQL -->

<?php
if (isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $telpon = $_POST['telpon'];
  $komentar = $_POST['komentar'];
  $post_id = $_POST['post_id'];
  date_default_timezone_set('Asia/Jakarta');
  //waktu comment
  $current_timestamp = date('d M Y H:i'); 

  $sql = "INSERT INTO `feedback` (id, username, email, telpon, komentar, waktu) VALUES ('$post_id', '$nama', '$email', '$telpon', '$komentar', '$current_timestamp')";
  if ($conn->query($sql) === TRUE){
    echo "<script>alert('Terima Kasih atas masukan anda')</script>";
  } else{
    echo "<script>alert('Maaf masukan anda tidak dapat terkirim')</script>";
    echo "Error: " .$sql. "<br>" .$db->error;
  }
}
?>


  <!-- Feedback End -->

  <!-- Footer -->
  <footer>
    <div class="social">
      <div class="logo"><a href="#"><i class="fa-brands fa-facebook fa-2xl"></i></a></div>
      <div class="logo"><a href="#"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      | 
      <a href="#pricelist">Pricelist</a>
      | 
      <a href="#menul">Menu</a>
      | 
      <a href="#abus">Tentang Kami</a>
      | 
      <a href="#feedback">Feedback</a>
    </div>

    <div class="credit">
      <p>Created by <a class="creator" href="https://www.instagram.com/vin.fine/" target="_blank">Alfin</a>. | <a class="admin" href="../p/php/admin.php">&copy;</a> 2023.</p>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Modal box -->

  <div class="modal" id="item-detail-modal1">
      <div class="modal-container">
        <a href="#pricelist" class="close-icon1"><i class="fa-solid fa-circle-xmark fa-xl" style="color: #517926;"></i></a>
        <h1><span>Paket</span> Box</h1>
        <div class="modal-content">
          <img src="img/product/box.webp" alt="Ribollita">
          <div class="paket-content">
          <h3>1 Kambing</h3>
            <li>50 Nasi Box            =            Rp. 2.250.000</li>
            <li>60 Nasi Box            =            Rp. 2.600.000</li>
            <li>70 Nasi Box            =            Rp. 2.950.000</li>
            <li>80 Nasi Box            =            Rp. 3.400.000</li>
            <li>100 Nasi Box           =            Rp. 4.300.000</li>
            <hr class="batas">
            <h3>2 Kambing</h3>
            <li>80 Nasi Box            =            Rp. 4.130.000</li>
            <li>100 Nasi Box           =            Rp. 4.500.000</li>
            <li>120 Nasi Box           =            Rp. 5.120.000</li>
            <li>150 Nasi Box           =            Rp. 5.950.000</li>
            <div class="modal-stars">
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="modal" id="item-detail-modal2">
      <div class="modal-container">
        <a href="#pricelist" class="close-icon2"><i class="fa-solid fa-circle-xmark fa-2xl" style="color: #517926;"></i></a>
        <h1><span>Paket</span> Bento</h1>
        <div class="modal-content">
          <img src="img/product/bento.webp" alt="Ribollita">
          <div class="paket-content">
            <h3>1 Kambing</h3>
            <li>50 Nasi Box            =            Rp. 2.250.000</li>
            <li>60 Nasi Box            =            Rp. 2.600.000</li>
            <li>70 Nasi Box            =            Rp. 2.950.000</li>
            <li>80 Nasi Box            =            Rp. 3.400.000</li>
            <li>100 Nasi Box           =            Rp. 4.300.000</li>
            <hr class="batas">
            <h3>2 Kambing</h3>
            <li>80 Nasi Box            =            Rp. 4.130.000</li>
            <li>100 Nasi Box           =            Rp. 4.500.000</li>
            <li>120 Nasi Box           =            Rp. 5.120.000</li>
            <li>150 Nasi Box           =            Rp. 5.950.000</li>
            <div class="modal-stars">
              <br><br>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Modal Box End -->

  <!-- Confirm Form Submission -->
  
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

  <!-- Confirm Form Submission -->
  
  <!-- Feather Icons -->
  <script>
    feather.replace()
  </script>


<script src="https://unpkg.com/@sidsbrmnn/scrollspy@1.x/dist/scrollspy.min.js"></script>
    <script>
      window.onload = () => {
        scrollSpy('#navbarlink', {
          sectionSelector: 'section',
          targetSelector: 'a',
          offset: 100,
          activeClass: 'clicked'
        })
      }
    </script>


</body>

</html>