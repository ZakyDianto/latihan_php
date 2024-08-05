<?php //Pembuka PHP
  
  //Variabel
   $nama ="Zaky Maftuh Ahmadi Widianto";
   $kelas = "XI RPL 4";
   $umur = 16;

   echo "Nama saya ",$nama,", saya dari kelas ",$kelas,", umur saya ",$umur," tahun.";
   echo "<br>";

   //Function
   function tampil(){
    echo "Saya berasal dari Kabupaten Klaten.";
   }
   tampil();
   echo "<br>";

   //Operator
   $x =15;
   $y= 10;

   $tambah = $x+$y;
   $kurang = $x-$y;
   $kali = $x*$y;
   $bagi = $x/$y;

   echo "Hasil tambah: ",$tambah,"<br>";
   echo "Hasil kurang: ",$kurang,"<br>";
   echo "Hasil kali: ",$kali,"<br>";
   echo "Hasil bagi: ",$bagi;
   echo "<br>";

   //Kondisi
   $harga =120000;

   echo "Saya ingin membeli baju dengan budget ",$harga,"<br>";
   
   if ($harga<100000) {
    echo "Harganya dibawah budget saya, maka saya beli baju itu";
   }

   elseif ($harga<=120000) {
    echo "Harga nya mirip dengan budget saya, maka saya tawar baju itu";
   }

   else {
    echo "Harganya melebihi budget saya, maka saya tidak akan beli baju itu";
   }
?>

<!-- variabel
function
operator
kondisi

repo: latihan PHP
    1. halaman web yg menampung materi diatas -->