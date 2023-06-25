<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&family=Montserrat&family=Playfair+Display&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>L'OBS</title>
</head>

<body>
    <?php
        include 'connect.php';

        if ($dbc) {
            echo "<section role='main'>
                    <h1 style='margin: 10vh 0vh; text-align: center'>REGISTRACIJA</h1>
                    <form enctype='multipart/form-data' action='' method='POST'>
                        <div class='form-item'>
                            <label for='title'>Ime: </label>
                            <div class='form-field'>
                                <input type='text' name='ime' id='ime' class='form-fieldtextual'>
                            </div>
                            <span id='porukaIme' class='bojaPoruke'></span>
                        </div>

                        <div class='form-item'>
                            <label for='about'>Prezime: </label>
                            <div class='form-field'>
                                <input type='text' name='prezime' id='prezime' class='formfield-textual'>
                            </div>
                            <span id='porukaPrezime' class='bojaPoruke'></span>
                        </div>

                        <div class='form-item'>
                            <label for='content'>Korisničko ime:</label>
                            <div class='form-field'>
                                <input type='text' name='username' id='username' class='formfield-textual'>
                            </div>
                            <span id='porukaUsername' class='bojaPoruke'></span>
                        </div>

                        <div class='form-item'>
                            <label for='pphoto'>Lozinka: </label>
                            <div class='form-field'>
                                <input type='password' name='password' id='password' class='formfield-textual'>
                            </div>
                            <span id='porukaPass' class='bojaPoruke'></span>
                        </div>

                        <div class='form-item'>
                            <label for='pphoto'>Ponovite lozinku: </label>
                            <div class='form-field'>
                                <input type='password' name='password_again' id='password_again' class='form-field-textual'>
                            </div>
                            <span id='porukaPassRep' class='bojaPoruke'></span>
                        </div>

                        <div class='form-item'>
                            <button type='submit' value='Prijava' id='submit' name='submit'>Registracija</button>
                        </div>

                    </form>
                    <div id='a-pocetna' style='position: absolute; left: 70%'><a href='index.php'>POČETNA STRANICA</a></div>

                </section>";
                
                if (isset($_POST['submit'])) {

                    $ime = $_POST['ime'];
                    $prezime = $_POST['prezime'];
                    $user = $_POST['username'];
                    $password = $_POST['password'];
                    $password_again = $_POST['password_again'];
                    $razina = 0;

                    
                    $hashed_password = password_hash($password, CRYPT_BLOWFISH);
                    $query = 'SELECT username FROM korisnik WHERE username = ?';
                    $stmt = mysqli_stmt_init($dbc);
    
                    if (mysqli_stmt_prepare($stmt, $query)) {
                        mysqli_stmt_bind_param($stmt, 's', $user);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                    }
    
        
                    if (mysqli_stmt_num_rows($stmt) >= 1) {
                        echo '<div style="text-align: center;">
                            <br><span>Korisničko ime se već koristi</span>
                            </div>';
                    } elseif ($password_again != $password) {
                        echo '<div style="text-align: center;">
                                <br><span>Ponovljena lozinka nije ista</span>
                            </div>';
                    } else {
                        $query = 'INSERT INTO korisnik (ime, prezime, username, password, razina) VALUES (?, ?, ?, ?, ?)';

                        $stmt = mysqli_stmt_init($dbc);
    
                        if (mysqli_stmt_prepare($stmt, $query)) {
                            mysqli_stmt_bind_param($stmt, 'ssssi', $ime, $prezime, $user, $hashed_password, $razina);
                            mysqli_stmt_execute($stmt);
    
                            $registeredUser = true;
                            
                            echo "<div style='text-align: center;'>
                                    <br><span>Korisnik je uspješno registriran!</span>
                                </div>";

                            header("Location: index.php");
                        }                        
                    }
                }
            }   
        mysqli_close($dbc);
    ?>


    <script>
        document.getElementById("submit").onclick = function(event) {
            var slanjeForme = true;

            var poljeIme = document.getElementById("ime");
            var ime = document.getElementById("ime").value;

            if (ime.length == 0) {
                slanjeForme = false;
                poljeIme.style.border="1px dashed red";
                document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
            } else {
                poljeIme.style.border="1px solid green";
                document.getElementById("porukaIme").innerHTML="";
            }

            var poljePrezime = document.getElementById("prezime");
            var prezime = document.getElementById("prezime").value;

            if (prezime.length == 0) {
                slanjeForme = false;
                poljePrezime.style.border="1px dashed red";
                document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>";
            } else {
                poljePrezime.style.border="1px solid green";
                document.getElementById("porukaPrezime").innerHTML="";
            }

            var poljeUsername = document.getElementById("username");
            var username = document.getElementById("username").value;

            if (username.length == 0) {
                slanjeForme = false;
                poljeUsername.style.border="1px dashed red";
                document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
            } else {
                poljeUsername.style.border="1px solid green";
                document.getElementById("porukaUsername").innerHTML="";
            }

            var poljePass = document.getElementById("password");
            var pass = document.getElementById("password").value;
            var poljePassRep = document.getElementById("password_again");
            var passRep = document.getElementById("password_again").value;

            if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
                slanjeForme = false;
                poljePass.style.border="1px dashed red";
                poljePassRep.style.border="1px dashed red";
                document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
                document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
            } else {
                poljePass.style.border="1px solid green";
                poljePassRep.style.border="1px solid green";
                document.getElementById("porukaPass").innerHTML="";
                document.getElementById("porukaPassRep").innerHTML="";
            }

            if (slanjeForme != true) {
                event.preventDefault();
            }
        };
    </script>
</body>

</html>