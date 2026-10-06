<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Tombol aksi (Edit / Hapus) */
        .btn-aksi {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border-radius: 50px;
            padding: 4px 14px;
            font-weight: 500;
            transition: transform .15s ease, box-shadow .15s ease;
        }
        .btn-aksi:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, .25);
        }
        .btn-aksi:active {
            transform: translateY(0);
            box-shadow: none;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    
    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>