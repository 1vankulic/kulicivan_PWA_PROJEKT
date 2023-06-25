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
    <div  id="registracija_form">
    <form method="POST">
        <h1 style="margin-bottom: 5vh">PRIJAVA</h1>
        <label for="user">Korisničko ime:</label>
        <br>
        <input name="user" type="text" required />
        <br><br>
        <label for="password">Lozinka:</label>
        <br>
        <input name="password" type="password" required />
        <br><br>
        <input name="submit" type="submit" value="Pošalji" />
    </form>
    <p id="a-pocetna"><a href='index.php'>POČETNA STRANICA</a></p>
    </div>
    


    <?php
        include 'connect.php';
        session_start();

        if ($dbc) {
            if (isset($_POST["submit"])) {
                $user = $_POST["user"];
                $password = $_POST["password"];
                $query = "SELECT username, password, razina FROM korisnik WHERE username = ?";
                $stmt = mysqli_stmt_init($dbc);

                if (mysqli_stmt_prepare($stmt, $query)) {
                    mysqli_stmt_bind_param($stmt, 's', $user);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    mysqli_stmt_bind_result($stmt, $username, $hash, $levelKorisnika);
                    mysqli_stmt_fetch($stmt);
    
                    if (password_verify($password, $hash)) {
                        $uspjesnaPrijava = true;

                        if ($levelKorisnika == 1) {
                            $admin = true;     
                        } else {
                            $admin = false;
                        }

                        $_SESSION['$username'] = $user;
                        $_SESSION['$level'] = $levelKorisnika;
                    } else {
                        $uspjesnaPrijava = false;
                        echo '<div class="login-error-div">
                                <br><span>Unijeli ste pogrešno korisničko ime ili lozinku</span>
                                <br><br><span><a href=\'registracija_forma.php\'>REGISTRACIJA</span>
                            </div>"';                    
                    }
                    mysqli_stmt_close($stmt);
                }

                if (($uspjesnaPrijava == true && $admin == true) || (isset($_SESSION['$username'])) && $_SESSION['$level'] == 1) {
                    $query = "SELECT * FROM clanak";
                    $result = mysqli_query($dbc, $query);
                 
                    echo '<div style="text-align:center"><br><span>Bok ' . $username . '! Uspješno ste prijavljeni kao administrator.</span></div>';
                    header("Location: index.php");
                } else if ($uspjesnaPrijava == true && $admin == false) {
                    echo '<div style="text-align:center"><br><span>Bok ' . $username . '! Uspješno ste prijavljeni, ali niste administrator.</span></div>';
                    header("Location: index.php");
                } else if (isset($_SESSION['$username']) && $_SESSION['$level'] == 0) {
                    echo '<div style="text-align:center"><br><span>Bok ' . $username. '! Uspješno ste prijavljeni, ali niste administrator.</span></div>';
                    header("Location: index.php");
                }
            }
        }
        
        mysqli_close($dbc);
    ?>
</body>

</html>