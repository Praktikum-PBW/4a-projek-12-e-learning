<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        include '../aset/lib/koneksi.php';
        switch($page){
            case 'home':
                include 'home.php';
                break;
            case 'kelas':
                include 'kelas.php';
                break;
            case 'kelas_konten':
                include 'kelas_konten.php';
                break;
            case 'blog':
                include 'blog.php';
                break;
            case 'blog_konten':
                include 'blog_konten.php';
                break;
            case 'about':
                include 'about.html';
                break; 
            case 'login':
                include 'login.php';
                break;    
            case 'logout':
                include 'logout.php';
                break;
            case 'register':
                include 'register.php';
                break;
            case 'cart':
                include 'cart/cart.php';
                break;    
            case 'checkout':
                include 'cart/checkout.php';
                break;    
            default:
                echo "Maaf halaman tidak ditemukan";
                break;                   
        }
    }else{
        include 'home.php';
    }