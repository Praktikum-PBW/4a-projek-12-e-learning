<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM kelas JOIN guru ON guru.id_guru = kelas.id_guru where id_kelas = '$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-md-start text-start py-6">
            <h6 class="mb-4 fs-9 text-secondary">Online Class:</h6>
            <h1 class="mb-6 fw-bold"><?=$data['nama_kelas']?></h1>
            <h6 class="mb-4 fs-9 fw-light text-secondary"><?=$data['deskripsi']?></h6>
            
        </div>
        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="../aset/img/kelas_img.png" alt="" />
        </div>
    </div>
</div>
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid"
                    src="../aset/img/kelas/<?=$data['thumbnail']?>" />
            </div>
            <div class="col-lg-6">
                <h1 class="mb-4 fs-9 fw-bold">What Class Is This?</h1>
                <p class="mb-6 lead text-secondary"><?php echo nl2br(htmlspecialchars($data['tentang']));?></p>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <h1 class="fs-9 fw-bold mb-4 text-center">Today's Discount</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="promo">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">March Yey!</h5>
                    <p class="card-text">Get a discount of IDR 59,000 <br class="d-none d-xl-block" /> You can proof it
                        with the coupon code
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
                    <p class="card-text">Get a discount of Rp. 119,000 <br class="d-none d-xl-block" />especially for
                        those who have registered for
                        classes/alumni.</p>
                    <a href="#" class="btn btn-primary">WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xxl py-5 bg-light">
    <div class="container">
                <h1 class="mb-4 fs-9 fw-bold text-center">Who is the teacher?</h1>
                <img class="pt-7 pt-md-0 mx-auto d-block" src="../aset/img/guru/<?=$data['pasphoto']?>" height="150" alt="" />
                <p class="mb-6 lead fw-bold text-center"><?=$data['nama_guru']?></p>
                <p class="mb-6 lead text-secondary text-center"><?php echo nl2br(htmlspecialchars($data['bio_guru']));?></p>
    </div>
</div>
<div class="container py-5">
    <h1 class="fs-9 fw-bold mb-4 text-center">Price</h1>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h1 class="card-title text-center fw-bold">Rp.<?=$data['harga']?></h1>
                    <h5 class="mb-4 text-center fw-light text-secondary">For each class</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>Full Access</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>Full HD Videos</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>Telegram groups</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>Free Material Updates</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>±5 Hours of Class Video</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>Free Ebook/PDF</h5>
                    <h5 class="text-center"><i class="las la-check-circle mr-1"></i>E-Certificate</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}}
?>