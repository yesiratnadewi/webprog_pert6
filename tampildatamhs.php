<?php
/**
 * 1. buat koneksi ke DBMS mysql dan buka data mahasiswa
 * 2. buat query untuk menampilkan seluruh data dari 
 * 3. execute query
 * 4. tampilkan data
 * 5. tutup koneksi
 */
include_once("dbkoneksi2.php");

$sql = "SELECT NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE FROM mhs;";

$hsl = mysqli_query($cnn, $sql);

echo "<table>"
        <theader>
            <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>Jurusan</th>
            <th>jenis kelamin</th>
            <th>tgllahir</th>
            <th>passcode</th>
            <th>TambahData</th>
            </tr>
        </theader>
        <tbody>
        $no = 1;
        while($h = mysqli_fetch_Array($hsl)){
            if($h["jk"]=="L"){
                $jk = "Laki-Laki";

            }else{
                $jk = "Perempuan";
            }
            echo "  <tr>
                <td>"$no."</td>    
                <td>"$h["NIM"]."</td>   
                <td>"$h["NAMA"]."</td>   
                <td>"$h["JURUSAN"]."</td>   
                <td>"$h["JK"]."</td>   
                <td>"$h["TGLLAHIR"]."</td>   
                <td>"$h["PASSCODE"]."</td>   
                <td><a href='editdatamhs.php?n="$h["NIM"]." |<a herf=hpsdatamhs.php?n="$h["NIM"]." Delete</td>  
            </tr> ";  
            $no++;
        }
    echo "   </tbody>
    </table>";