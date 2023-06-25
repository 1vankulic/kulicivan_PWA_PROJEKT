<?php
    session_start();
    session_destroy();

    echo '<script>
            alert("Odjavili ste se!");
        </script>';

    header("Location: index.php");
?>