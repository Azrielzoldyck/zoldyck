<?php
    session_start();
?>
<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="#" class="active">list</a>
                <a href="konten.php">konten</a>
                <a href="profil.php">profil</a>
                <a href="logout.php">logout</a>
            </nav>
            
            <div class="content">
                <?php
                    //menulis html di dalam php
                    // if (isset($_GET['user_id'])){y
                    //       echo "halaman list";
                    // }
                ?>

                    <?php if(isset($_SESSION['user_id'])): ?>
                        <p>halaman list</p>
                    <?php else: ?>
                <p class="danger">Anda tidak dapat mengakses halaman ini</p>
                <a href="login.php" class="btn-login">Login</a>
                <?php endif; ?>
            </div>

        </div>
    </body>
</html>    