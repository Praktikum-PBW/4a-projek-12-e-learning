<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nama_guru = htmlentities(htmlspecialchars(strip_tags(trim($_POST['teacher']))));
    $bio_guru = htmlentities(htmlspecialchars(strip_tags(trim($_POST['bio']))));

    // thumbnail
    $extensi_diperbolehkan = array('png','jpg');
    $pasphoto = htmlentities(htmlspecialchars(strip_tags(trim($_FILES['pasphoto']['name']))));
    $x = explode('.',$pasphoto);
    $extensi = strtolower(end($x));
    $ukuran = $_FILES['pasphoto']['size'];
    $file_tmp = $_FILES['pasphoto']['tmp_name'];

    if(in_array($extensi, $extensi_diperbolehkan) == true){
        if($ukuran < 10044070){
            move_uploaded_file($file_tmp, '../aset/img/guru' . $pasphoto);
            $query = mysqli_query($koneksi, "UPDATE guru SET 
            nama_guru = '$nama_guru',
            bio_guru ='$bio_guru',
            pasphoto ='$pasphoto' 
            WHERE id_guru='$id'");
            if($query){
                header("Location: index.php?page=guru");
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
