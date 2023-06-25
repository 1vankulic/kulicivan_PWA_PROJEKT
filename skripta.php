<?php
include 'connect.php';
    session_start();

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $query = "DELETE FROM clanak WHERE id = $id";
        $result = mysqli_query($dbc, $query);
    } else if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $about = $_POST['about'];
        $content = $_POST['content'];
        $image = $_FILES['pphoto']['name'];
        $category = $_POST['category'];
        $date = date('d.m.Y.');

        if (isset($_POST['archive'])) {
            $archive = 1;
        } else {
            $archive = 0;
        }

        if (empty($_FILES['logo']['name'])) {
            $id = $_POST['id'];
            
            $query = "UPDATE clanak SET naslov='$title', sazetak='$about', tekst='$content', kategorija='$category', arhiva='$archive' WHERE id = $id";
            $result = mysqli_query($dbc, $query);
        } else {
            $target_dir = 'img/'.$image;
            move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);

            $id = $_POST['id'];
            
            $query = "UPDATE clanak SET naslov='$title', sazetak='$about', tekst='$content', slika='$image', kategorija='$category', arhiva='$archive' WHERE id = $id";
            $result = mysqli_query($dbc, $query);
        }
    } else if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $about = $_POST['about'];
        $content = $_POST['content'];
        $image = $_FILES['pphoto']['name'];
        $category = $_POST['category'];
        $date = date('d.m.Y.');

        if (isset($_POST['archive'])) {
            $archive = 1;
        } else {
            $archive = 0;
        }

        $target_dir = 'img/'.$image;
        move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);

        $query = "INSERT INTO clanak (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) 
                VALUES ('$date', '$title', '$about', '$content', '$image', '$category', '$archive')";

        $result = mysqli_query($dbc, $query) or die('Error querying databese.');
        mysqli_close($dbc);
    }

    header("Location: index.php");
?>