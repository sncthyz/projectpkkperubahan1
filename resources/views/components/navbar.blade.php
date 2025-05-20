<div class="navbar">
    <!-- Kiri: logo dan judul -->
    <div class="navbar-left">
        <a href="landingpage.html"><img src="{{ asset('img/Mind_Loop-removebg-preview.png') }}" alt="Logo" /></a>
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
        <button>👤 Create</button>

        <!-- resources/views/dashboard.blade.php -->
        {{-- <h1>Selamat Datang, {{ auth()->user()->name }}</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form> --}}

    </div>
</div>
