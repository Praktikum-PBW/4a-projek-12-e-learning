<div class="row">
    <div class="col-md-12">
        <h4>Add Teacher</h4>
        <form action="index.php?page=guru_proses" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="teacher" class="form-label">Teacher's Name</label>
                <input type="text" name="teacher" id="teacher" class="form-control" placeholder="Input teacher's name">
            </div>
            <div class="mb-2">
                <label for="bio" class="form-label">Bio</label>
                <textarea name="bio" id="bio" class="form-control" placeholder="Input Bio"></textarea>
            </div>
            <div class="mb-2">
                <label for="pasphoto" class="form-label">Passphoto</label>
                <input type="file" name="pasphoto" id="pasphoto" class="form-control" placeholder="Input Pasphoto">
            </div>
            <input type="submit" value="Add" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>