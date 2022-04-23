<?php
    /**
     * menghappus data mhs berdasarkan NIM
     */
    include_once("dbkoneksi2.php");

    if(isset($_GET["n"])){
        $sql = "DELETE FROM mhs WHERE NIM= '".$_GET["n"]."'";
        $hsl = mysqli_query($cnn,$sql);
    }
    mysqli_close($cnn);
    header("location: tampildatamhs.php");