<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nama_kelas = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kelas']))));
    $id_guru = htmlentities(htmlspecialchars(strip_tags(trim($_POST['guru']))));
    $id_kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));
    $deskripsi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['desc']))));
    $tentang = htmlentities(htmlspecialchars(strip_tags(trim($_POST['about']))));
    $harga = htmlentities(htmlspecialchars(strip_tags(trim($_POST['price']))));

    // thumbnail
    $extensi_diperbolehkan = array('png','jpg');
    $thumbnail = htmlentities(htmlspecialchars(strip_tags(trim($_FILES['thumbnail']['name']))));
    $x = explode('.',$thumbnail);
    $extensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if(in_array($extensi, $extensi_diperbolehkan) == true){
        if($ukuran < 10044070){
            move_uploaded_file($file_tmp, '../aset/img/kelas/' . $thumbnail);
            $query = mysqli_query($koneksi, "UPDATE kelas SET 
            nama_kelas = '$nama_kelas',
            id_guru ='$id_guru',
            id_kategori = '$id_kategori',
            deskripsi = '$deskripsi',
            tentang = '$tentang',
            harga = '$harga',
            thumbnail ='$thumbnail' 
            WHERE id_kelas='$id'");
            if($query){
                header("Location: index.php?page=kelas");
            }else{
                echo "gagal";
            }
        }else{
            echo "Ukuran file terlalu besar";
        }
    }else{
        echo "Ekstensi salah";
    }
}
