<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id'");

    if ($query) {
        header("Location: index.php?page=kelas");
    } else {
        echo "Gagal";
    }
}
?>