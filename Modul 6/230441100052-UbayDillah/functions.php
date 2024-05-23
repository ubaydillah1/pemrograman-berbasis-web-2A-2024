<?php 
    $conn = mysqli_connect("localhost", "root", "", "mahasiswa");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    };

    function tambah($data) {
        global $conn;
        $nama = $data["nama"];
        $nim = $data["nim"];
        $umur = $data["umur"];
        $jenis_kelamin = $data["jenis_kelamin"];
        $prodi = $data["prodi"];
        $fakultas = $data["fakultas"];
        $asal_kota = $data["asal_kota"];

        $query = "INSERT INTO data_mahasiswa 
                    VALUES
                    ('', '$nama', '$nim', '$umur', '$jenis_kelamin', '$prodi', '$fakultas', '$asal_kota')
                ";

        mysqli_query($conn, $query);

        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Data Berhasil Ditambahkan')</script>";
        };
    }

    function hapus($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM data_mahasiswa where id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $nama = $data["nama"];
        $nim = $data["nim"];
        $umur = $data["umur"];
        $jenis_kelamin = $data["jenis_kelamin"];
        $prodi = $data["prodi"];
        $fakultas = $data["fakultas"];
        $asal_kota = $data["asal_kota"];   

        $query = "UPDATE data_mahasiswa SET 
                    nama = '$nama',
                    nim = '$nim',
                    umur = '$umur',
                    jenis_kelamin = '$jenis_kelamin',
                    prodi = '$prodi',
                    fakultas = '$fakultas',
                    asal_kota = '$asal_kota'
                 WHERE id = $id";

        mysqli_query($conn, $query);

        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('Data Berhasil Diubah')</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }; 
    }
?>

