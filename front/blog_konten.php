<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM blog where id_blog = '$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>
<div class="container py-5">
    <div class="row-3 p-3">
        <div class="col">
            <div class="p-3"><h1 class="fs-9 fw-bold mb-4 text-center"><?=$data['judul']?></h1></div>
        </div>
        <div class="col">
            <div class="p-3"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/blog/<?=$data['thumbnail']?>" alt="" /></div>
        </div>
        <div class="col">
            <div class="p-3"><?php echo nl2br(htmlspecialchars($data['content']));?></div>
        </div>
    </div>
</div>
<?php
}}
?>