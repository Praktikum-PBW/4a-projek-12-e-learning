<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Teacher</h4>
            <a href="index.php?page=guru_create" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name of Teacher</th>
                        <th>Bio</th>
                        <th>Pasphoto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM guru");
                    $no = 1;
                    foreach($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_guru'] ?></td>
                        <td><?= substr($data['bio_guru'],0,50); echo "..." ?></td>
                        <td>
                            <img src="../aset/img/guru/<?= $data['pasphoto'] ?>" class="img-fluid img-thumbs" width="100" alt="">
                        </td>
                        <td width="200">
                            <div class="btn-group">
                                <a href="index.php?page=guru_edit&id=<?= $data['id_guru'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            </div>
                            <a href="index.php?page=guru_delete&id=<?= $data['id_guru'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>