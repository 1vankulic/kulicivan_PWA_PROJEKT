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

        <?php
            echo '<h2 style="text-align:center";>UNESI NOVU VIJEST: </h2><hr style="width:50%">
                <form action="skripta.php" id="forma_unos" name="forma_unos" method="POST" enctype="multipart/form-data"><br>
                <div class="form-item">
                    <label for="title">Naslov vijesti:</label>
                    <div class="form-field">
                        <input type="text" name="title" id="title">
                    </div>
                    <span id="porukaTitle" class="bojaPoruke"></span>
                </div>

                <div class="form-item">
                    <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label>
                    <div class="form-field">
                        <textarea name="about" id="about" cols="30" rows="10"></textarea>
                    </div>
                    <span id="porukaAbout" class="bojaPoruke"></span>
                </div>

                <div class="form-item">
                    <label for="content">Sadržaj vijesti:</label>
                    <div class="form-field">
                        <textarea name="content" id="content" cols="30" rows="10"></textarea>
                    </div>
                    <span id="porukaContent" class="bojaPoruke"></span>
                </div>

                <div class="form-item">
                    <label for="pphoto">Slika: </label>
                    <div class="form-field">
                        <input type="file" accept="image/jpg" class="input-text" name="pphoto" id="pphoto"/>
                    </div>
                    <span id="porukaSlika" class="bojaPoruke"></span>
                </div>
                
                <div class="form-item">
                    <label for="category">Kategorija vijesti:</label>
                    <div class="form-field">
                    <select name="category" id="category">
                        <option value="" selected disabled hidden>Odaberi kategoriju:</option>
                        <option value="Znanost">Znanost</option>
                        <option value="Kultura">Kultura</option>
                        <option value="Ekonomija">Ekonomija</option>
                    </select>
                    </div>
                    <span id="porukaKategorija" class="bojaPoruke"></span>
                </div>

                <div class="form-item">
                    <label>Spremiti u arhivu:
                        <div class="form-field">
                            <input type="checkbox" name="archive">
                        </div>
                    </label>
                </div>

                <div class="form-item">
                    <button type="reset" value="Poništi">Poništi</button>
                    <button type="submit" name="add" id="add" value="Prihvati">Dodaj novu vijest</button>
                </div>
            </form><hr>';


            $query = "SELECT * FROM clanak";
            $result = mysqli_query($dbc, $query);

            echo '<h2 style="text-align:center";>UREDI/IZBRIŠI UNESENE VIJESTI</h2><hr style="width:50%">';

            while($row = mysqli_fetch_array($result)) {

                
                echo '<form enctype="multipart/form-data" id="forma_unos" name="forma_unos" action="skripta.php" method="POST">
                    <div class="form-item">
                        <label for="title">Naslov vijesti:</label>
                        <div class="form-field">
                            <input type="text" name="title" id="title" value="'.$row['naslov'].'">
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label>
                        <div class="form-field">
                            <textarea name="about" id="about" cols="30" rows="10">'.$row['sazetak'].'</textarea>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="content">Sadržaj vijesti:</label>
                        <div class="form-field">
                            <textarea name="content" id="content" cols="30" rows="10">'.$row['tekst'].'</textarea>
                        </div>
                    </div>


                    <div class="form-item">
                        <label for="pphoto">Slika:</label>
                        <div class="form-field">
                            <input style="margin: 0 auto;" type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto"/><br><br>
                            <img src="'.UPLPATH.$row['slika'] . '" width = 200px>
                        </div>
                    </div>
                    
                    <div class="form-item">
                        <label for="category">Kategorija vijesti:</label>
                        <div class="form-field">
                            <select name="category" id="category" value="'.$row['kategorija'].'">
                                <option value="Znanost">Znanost</option>
                                <option value="Kultura">Kultura</option>
                                <option value="Ekonomija">Ekonomija</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-item">
                        <label>Spremiti u arhivu:
                            <div class="form-field">
                                <input type="checkbox" name="archive">
                            </div>
                        </label>
                    </div>

                    <div class="form-item">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <button type="reset" value="Poništi">Poništi</button>
                        <button type="submit" name="update" id="update" value="Promjeni">Promjeni</button>
                        <button type="submit" name="delete" id="delete" value="Izbriši">Izbriši</button>
                    </div>

                </form><hr>';
            }   
        ?>
    </main>
    <footer>
		<p>&copy; Copyright Ivan Kulić PWA 2023</p>
    </footer>

    <script type="text/javascript">
        document.getElementById("add").onclick = function(event) {
            var slanjeForme = true;

            var poljeTitle = document.getElementById("title");
            var title = document.getElementById("title").value;
            if (title.length < 5 || title.length > 30) {
                slanjeForme = false;
                poljeTitle.style.border="1px dashed red";
                document.getElementById("porukaTitle").innerHTML="<hr>Naslov vijesti mora imati između 5 i 30 znakova!<hr><br>";
            } else {
                poljeTitle.style.border="1px solid green";
                document.getElementById("porukaTitle").innerHTML="";
            }

            var poljeAbout = document.getElementById("about");
            var about = document.getElementById("about").value;
            if (about.length < 10 || about.length > 100) {
                slanjeForme = false;
                poljeAbout.style.border="1px dashed red";
                document.getElementById("porukaAbout").innerHTML="<hr>Kratki sadržaj mora imati između 10 i 100 znakova!<hr><br>";
            } else {
                poljeAbout.style.border="1px solid green";
                document.getElementById("porukaAbout").innerHTML="";
            }

            var poljeContent = document.getElementById("content");
            var content = document.getElementById("content").value;
            if (content.length == 0) {
                slanjeForme = false;
                poljeContent.style.border="1px dashed red";
                document.getElementById("porukaContent").innerHTML="<hr>Sadržaj mora biti unesen!<hr><br>";
            } else {
                poljeContent.style.border="1px solid green";
                document.getElementById("porukaContent").innerHTML="";
            }

            var poljeSlika = document.getElementById("pphoto");
            var pphoto = document.getElementById("pphoto").value;
            if (pphoto.length == 0) {
                slanjeForme = false;
                poljeSlika.style.border="1px dashed red";
                document.getElementById("porukaSlika").innerHTML="<br><hr>Slika mora biti unesena!<hr><br>";
            } else {
                poljeSlika.style.border="1px solid green";
                document.getElementById("porukaSlika").innerHTML="";
            }

            var poljeCategory = document.getElementById("category");
            if(document.getElementById("category").selectedIndex == 0) {
                slanjeForme = false;
                poljeCategory.style.border="1px dashed red";
                document.getElementById("porukaKategorija").innerHTML="<hr>Kategorija mora biti odabrana!<hr><br>";
            } else {
                poljeCategory.style.border="1px solid green";
                document.getElementById("porukaKategorija").innerHTML="";
            }

            if (slanjeForme != true) {
                event.preventDefault();
            }
        };
    </script>
</body>

</html>