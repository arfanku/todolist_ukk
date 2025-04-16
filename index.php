<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logold.png"> 
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(to right, #C93B3B, #631D1D);
        }
        .navbar .nav-link {
            color: #ffcccc;
        }
        .navbar .nav-link:hover {
            color: white;
            text-decoration: none;
        }
        .hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background: linear-gradient(to right, #C93B3B, #631D1D);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .btn-custom {
            background-color: white;
            color: #C93B3B;
            font-weight: bold;
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-custom:hover {
            background-color: #ffcccc;
            color: #631D1D;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="index.php">
                <img src="img/logold.png" alt="Logo" width="100" height="94" class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav me-5">
                <li class="nav-item">
                    <a class="nav-link" href="all_task.php">All Task</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero">
        <div>
            <h1>Kelola Waktumu dengan Mudah</h1>
            <p>Buat, atur, dan pantau semua tugasmu dengan sistem yang sederhana dan efektif.</p>
            <br>
            <a href="all_task.php" class="btn btn-custom">Mulai Sekarang</a>
        </div>
    </section>
    
    <footer class="text-center mt-2 text-danger ">
        <p>Made in Akhmad Arfan</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
