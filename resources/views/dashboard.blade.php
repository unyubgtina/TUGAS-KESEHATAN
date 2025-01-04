<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Klinik</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Sidebar Navigation -->
    <nav>
        <!-- Admin Profile -->
        <div class="admin-profile">
            <img src="{{ asset('images/admin-profile.jpg') }}" alt="Admin Profile">
            <div class="info">
                <h3>Admin Name</h3>
                <p>Administrator</p>
            </div>
        </div>

        <!-- Navigation Links -->
        <a href="#">Dashboard</a>

        <!-- Master Data Dropdown -->
        <div class="nav-item">
            <a href="#">Master Data</a>
            <div class="dropdown-content">
                <a href="#">Data User</a>
                <a href="#">Data Loket</a>
                <a href="#">Data Layanan</a>
                <a href="#">Data Dokter</a>
            </div>
        </div>

        <a href="#">Antrian</a>
        <a href="#">Plasma Antrian</a>
        <a href="#">Pendaftaran</a>
        <a href="#">Laporan</a>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Analisis Dashboard Klinik</h1>
        </header>

        <!-- Dashboard Overview -->
        <div class="dashboard">
            <div class="card">
                <h2>Jumlah Pasien Hari Ini</h2>
                <p>120</p>
            </div>
            <div class="card">
                <h2>Jumlah Antrian Hari Ini</h2>
                <p>35</p>
            </div>
            <div class="card">
                <h2>Jumlah Dokter</h2>
                <p>8</p>
            </div>
        </div>
    </div>

</body>
</html>
