<?php
/**
 * Update data
 * 1. buka koneksi dan buka database mhs
 * 2. buat query update data
 * 3.execute
 * 4. tutup koneksi
 * 5. kembalimke list data mhs
 */
    include_once("dbkoneksi2.php");

    if(isset($_POST["txNIM"])){
        $nim = $_POST["txNIM"];
        $nama = $_POST["txNAMA"];
        $talag = $_POST["txTALAG"];
        $jk = $_POST["txJK"];
        $jur = $_POST["txJUR"];
        $pass = $_POST["txPASSS"];

    $sql ="UPDATE mhs SET
     NIM='$nim',
     MANA='$nama',
     TGL LAHIR= '$talag',
     JK= '$jk',
     JURUSAN= '$jur',
     PASSCODE= '$passs'
     WHERE NIM= '$nim';";


    $hsl = mysqli_query($cnn, $sql);
    mysqli_close($cnn); 
}
header("location: tampildatamhs.php");