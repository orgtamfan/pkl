<?php
    require "koneksi.php";
    session_start();

    if (isset($_POST["nisn"]) && isset($_POST["nis"])) {
        $nisn = $_POST["nisn"];
        $nis = $_POST["nis"];

        $query = "SELECT * FROM murid WHERE nisn = '$nisn' AND nis = '$nis'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['nisn'] = $row['nisn'];
            $_SESSION['nis'] = $row['nis'];
            header('Location: index/home2/index.php');
            exit();
        } else {
            echo"<script>alert('Akun tidak ditemukan');
            window.history.back();</script>";
        }
    } else {
        echo "Data tidak lengkap"; 
    }
?>