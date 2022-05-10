<!-- header -->
<section class="sub_content" id="header">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 text-md-start text-start py-6">
            <h1 class="mb-4 fs-9 fw-bold">You don't need to be insecure, everyone can be a professional.</h1>
            <p class="mb-6 lead text-secondary">Start by always learning new things and consistently practicing to
                prepare
                the skills needed in the creative world today. Immediately choose the class that suits your interests
                and
                start upgrading your skills.</p>
            <div class="text-start text-md-start"><a class="btn btn-primary" href="index.php?page=kelas" role="button"
                    id="btn-course">See Class</a></div>
        </div>
        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/gambar1.png" alt="" /></div>
    </div>
</div>
</section>

<!-- kategori -->
<section class="sub-content">
    <div class="container py-5">
        <h1 class="fs-9 fw-bold mb-4 text-center">Class's Category</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            include '../aset/lib/koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM kategori");
            foreach($query as $data){
            ?>
            <div class="col">
                <div class="image">
                    <img src="../aset/img/kategori/<?=$data['thumbnail']?>" class="card-img" alt="">
                    <div class="overlay">
                        <p class="h5 mr-2"><?= $data['kategori']?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!-- End kategori -->

<!-- welcome -->
<section class="sub-content bg-light">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/teamwork.png" />
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4 fs-9 fw-bold">Welcome in Let's Learn,</h1>
                    <p class="mb-6 lead text-secondary">Let's Learn is an online learning platform specialized in
                        creative fields.Here you can access materials anywhere and anytime.<br
                            class="d-none d-xl-block" /><br class="d-none d-xl-block" />Come on, don't let laziness
                        bother you, today's world is changing quickly. Learn the skills that suit your interests, and
                        become an expert in their field.</p>
                    <div class="cards">
                        <div class="card-single">
                            <div>
                                <h1>18</h1>
                                <span>Classes</span>
                            </div>
                            <div>
                                <span class="las la-book"></span>
                            </div>
                        </div>
                        <div class="card-single">
                            <div>
                                <h1>20</h1>
                                <span>Mentor</span>
                            </div>
                            <div>
                                <span class="las la-user-tie"></span>
                            </div>
                        </div>
                        <div class="card-single">
                            <div>
                                <h1>258</h1>
                                <span>Alumnus</span>
                            </div>
                            <div>
                                <span class="las la-users"></span>
                            </div>
                        </div>
                    </div>
                    <br class="d-none d-xl-block" />
                    <a class="btn btn-primary" href="index.php?page=kelas">See Class</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End welcome -->

<!-- Promo -->
<section class="sub-content">
    <div class="container py-5">
        <h1 class="fs-9 fw-bold mb-4 text-center">Today's Discount</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="promo">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">March Yey!</h5>
                        <p class="card-text">Get a discount of IDR 59,000 <br class="d-none d-xl-block" /> You can proof
                            it with the coupon code
                            <strong>MarchYey!</strong> </p>
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">For Student</h5>
                        <p class="card-text">Get a discount of Rp. 109,000 <br class="d-none d-xl-block" /> You can send
                            your student card to proof your identity.</p>
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">For Member</h5>
                        <p class="card-text">Get a discount of Rp. 119,000 <br class="d-none d-xl-block" />especially
                            for those who have registered for
                            classes/alumni.</p>
                        <a href="#" class="btn btn-primary">WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End promo -->

<!-- Class -->
<section class="sub-content bg-light">
    <div class="container py-5">
        <h1 class="fs-9 fw-bold mb-4 text-center">Classes</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            include '../aset/lib/koneksi.php';
            $query = mysqli_query($koneksi, "SELECT * FROM kelas JOIN guru ON kelas.id_guru = guru.id_guru LIMIT 3");
            foreach($query as $data){
            ?>
            <div class="col">
                <div class="image">
                    <img src="../aset/img/kelas/<?=$data['thumbnail']?>" class="card-img" alt="">
                    <div class="overlay">
                        <p class="h5 mr-2"><?=$data['nama_kelas']?></p>
                        <p class="h6 pb-2">by <?=$data['nama_guru']?></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            <a class="btn btn-primary d-grid gap-2 col-6 mx-auto" href="index.php?page=kelas">See Class</a>
        </div>
    </div>
</section>
<!-- End Class -->
