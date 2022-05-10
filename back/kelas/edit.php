<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM kelas where id_kelas = '$id' ");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Class</h4>
        <form action="index.php?page=kelas_update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-2">
                <label for="kelas" class="form-label">Class's Name</label>
                <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Input Class's Name" value="<?=$data['nama_kelas']?>">
            </div>
            <div class="mb-2">
                <label for="id_kategori" class="form-label">Category</label>
                <select name="kategori" id="kategori" class="form-select">
                <option disabled selected>Select Category</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                foreach($query as $kate){
                ?>
                <option value="<?=$kate['id_kategori']?>"><?=$kate['kategori']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="id_guru" class="form-label">Teacher</label>
                <select name="guru" id="guru" class="form-select">
                <option disabled selected>Select Teacher</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM guru");
                foreach($query as $guru){
                ?>
                <option value="<?=$guru['id_guru']?>"><?=$guru['nama_guru']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="desc" class="form-label">Description</label>
                <textarea name="desc" id="desc" class="form-control" placeholder="Input Description Class"><?=htmlentities($data['deskripsi']);?></textarea>
            </div>
            <div class="mb-2">
                <label for="about" class="form-label">About</label>
                <textarea name="about" id="about" class="form-control" placeholder="Input About Class"><?=htmlentities($data['tentang']);?></textarea>
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Price</label>
                <input name="price" id="price" class="form-control" placeholder="Input Price" value="<?=$data['harga']?>"></input>
            </div>
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Input thumbnail">
            </div>
            <input type="submit" value="Update" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location: index.php?page=kelas");
    }
}else{
    header("Location: Index.php?page=kelas");
}
?>