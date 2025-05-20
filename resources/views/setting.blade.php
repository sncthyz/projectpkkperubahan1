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
            overflow: hidden;
            /* Biar scroll cuma konten aja */
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

        /* TABLE SETTING LE */

        .settings-container {
            text-align: center;
            padding: 40px 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        .settings-container h2 {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .settings-options {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .option {
            text-align: center;
            width: 180px;
            padding: 20px;
            transition: transform 0.3s;
        }

        .option i {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .option h3 {
            margin: 10px 0 5px;
            font-size: 18px;
        }

        .option p {
            font-size: 14px;
            color: #777;
        }

        .option:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>
    

        <!-- ISI -->

        <div class="settings-container">
            <h2>Settings</h2>
            <a href="editprofile.html" style="text-decoration: none;">
                <div class="settings-options">
                    <div class="option">
                        <i class="fas fa-user-circle"></i>
                        <h3>Edit Profile</h3>
                        <p>Ubah Foto, Ubah Display nama</p>
                    </div>
            </a>
            <a href="changeaccount.html" style="text-decoration: none;">
                <div class="option">
                    <i class="fas fa-users-cog"></i>
                    <h3>Change Account</h3>
                    <p>Ganti Akun</p>
                </div>
            </a>
            <a href="laporbug.html" style="text-decoration: none;">
                <div class="option">
                    <i class="fas fa-info-circle"></i>
                    <h3>Lapor Bug</h3>
                    <p>Laporkan Bug</p>
                </div>
            </a>
        </div>
    </div>



</body>

</html>



@endsection