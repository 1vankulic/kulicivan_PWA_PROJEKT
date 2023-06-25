<?php
    include 'connect.php';
    define('UPLPATH', 'img/');
    echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
        echo '<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400&family=Montserrat&family=Playfair+Display&display=swap" rel="stylesheet">';
        echo '<link rel="stylesheet" type="text/css" href="style.css">';
        echo '<title>L\'OBS</title>';
    echo '</head>';

    $kategorija = $_GET['id'];
    $query = "SELECT * FROM clanak WHERE kategorija = '$kategorija' AND arhiva = 0";
    $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));

    echo '<body>';
        echo '<header>
                <div>
                    <h1 id="naslov">L\'OBS</h1>
                </div>

                <nav>
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="kategorija.php?id=znanost">ZNANOST</a></li>
                        <li><a href="kategorija.php?id=kultura">KULTURA</a></li>
                        <li><a href="kategorija.php?id=ekonomija">EKONOMIJA</a></li>';
                        
                        session_start();
                        if (isset($_SESSION['$username']) && $_SESSION['$level'] == 1) {
                            echo '<li><a href="administracija.php">ADMINISTRACIJA</a></li>';
                            echo '<li><a href="logout.php">ODJAVA</a></li>';
                        } elseif (isset($_SESSION['$username']) && $_SESSION['$level'] == 0) {
                            echo '<li><a href="logout.php">ODJAVA</a></li>';
                        } else {
                            echo '<li><a href="registracija_forma.php">REGISTRACIJA</a></li>';
                            echo '<li><a href="login.php">PRIJAVA</a></li>';
                        }
                    echo ' </ul>
                </nav>
            </header>';

        echo '<main style="margin-top:12px;">
            <hr>
            <h1 class="h1-kategorija">'.strtoupper($kategorija).'</h1>
            <section>';
        while ($row = mysqli_fetch_array($result)) {
            echo '<article class="index-article">
                    <img src="' . UPLPATH . $row['slika'] . '">
                    <div class="index-article-heading">
                        <h4><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h4>
                        <p style="font-size: 12px; color:gray">Objavljeno: '.$row['datum'].'</p><br>
                    </div>
                </article>';
        }
        echo '</section>';
        echo '</main>';
        echo '<footer>
		        <p>&copy; Copyright Ivan Kulić PWA 2023</p>
            </footer>';
    echo '</body>';
?>