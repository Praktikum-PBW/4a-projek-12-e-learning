<div class="cards">
    <div class="card-single">
        <div>
            <h1>11</h1>
            <span>Class</span>
        </div>
        <div>
            <span class="las la-clipboard-list"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>125</h1>
            <span>Orders</span>
        </div>
        <div>
            <span class="las la-shopping-bag"></span>
        </div>
    </div>
    <div class="card-single">
        <div>
            <h1>$75</h1>
            <span>Income</span>
        </div>
        <div>
            <span class="lab la-google-wallet"></span>
        </div>
    </div>
</div>

<div class="recent-grid">
    <div class="classes">
        <div class="card">
            <div class="card-header">
                <h2>Classes</h2>
                <a href="index.php?page=kelas" class="btn btn-primary">See all <span
                        class="las la-arrow-right"></span></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>Class</td>
                                <td>Categori</td>
                                <td>Teacher</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "SELECT * FROM kelas INNER JOIN guru on kelas.id_guru = guru.id_guru JOIN kategori on kelas.id_kategori = kategori.id_kategori LIMIT 5");
                            foreach($query as $data){
                            ?>
                            <tr>
                                <td><?= $data['nama_kelas'] ?></td>
                                <td><?= $data['kategori'] ?></td>
                                <td><?= $data['nama_guru'] ?></td>
                                <td><?= $data['harga'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="orders">
        <div class="card">
            <div class="card-header">
                <h3>Orders</h3>
                <a href="index.php?page=order" class="btn btn-primary">See all <span class="las la-arrow-right"></span></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                             $query = mysqli_query($koneksi, "SELECT * FROM bayar  JOIN user on bayar.id_user = user.id_user LIMIT 5");
                            foreach($query as $data){
                            ?>
                            <tr>
                                <td><?= $data['nama_user'] ?></td>
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