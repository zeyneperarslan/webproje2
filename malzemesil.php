<?php
session_start();
if (!isset($_SESSION['kullaniciadi'])) {
    header("Location: index.php");
    exit;
}

require('web.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM malzemeler WHERE id = $id";

    if (mysqli_query($baglanti, $sql)) {
        header("Location: malzeme.php");
    } else {
        echo 'Hata: ' . mysqli_error($baglanti);
    }
} else {
    header("Location: malzeme.php");
}
?>
