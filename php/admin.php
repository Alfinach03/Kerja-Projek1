<?php
include('config.php');
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: admin_login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mumtaz Aqiqah Bekasi</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;700&display=swap" rel="stylesheet">

  <script src="https://unpkg.com/feather-icons"></script>

</head>

<script src="admin.js"></script>

<body>
  <!-- Navbar Start -->
  <nav class="navbar">

    <a href="#" class="navlogo">Mumtaz Aqiqah <span>Bekasi</span></a>
    <div class="navnav" id="navbarlink">
      <a href="#home">Home</a>
      <a href="#feedback">Feedback</a>
    </div>

    <div class="btn-logout">
      <a href="logout.php">Logout</a>
    </div>

    <div class="sidebar" id="sidebar">
        <i class="fa-solid fa-bars"></i>
      </div>

    <div class="dropdown-menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#feedback">Feedback</a></li>
      <div class="btn-logdown">
      <a href="logout.php">Logout</a>
    </div>
      </div>

  </nav>
  <!-- Navbar End -->

  <!-- Home Section Start -->
  <section class="herhome" id="home">
    <main class="content">
      <h2>Selamat Datang <br>Admin <span><?php echo $_SESSION['username']; ?></span> !</h2>
    </main>
  </section>
  <!-- Home Section End -->

  <!-- Feedback -->
  <section class="feedback" id="feedback">

  <h2><span>Feedback</span> Pengunjung</h2>
  <!-- <div class="row"> -->
    <div class="komen">
  <table border="1" class="table1">
        <thead>
            <tr>
                <th style="border-radius: 20px 0px 0px 0px;">No</th>
                <th>Waktu</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Komentar</th>
                <th style="border-radius: 0px 20px 0px 0px;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM feedback ORDER BY waktu ASC";
            $query = mysqli_query($conn, $sql);
            while ($feed = mysqli_fetch_array($query)) {
              echo "<tr>";
              echo "<td style='text-align:center;'>". $feed['id']. "</td>";
              echo "<td style='text-align:center;'>". $feed['waktu']. "</td>";
              echo "<td style='text-align:center;'>". $feed['username']. "</td>";
              echo "<td style='text-align:center;'>". $feed['email']. "</td>";
              echo "<td style='text-align:center;'>". $feed['telpon']. "</td>";
              echo "<td style='text-align:center;'>". $feed['komentar']. "</td>";
              echo "<td style='text-align:center;'>"."<a href='hapus.php?id=" . $feed['id'] . "' class='btn-hapus' onclick='return confirmDelete()' >Hapus</a>". "</td>";
            }
          ?>
            </tr>
        </tbody>
    </table>
        <p style="text-align:center" class="total">Total:<span>
                <?php echo mysqli_num_rows($query) ?>
            </p></span>
        </div>


  </table>
  <!-- </div> -->

  </section>
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
      <a href="#feedback">Feedback</a>
    </div>

    <div class="credit">
      <p>Tambahkan Admin klik<a class="admin" href="admin_register.php"> disini</a>.<br><p>Created by <a href="https://www.instagram.com/vin.fine/">Alfin</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!-- Footer -->

</body>

<!-- Scroll Navbar -->

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


</html>