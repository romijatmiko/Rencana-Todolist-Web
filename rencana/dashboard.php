<?php 

include 'connection.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!--doctype html-->
<html>
<head>
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
<!--Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!---------------------------------------------->
<script src="https://kit.fontawesome.com/73ea2339d2.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<link rel="shortcut icon" href="img/favicon/favicon.png"/>
<title>Rencana | Dashboard</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Mulish:wght@200;400&display=swap" rel="stylesheet">
<!--style----->

	
</head>
<body id="body-pd">
    <div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" style="text-decoration:none" class="nav__logo"></a>
                </div>
                <div class="nav__list">
                    <a href="dashboard.php" style="text-decoration:none" class="nav__link active">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Dashboard</span>
                    </a>
                    <a href="create.html" style="text-decoration:none" class="nav__link">
                        <ion-icon name="add-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Create New List</span>
                    </a>
                    <a href="mylist.html" style="text-decoration:none" class="nav__link">
                        <ion-icon name="reader-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">My List</span>
                    </a>
                    <a href="settings.html" style="text-decoration:none" class="nav__link">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Settings</span>
                    </a>
                </div>
            </div>

            <a href="logout.php" style="text-decoration:none" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <?php echo "<h4> Welcome " . $_SESSION ['username'] . "</h4>"; ?>
         <div class="page-1">
            <!--Foto Profile--------------->
            <div class="foto-profile">
                <img src="img/illustrasi/4207.jpg"/>	
            </div>
            <!--Kata Sambutan-------------->
            <div class="text-sambutan">
                <h1>Selamat Datang di Rencana</h1>
                <p>Mari Catat Setiap Rencana Yang Anda Lakukan.
                Buat Hidup Anda Menjadi Lebih Teratur.
                </p>
            <!--Button tambahan------->
                <a href="#" class="myproject-button">Buat Rencana Baru</a>
            </div>
            </div>
        
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    
    <!-- ===== MAIN JS ===== -->
    <script src="js/main.js"></script>
</body>
</html>
