<?php 
if(isset($_POST['checkout'])){

    $id_user = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_user']))));
    $quantity = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jumlah']))));
    $total = htmlentities(htmlspecialchars(strip_tags(trim($_POST['total_semua']))));
    
    $query = mysqli_query($koneksi, "INSERT INTO bayar VALUES(null, '$id_user', '$quantity', '$total')");
    if($query){
        unset($_SESSION["shopping_cart"]);
        echo"<script>window.location.href='index.php' ; </script>" ;
    }else{
        echo "gagal";
    } 
}
 ?>