<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        include '../aset/lib/koneksi.php';
        switch($page){
            case 'dashboard':
                include 'dashboard.php';
                break;

                // kategori
            case 'kategori':
                include 'kategori/index.php';
                break;
            case 'kategori_create':
                include 'kategori/create.php';
                break;
            case 'kategori_proses':
                include 'kategori/create_proses.php';
                break;
            case 'kategori_edit':
                include 'kategori/edit.php';
                break;
            case 'kategori_update':
                include 'kategori/update.php';
                break;
            case 'kategori_delete':
                include 'kategori/delete.php';
                break;

                // blog
            case 'blog':
                include 'blog/index.php';
                break;
            case 'blog_create':
                include 'blog/create.php';
                break;
            case 'blog_proses':
                include 'blog/create_proses.php';
                break;
            case 'blog_edit':
                include 'blog/edit.php';
                break;
            case 'blog_update':
                include 'blog/update.php';
                break;
            case 'blog_delete':
                include 'blog/delete.php';
                break;

                // akun
            case 'akun':
                include 'users/index.php';
                break;
            case 'user_create':
                include 'users/create.php';
                break;
            case 'user_proses':
                include 'users/create_proses.php';
                break;
            case 'user_edit':
                include 'users/edit.php';
                break;
            case 'user_update':
                include 'users/update.php';
                break;
            case 'user_delete':
                include 'users/delete.php';
                break;

                // kelas
            case 'kelas':
                include 'kelas/index.php';
                break;
            case 'kelas_create':
                include 'kelas/create.php';
                break;
            case 'kelas_proses':
                include 'kelas/create_proses.php';
                break;
            case 'kelas_edit':
                include 'kelas/edit.php';
                break;
            case 'kelas_update':
                include 'kelas/update.php';
                break;
            case 'kelas_delete':
                include 'kelas/delete.php';
                break;  
                
                //guru
            case 'guru':
                include 'guru/index.php';
                break;
            case 'guru_create':
                include 'guru/create.php';
                break;
            case 'guru_proses':
                include 'guru/create_proses.php';
                break;
            case 'guru_edit':
                include 'guru/edit.php';
                break;
            case 'guru_update':
                include 'guru/update.php';
                break;
            case 'guru_delete':
                include 'guru/delete.php';
                break;  

            // order
            case 'order':
                include 'order/index.php';
                break;   

            default:
                echo "Maaf halaman tidak ditemukan";
                break;
        }
    }else{
        include '../aset/lib/koneksi.php';
        include 'dashboard.php';
    }

