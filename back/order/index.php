<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Order</h4>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Total</th>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM bayar JOIN user on bayar.id_user = user.id_user");
                    $no = 1;
                    foreach($query as $data){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_user'] ?></td>
                        <td><?= $data['quantity'] ?></td>
                        <td><?= $data['total'] ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>