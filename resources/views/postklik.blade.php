@extends('components.layouts')

@section('content')
        

  <head>

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

        /* POST DI KLIK */

        .post-detail {
  width: 90%;
  max-width: 800px;
  margin: auto;
  border: 1px solid #ddd;
  border-radius: 10px;
  overflow-y: scroll;
  font-family: 'Poppins', sans-serif;
  background-color: #fff;
}

.post-img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}

.post-content {
  padding: 20px;
}

.post-content h2 {
  font-size: 24px;
  margin-bottom: 5px;
}

.post-meta {
  color: gray;
  font-size: 14px;
  margin-bottom: 10px;
}

.post-description {
  font-size: 16px;
  line-height: 1.6;
}

.post-actions {
  display: flex;
  gap: 20px;
  margin-top: 15px;
  color: gray;
  cursor: pointer;
}

.post-comments {
  padding: 20px;
  border-top: 1px solid #ddd;
  background-color: #fafafa;
}

.comment {
  margin-bottom: 20px;
}

.comment .reply {
  margin-left: 20px;
  background-color: #f0f0f0;
  padding: 10px;
  border-radius: 8px;
  margin-top: 5px;
}

.reply-toggle {
  font-size: 12px;
  color: #007bff;
  cursor: pointer;
}


      
    </style>
  </head>
  <body>
    
      <!-- ISI -->


      <div class="post-detail">
  <img src="hitler jpg.jpeg" class="post-img" alt="Gambar Post">

  <div class="post-content">
    <h2>Hitler mati dimana??</h2>
    <p class="post-meta">2 Apr 2025 &bull; Jakii</p>
    <p class="post-description">
      banyak teori yang muncul hitler mati dimana ygy
    </p>
    <div class="post-actions">
      <span>💬 Balas</span>
      <span>💬 12</span>
    </div>
  </div>

  <div class="post-comments">
    <div class="comment">
      <p><strong>🧑 Anonim</strong> - 2 Apr 2025</p>
      <p>Komentar pertama pada post ini<br><span class="reply-toggle">Lihat Balasan ⌄</span></p>
      <div class="reply">
        <p><strong>👤 Anononame</strong> - 2 Apr 2025</p>
        <p>Komentar balasan pada post ini</p>
      </div>
    </div>

    <div class="comment">
      <p><strong>🧑 Anonim</strong> - 2 Apr 2025</p>
      <p>Komentar kedua pada post ini</p>
    </div>
  </div>
</div>


      
  </body>
</html>

@endsection