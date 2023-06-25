<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400&family=Montserrat&family=Playfair+Display&display=swap" rel="stylesheet">
    <title>L'OBS</title>
</head>

<body>
    <header>
        <div>
            <h1 id="naslov">L'OBS</h1>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="kategorija.php?id=znanost">ZNANOST</a></li>
                <li><a href="kategorija.php?id=kultura">KULTURA</a></li>
                <li><a href="kategorija.php?id=ekonomija">EKONOMIJA</a></li>
             
                <?php
                    session_start();
                    if (isset($_SESSION['$username']) && $_SESSION['$level'] == 1) {
                        echo '<li>
                                <a href="administracija.php">ADMINISTRACIJA</a>
                            </li>';
                        echo '<li>
                                <a href="logout.php">ODJAVA</a>
                            </li>';
                    } elseif (isset($_SESSION['$username']) && $_SESSION['$level'] == 0) {
                        echo '<li>
                                <a href="logout.php">ODJAVA</a>
                            </li>';
                    } else {
                        echo '<li>
                                <a href="registracija_forma.php">REGISTRACIJA</a>
                            </li>';
                        echo '<li>
                                <a href="login.php">PRIJAVA</a>
                            </li>';
                    }
                ?>

			</ul>
        </nav>
    </header>

    <main>
        <hr>

        <?php
            include 'connect.php';
            define('UPLPATH', 'img/');
        ?>

        <section>
            <h2>ZNANOST</h2>
            <?php
                $query = "SELECT * FROM clanak WHERE arhiva = 0 AND kategorija = 'znanost' LIMIT 3";
                $result = mysqli_query($dbc, $query);

                while($row = mysqli_fetch_array($result)) {
                    echo '<article class="index-article">
                            <img src="' . UPLPATH . $row['slika'] . '">
                            <div class="index-article-heading">
                                <h4><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h4>
                                <p style="font-size: 12px; color:gray">Objavljeno: '.$row['datum'].'</p><br>
                            </div>
                        </article>';
                }
            ?>

        </section>
        <section>
            <h2>KULTURA</h2>
            <?php
                $query = "SELECT * FROM clanak WHERE arhiva = 0 AND kategorija = 'kultura' LIMIT 3";
                $result = mysqli_query($dbc, $query);

                while($row = mysqli_fetch_array($result)) {
                    echo '<article class="index-article">
                            <img src="' . UPLPATH . $row['slika'] . '">
                            <div class="index-article-heading">
                                <h4><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h4>
                                <p style="font-size: 12px; color:gray">Objavljeno: '.$row['datum'].'</p><br>
                            </div>
                        </article>';
                }
            ?>
        </section>
        <section>
            <h2>EKONOMIJA</h2>
            <?php
                $query = "SELECT * FROM clanak WHERE arhiva = 0 AND kategorija = 'ekonomija' LIMIT 3";
                $result = mysqli_query($dbc, $query);

                while($row = mysqli_fetch_array($result)) {
                    echo '<article class="index-article">
                            <img src="' . UPLPATH . $row['slika'] . '">
                            <div class="index-article-heading">
                                <h4><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h4>
                                <p style="font-size: 12px; color:gray">Objavljeno: '.$row['datum'].'</p><br>
                            </div>
                        </article>';
                }
            ?>
        </section>
    </main>


    <footer>
		<p>&copy; Copyright Ivan Kulić PWA 2023</p>
    </footer>

</body>

</html>