<div class="container py-5" >
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            include '../aset/lib/koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM blog");
            foreach($query as $data){
        ?>
        <div class="col">
            <div class="card h-100">
                <img src="../aset/img/blog/<?=$data['thumbnail']?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['judul']?></h5>
                    <a href="index.php?page=blog_konten&id=<?=$data['id_blog']?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
