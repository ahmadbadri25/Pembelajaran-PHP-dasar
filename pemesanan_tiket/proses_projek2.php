<?php
echo "<center>";
echo "<font size=8>";
echo "<b>Program Penjualan Tiket<br>Kereta Api";
echo "<hr>";
echo "<table>";
$nama=$_POST['nama'];
$ktp=$_POST['ktp'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$tempatlahir=$_POST['tempatlahir'];
$tl=$_POST['tl'];
$email=$_POST['email'];
$kotatujuan=$_POST['kotatujuan'];
$kelas=$_POST['kelas'];
$jumlah=$_POST['jumlah'];
if($kotatujuan=="Jakarta-Bandung"&&$kelas=="Ekonomi"){
    $harga=60000;
}else
if($kotatujuan=="Jakarta-Jogja"&&$kelas=="Ekonomi"){
    $harga=120000;
}else
if($kotatujuan=="Jakarta-Bali"&&$kelas=="Ekonomi"){
    $harga=500000;
}else
if($kotatujuan=="Jakarta-Bandung"&&$kelas=="Executive"){
    $harga=150000;
}else
if($kotatujuan=="Jakarta-Jogja"&&$kelas=="Executive"){
    $harga=300000;
}else
if($kotatujuan=="Jakarta-Bali"&&$kelas=="Executive"){
    $harga=800000;
}else
$hargatiket=$harga;
$totalharga=$jumlah*$harga;
echo "<table rules = none  border = 10 cellpadding= 10px >";
echo "<tr><td>Nama<td>:$nama";
echo "<tr><td>KTP<td>:$ktp";
echo "<tr><td>TELP<td>:$telp";
echo "<tr><td>Alamat<td>:$alamat";
echo "<tr><td>Tempat Lahir<td>:$tempatlahir";
echo "<tr><td>Tanggal Lahir<td>:$tl";
echo "<tr><td>Email<td>:$email";
echo "<tr><td>Kota Tujuan<td>:$kotatujuan";
echo "<tr><td>Kelas<td>:$kelas";
echo "<tr><td>Jumlah Tiket<td>:$jumlah";
echo "<tr><td colspan=3><hr>";
echo "<tr><td>Harga Tiket<td>:";
echo "Rp.".number_format($harga,2,',',',');
echo "<tr><td>Total Harga<td>:";
echo "Rp.".number_format($totalharga,2,',',',');
?>