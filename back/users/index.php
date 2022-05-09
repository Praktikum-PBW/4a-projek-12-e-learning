<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Account</h4>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM user");
                    $no = 1;
                    if(mysqli_num_rows($query) > 0){
                    foreach($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['nama_user'] ?></td>
                        <td><?= $data['username'] ?></td>
                        <td><?= $data['phone_number'] ?></td>
                    </tr>
                    <?php
                    }
                }else {
                       ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-danger">Tidak ada data.....</div>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </div>
    </div>
</div>