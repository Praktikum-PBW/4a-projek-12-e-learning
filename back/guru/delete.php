<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM guru WHERE id_guru='$id'");

    if ($query) {
        header("Location: index.php?page=guru");
    } else {
        echo "Gagal";
    }
}
?>