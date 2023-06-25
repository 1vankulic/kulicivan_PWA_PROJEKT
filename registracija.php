<?php
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $username = $_POST['username'];
    $lozinka = $_POST['password'];
    $hashedPassword = password_hash($lozinka, CRYPT_BLOWFISH);
    $razina = 0;
    $registeredUser = '';

    $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
    $stmt = mysqli_stmt_init($dbc);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    if (mysqli_stmt_num_rows($stmt) > 0) {
        $msg = 'Korisničko ime već postoji!';
    } else {
        $sql = "INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($dbc);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashedPassword, $razina);
            mysqli_stmt_execute($stmt);
            $registeredUser = true;
        }
    }

    mysqli_close($dbc);
?>