<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arsip Surat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .wrapper {
            display: flex;
            flex: 1;
        }
        .sidebar {
            width: 250px;
            background: #212529;
            color: white;
            transition: transform 0.3s ease;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
        }
        .sidebar a:hover {
            background: #343a40;
            color: #fff;
        }
        .sidebar.hidden {
            transform: translateX(-100%);
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="btn btn-outline-light d-lg-none" id="toggleSidebar">☰</button>
    <a class="navbar-brand ms-2" href="{{ route('surat.index') }}">📂 Arsip Surat</a>
  </div>
</nav>

<div class="wrapper">
    <div class="sidebar d-none d-lg-block" id="sidebar">
        <h5 class="p-3">Menu</h5>
        <a href="{{ route('surat.index') }}">📑 Arsip Surat</a>
        <a href="{{ route('categories.index') }}">📂 Kategori</a>
        <a href="{{ route('about') }}">👤 About</a>
    </div>
    <div class="content">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</div>

<footer class="bg-dark text-white text-center py-2 mt-auto">
    <small>© {{ date('Y') }} Arsip Surat Desa Karangduren</small>
</footer>

<script>
    document.getElementById('toggleSidebar').addEventListener('click', () => {
        document.getElementById('sidebar').classList.toggle('d-none');
    });
</script>
</body>
</html>
