<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <h1>About Us</h1>
        <p>Meet Our Team</p>
    </section>

    <!-- Cards Section -->
    <div class="container">
        <!-- Card Anggota 1 -->
        <div class="card">
            <img src="{{ asset('images/member1.jpg') }}" alt="Foto Member 1">
            <h3>Nama 1</h3>
            <p><strong>NIM:</strong> 12345678</p>
            <p><strong>Email:</strong> email1@example.com</p>
        </div>

        <!-- Card Anggota 2 -->
        <div class="card">
            <img src="{{ asset('images/member2.jpg') }}" alt="Foto Member 2">
            <h3>Nama 2</h3>
            <p><strong>NIM:</strong> 87654321</p>
            <p><strong>Email:</strong> email2@example.com</p>
        </div>

        <!-- Card Anggota 3 -->
        <div class="card">
            <img src="{{ asset('images/member3.jpg') }}" alt="Foto Member 3">
            <h3>Nama 3</h3>
            <p><strong>NIM:</strong> 11223344</p>
            <p><strong>Email:</strong> email3@example.com</p>
        </div>

        <!-- Card Anggota 4 -->
        <div class="card">
            <img src="{{ asset('images/member4.jpg') }}" alt="Foto Member 4">
            <h3>Nama 4</h3>
            <p><strong>NIM:</strong> 44332211</p>
            <p><strong>Email:</strong> email4@example.com</p>
        </div>
    </div>

    <script src="{{ asset('js/aboutus.js') }}"></script>
</body>
</html>
