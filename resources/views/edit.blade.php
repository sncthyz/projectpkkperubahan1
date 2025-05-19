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

            /* Table Edit */

            .card {
                text-align: center;
                padding: 20px 40px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .card-container {
                display: flex;
                justify-content: center;
                padding: 20px;
            }


            .card h2 {
                margin-bottom: 20px;
                font-size: 24px;
            }

            .buttons {
                display: flex;
                justify-content: center;
                gap: 20px;
            }

            .buttons button {
                padding: 10px 20px;
                font-size: 16px;
                border: none;
                border-radius: 6px;
                color: white;
                cursor: pointer;
            }

            .btn-diskusi {
                background-color: #32cd32;
                /* Lime Green */
            }

            .btn-produk {
                background-color: #ff3333;
                /* Red */
            }
        </style>
    </head>
    <div class="card-container">
        <div class="card">
            <h2>Edit</h2>
            <div class="buttons">
                <button class="btn-diskusi">Post Diskusi</button>
                <button class="btn-produk">Post Produk</button>
            </div>
        </div>
    </div>
@endsection
