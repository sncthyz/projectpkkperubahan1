<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mind Loop UptoPremium</title>
    <style>
      /* Reset dasar */
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", sans-serif;
      }

      body {
        display: flex;
        height: 100vh;
        overflow: hidden; /* Biar scroll cuma konten aja */
        background-color: #f3f4f6;
      }

      /* Sidebar kiri */
      .sidebar {
        width: 220px;
        background-color: white;
        padding: 20px 10px;
        display: flex;
        flex-direction: column;
        position: sticky;
        top: 0;
        height: 100vh;
        border-right: 1px solid #ddd;
      }

     .sidebar .active {
       background-color: #f3f4f6;
      }

      .sidebar button {
        background: none;
        border: none;
        text-align: left;
        padding: 10px;
        cursor: pointer;
        font-size: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 10px;
      }

      .sidebar button:hover {
        background-color: #f0f0f0;
        border-radius: 6px;
      }

      /* Tombol premium di bawah sidebar */
      .premium-btn {
        margin-top: auto;
        padding: 12px;
        background-color: black;
        color: white;
        border-radius: 12px;
        text-align: center;
        cursor: pointer;
      }

      .premium-btn:hover {
        background-color: #333;
      }

      /* Bagian utama (navbar + konten) */
      .main {
        flex: 1;
        display: flex;
        flex-direction: column;
        height: 100vh;
        overflow: hidden;
      }

      /* Navbar atas */
      .navbar {
        display: flex;
        justify-content: space-between;
        padding: 10px 20px;
        background-color: white;
        position: sticky;
        top: 0;
        z-index: 999;
        border-bottom: 1px solid #ddd;
      }

      .navbar-left {
        display: flex;
        align-items: center;
        gap: 10px;
      }

      .navbar-left img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
      }

      .navbar-center {
        font-size: 14px;
        color: gray;
        text-align: center;
        margin-bottom: 10px;
      }

      .navbar-right {
        display: flex;
        align-items: center;
        gap: 15px;
      }

      .date-search {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .navbar-right input {
        padding: 6px 12px;
        border-radius: 20px;
        border: 1px solid #ccc;
        outline: none;
        margin-bottom: 5px;
      }

      .content-wrapper {
        overflow-y: auto;
        padding: 20px;
        flex: 1;
      }

        /* Table Uptopremium */

        .premium-card {
  background-color: #1e1e1e;
  color: white;
  padding: 30px 20px;
  border-radius: 20px;
  width: 300px;
  text-align: center;
  font-family: 'Segoe UI', sans-serif;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
  margin: auto;
}

.crown-icon {
  width: 60px;
  margin-bottom: 15px;
}

.premium-card h2 {
  font-size: 22px;
  margin-bottom: 10px;
}

.premium-card p {
  font-size: 14px;
  margin-bottom: 20px;
  line-height: 1.4;
}

.price-tag {
  background-color: white;
  color: black;
  padding: 10px 20px;
  border-radius: 10px;
  display: inline-block;
  font-size: 16px;
}

.price-tag span {
  color: #aaa;
  font-size: 13px;
  margin-left: 5px;
}


    
     
    </style>
  </head>
  <body>
    <!-- Sidebar kiri -->
    <div class="sidebar">
      <!-- Tombol navigasi -->
      <button>
        <span>➕</span>
        <a href="publishidea.html" style="text-decoration: none; color: black"
          >Publish Your Idea</a
        >
      </button>
      <button>
        <span>👥</span
        ><a href="grouppage.html" style="text-decoration: none; color: black">
          Group</a
        >
      </button>
      <button>
        <span>✏️</span>
        <a href="editpage.html" style="text-decoration: none; color: black"
          >Edit</a
        >
      </button>
      <button>
        <span>⚙️</span>
        <a href="settingpage.html" style="text-decoration: none; color: black"
          >Settings</a
        >
      </button>
      <button>
        <span>🔓</span>
        <a href="loginpage.html" style="text-decoration: none; color: black"
          >Log In</a
        >
      </button>
      <!-- Tombol premium di paling bawah -->
      <div class="premium-btn">
        👑
        <a
          href="upgradepremiumpage.html"
          style="text-decoration: none; color: white"
          >Upgrade to Premium</a
        >
      </div>
    </div>

    <!-- Bagian utama (navbar + isi konten) -->
    <div class="main">
      <!-- Navbar atas -->
      <div class="navbar">
        <!-- Kiri: logo dan judul -->
        <div class="navbar-left">
          <a href="landingpage.html"><img src="Mind_Loop-removebg-preview.png" alt="Logo" /></a>
          <strong>Mind Loop</strong>
        </div>

        <!-- Tengah: tanggal -->
        <div class="navbar-center"><b>Rabu</b>, 13 January 2008</div>

        <!-- Kanan: search, notif, akun -->
        <div class="navbar-right">
          <div class="date-search">
            <input type="text" placeholder="Search..." />
          </div>
          <span>🔔</span>
          <button>👤 Create Acc</button>
        </div>
      </div>

      <!-- ISI -->


       <div class="premium-card">
  <img src="crown_jpg-removebg-preview.png" alt="Crown Icon" class="crown-icon" />
  <h2>Premium</h2>
  <p>Dapatkan akses, Untuk ubah<br>gambar profil menjadi video</p>
<a href="">
      <div class="price-tag">
    <strong>Rp. 30K</strong><span>/Month</span>
  </div>
</a>
</div>



      <br><br>

  </body>
</html>
