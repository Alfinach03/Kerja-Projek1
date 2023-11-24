
<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM `admin` WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO `admin` (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Admin Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin_login.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Admin Mumtaz Aqiqah Bekasi</title>
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar"> 
      
      <a href="#" class="navlogo">Mumtaz Aqiqah <span>Bekasi</span></a>
      <div class="navnav">
      <a href="../index.php#home">Home</a>
      <a href="../index.php#pricelist">Pricelist</a>
      <a href="../index.php#menul">Menu</a>
      <a href="../index.php#feedback">Feedback</a>
      </div>
  </nav>
  <!-- Navbar End -->

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text">Admin <span>Register</span></p>
            <div class="input-group">
                <input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Konfirmasi Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Sudah mendaftar? <a href="admin_login.php">Klik disini</a></p>
        </form>
    </div>
</body>
</html>