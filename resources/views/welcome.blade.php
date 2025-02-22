<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PT Tasnida Agro Lestari</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Poppins, sans-serif;
    }


    /* Navbar */
    .navbar {
      position: fixed;
      top: 0;
      width: 100vw;
      background: rgba(0, 0, 0, 0.9);
      padding: 50px;
      align-items: right;
      justify-content: right;
      z-index: 1000;
    }

    .navbar .logo-container {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .navbar img {
      width: 50px;
      height: auto;
      filter: brightness(0) invert(1);
    }

    .navbar .nav-links {
      display: flex;
      gap: 20px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin: 0 20px;
      font-size: 18px;
      font-weight: bold;
    }

    .navbar a:hover {
      color: #f0a500;
    }

    /* Auto Scroll Effect */
    html {
      scroll-behavior: smooth;
    }

    /* Section */
    .section {
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      padding: 50px 20px;
    }

    /* Home Section */
    #home {
      position: relative;
      width: 100%;
      height: 100vh;
      /* Section pertama full layar */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      overflow: hidden;
    }

    /* Background Image (Hanya di section ini) */
    #home::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: url('img/500x500/sawit-01.jpg') no-repeat center center/cover;
      filter: blur(3px);
      /* Efek blur ringan */
      z-index: -2;
    }

    /* Gambar tambahan di belakang teks */
    .background-image {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Menjaga proporsi */
      z-index: -1;
      /* Transparansi agar teks tetap jelas */
    }

    h1 {
      font-size: 50px;
      font-weight: bold;
    }

    p {
      font-size: 24px;
      margin-top: 10px;
    }

    /* Profil Section */
    #profil {
      background: #f5f5f5;
      color: black;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .profil-container {
      display: flex;
      gap: 20px;
      margin-top: 20px;
    }

    .profil-item {
      width: 300px;
      text-align: center;
    }

    .profil-item img {
      width: 100%;
      height: 200px;
      border-radius: 10px;
    }

    .profil-item p {
      margin-top: 10px;
      font-size: 18px;
    }

    /* Visi Misi Section */
    #visi-misi {
      background: #2c3e50;
      color: white;
      flex-direction: column;
      padding: 50px 20px;
    }

    .visi-misi-container {
      max-width: 800px;
      text-align: center;
    }

    .visi-misi-container h2 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .visi-misi-container p {
      font-size: 20px;
      margin-bottom: 10px;
    }

    /* Login Section */
    #login {
      background: white;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <div class="navbar">
    <a href="#home">Home</a>
    <a href="#profil">Profil</a>
    <a href="#visi-misi">Visi & Misi</a>
    @if (Route::has('login'))
      @auth
        <a href="{{ url('/dashboard') }}">Dashboard</a>
      @else
        <a href="{{ route('login') }}">Login</a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}">Register</a>
        @endif
      @endauth

    @endif
  </div>

  <!-- Home Section -->
  <div id="home" class="section">
    <!-- Gambar tambahan -->
    <img src="img/sawit-landing.jpg" alt="Gambar" class="background-image">

    <div class="overlay">
      <h1>PT Tasnida Agro Lestari</h1>
      <p>Sistem Informasi Ketatausahaan</p>
    </div>
  </div>

  <!-- Profil Section -->
  <div id="profil" class="section">
    <h2>Keunggulan Kami</h2>
    <div class="profil-container">
      <div class="profil-item">
        <img src="img/500x500/sawit-01.jpg" alt="Keunggulan 1">
        <p>Inovasi Teknologi Terdepan</p>
      </div>
      <div class="profil-item">
        <img src="img/500x500/sawit-02.jpg" alt="Keunggulan 2">
        <p>Profesional & Berpengalaman</p>
      </div>
      <div class="profil-item">
        <img src="img/500x500/sawit-03.jpg" alt="Keunggulan 3">
        <p>Layanan Cepat & Responsif</p>
      </div>
    </div>
  </div>

  <!-- Visi & Misi Section -->
  <div id="visi-misi" class="section">
    <div class="visi-misi-container">
      <h2>Visi & Misi</h2>
      <p><strong>Visi:</strong> Menjadi perusahaan terdepan dalam inovasi teknologi</p>
      <p><strong>Misi:</strong></p>
      <p>1. Memberikan layanan terbaik kepada pelanggan</p>
      <p>2. Mengembangkan teknologi berkelanjutan</p>
      <p>3. Meningkatkan kesejahteraan karyawan</p>
    </div>
  </div>

  <footer style="background-color: #000000; color: white; padding: 20px 0; font-size: 14px;">
    <div class="container">
      <div class="row" style="display: flex; align-items: center; justify-content: space-between;">
        <div class="col-md-6" style="display: flex; align-items: center;">
          <img src="img/logo.png" alt="PT ASNIDA AGRO LESTARI"
            style="width: 70px; height: auto; margin-right: 10px; filter: brightness(0) invert(1);">
          <p style="margin: 0;">
          <h4>© 2025 PT ASNIDA AGRO LESTARI. All Rights Reserved.</h4>
          </p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>
