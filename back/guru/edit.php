<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM guru where id_guru = '$id' ");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Teacher</h4>
        <form action="index.php?page=guru_update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-2">
                <label for="judul" class="form-label">Teacher's Name</label>
                <input type="text" name="teacher" id="teacher" class="form-control" placeholder="Input title" value="<?= $data['nama_guru']?>">
            </div>
            <div class="mb-2">
            <label for="content" class="form-label">Bio</label>
            <input type="text" name="bio" id="bio" class="form-control" placeholder="Input category name"value="<?= $data['bio_guru']?>" >
            </div>
            <div class="mb-2">
            <label for="thumbnail" class="form-label">Pasphoto</label>
                <input type="file" name="pasphoto" id="pasphoto" class="form-control" placeholder="Input thumbnail" value="<?=$data['pasphoto'] ?>">
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location: index.php?page=blog");
    }
}else{
    header("Location: Index.php?page=blog");
}
?>