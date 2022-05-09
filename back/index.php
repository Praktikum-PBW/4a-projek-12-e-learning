<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Learn</title>
    <link rel="icon" href="../aset/img/logo.png" type="image/png">
    <!-- Boostrap -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../aset/css/style.css">
</head>

<body>
    <?php
    session_start();
    ?>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="../aset/img/logo.png" width="35" height="35"> Let's Learn</h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php" class="active"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="index.php?page=kategori"><span class="las la-clipboard-list"></span>
                        <span>Category</span></a>
                </li>
                <li>
                    <a href="index.php?page=kelas"><span class="las la-book"></span>
                        <span>Class</span></a>
                </li>
                <li>
                    <a href="index.php?page=guru"><span class="las la-user-tie"></span>
                        <span>Teacher</span></a>
                </li>
                <li>
                    <a href="index.php?page=blog"><span class="las la-edit"></span>
                        <span>Blog</span></a>
                </li>
                <li>
                    <a href="index.php?page=akun"><span class="las la-users"></span>
                        <span>Account</span></a>
                </li>
                <li>
                    <a href="index.php?page=order"><span class="las la-shopping-bag"></span>
                        <span>Order</span></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- main content -->
    <div class="main-content">
        <header>
            <div class="user-wrapper">
                <div>
                    <h4><?=$_SESSION['nama_user']?></h4>
                    <small><?=$_SESSION['level']?></small>
                </div>
            </div>
            <li>
                <a href="../front/index.php?page=logout" class="btn btn-outline-primary align-item-middle">Logout</a>
            </li>
        </header>
        <main>
            <?php
            include "menu.php";
            ?>
        </main>
    </div>
</body>

</html>