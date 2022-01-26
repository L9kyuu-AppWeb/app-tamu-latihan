<?php 
if ($_GET['halaman']=="home") {
    if ($_GET['sub']=="informasi") {
        include 'halaman/home/info.php';
    }
}
else
if ($_GET['halaman']=="tahun") {
    if ($_GET['sub']=="tabel") {
        include 'halaman/tahun/tabel.php';
    }else
    if ($_GET['sub']=="tambah") {
        include 'halaman/tahun/tambah.php';
    }else
    if ($_GET['sub']=="ubah") {
        include 'halaman/tahun/ubah.php';
    }
}else{
    header("location: http://localhost/app_tamu/index.php?halaman=home&sub=informasi");
}

?>