<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Learn</title>
    <link rel="icon" href="../aset/img/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }
    </style>
</head>

<body>
    <?php
        if (isset($_SESSION['error'])) {
    ?>
    <div class="alert alert-danger">
        <?= $_SESSION['error'] ?>
    </div>
    <?php
        }
    ?>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://www.getillustrations.com/packs/plastic-illustrations-scene-builder-pack/scenes/_1x/accounts%20_%20man,%20workspace,%20desk,%20laptop,%20login,%20user_md.png"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-3 me-3">Sign in</p>
                    </div>

                    <form method="post" action="login-proses.php">
                        <div class="form-outline mb-4">
                            <input type="username" id="username" name="username" required
                                class="form-control form-control-lg" placeholder="Masukkan Username" />
                            <label class="form-label" for="username">Username</label>
                        </div>


                        <div class="form-outline mb-3">
                            <input type="password" id="password" name="password" required
                                class="form-control form-control-lg" placeholder="Masukkan Password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" name="login" value="Login" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                    href="menu.php?page=register" class="link-danger">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
</body>
</html>