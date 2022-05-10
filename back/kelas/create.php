<div class="row">
    <div class="col-md-12">
        <h4>Add Class</h4>
        <form action="index.php?page=kelas_proses" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="kelas" class="form-label">Class's Name</label>
                <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Input Class's Name" required>
            </div>
            <div class="mb-2">
                <label for="id_kategori" class="form-label">Category</label>
                <select name="kategori" id="kategori" class="form-select" required>
                <option disabled selected>Select Category</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                foreach($query as $data){
                ?>
                <option value="<?=$data['id_kategori']?>"><?=$data['kategori']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="id_guru" class="form-label">Teacher</label>
                <select name="guru" id="guru" class="form-select" required>
                <option disabled selected>Select Teacher</option>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM guru");
                foreach($query as $data){
                ?>
                <option value="<?=$data['id_guru']?>"><?=$data['nama_guru']?></option>
                <?php
                }
                ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="desc" class="form-label">Description</label>
                <textarea name="desc" id="desc" class="form-control" placeholder="Input Description Class" required></textarea>
            </div>
            <div class="mb-2">
                <label for="about" class="form-label">About</label>
                <textarea name="about" id="about" class="form-control" placeholder="Input About Class" required></textarea>
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Price</label>
                <input name="price" id="price" class="form-control" placeholder="Input Price" required></input>
            </div>
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Input thumbnail" required>
            </div>
            <input type="submit" value="Add" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>