<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));

    $extensi_diperbolehkan = array('png','jpg','jpeg');
    $thumbnail = htmlentities(htmlspecialchars(strip_tags(trim($_FILES['thumbnail']['name']))));
    $x = explode('.',$thumbnail);
    $extensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if(in_array($extensi, $extensi_diperbolehkan) == true){
        if($ukuran < 10044070){
            move_uploaded_file($file_tmp, '../aset/img/kategori/' . $thumbnail);
            $query = mysqli_query($koneksi, "UPDATE kategori SET 
            kategori = '$nama',
            thumbnail ='$thumbnail' 
            WHERE id_kategori='$id'");
            if($query){
                header("Location: index.php?page=kategori");
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