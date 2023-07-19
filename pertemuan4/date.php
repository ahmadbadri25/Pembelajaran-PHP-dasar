<?php 
    // date
    // menampilkan format date terntentu
    // echo date("l, d-M-Y");

    // time
    // UNIX timestamp
    // detik yang sudah berlalu sejak 1 january 1970
    // echo time();
    // echo date("l, d M Y", time()+60*60*24*100);

    // mktime
    //  membuat sendiri detik
    // mktime urutannya (0,0,0,0,0,0)
    // jam,menit,detik,bulan,tanggal,tahuun
    // echo date("l", mktime(0,0,0,3,25,2001));

    // strtotime
    // echo date("l", strtotime("25 maret 2001"));

    // -----------------------------
    // string yang akan sering digunakan
    // strlen() adalah untuk menghitung panjang sebuah string
    // strcmp() untuk membandingkan 2 buah string
    // explode() untuk memcah sebuah string ke array
    // htmlsepcialchars() function khusus untuk menjaga kita dari orang iseng yang masuk dengan kita

    // utilty atau fungsibantuan
    // var_dumb() untuk mencetak sebuah isi dari variable, array, objek
    // isset() mengecek variable yang sudah terpakai atau belum, menghasilkan hasil boolean (tru atau false)
    // empty() mengecek varible ada isinya atau tidak
    // die() untuk membehentikan program kita
    // sleep() untuk memberhentikan sementara


?>