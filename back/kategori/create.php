<div class="row">
    <div class="col-md-12">
        <h4>Add Category</h4>
        <form action="index.php?page=kategori_proses" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="kategori" class="form-label">Category Name</label>
                <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Input category name">
            </div>
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" placeholder="Input Thumbnail">
            </div>
            <input type="submit" value="Add" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>