<?php
    require 'fungsi.php';
    // variable super global $_POST 
    if(isset($_POST["submit"]))
        {   
            $nama= $_POST["nama"];
            $nim= $_POST["nim"];
            $prodi= $_POST["jurusan"];
            $email= $_POST["email"];
            $nohp= $_POST["nohp"];
            $foto= $_POST["foto"];

            $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto)
            VALUES ('$nama','$nim','$prodi','$email', '$nohp', '$foto')";

            mysqli_query($koneksi, $query);

            if (mysqli_affected_rows($koneksi) >0)
                {
                    echo"<script>

                        alert('Data berhasil di tambahakan');
                        window.location.href='mahasiswa.php';

                        </script>";

                }
                else
                    {
                        echo"<script>

                        alert('Data gagal di tambahakan');
                        window.location.href='mahasiswa.php';

                        </script>";

                    }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
     <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required/></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" required/></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" required/></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" /></td>

            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" name="nohp" id="nohp" /></td>
            </tr>
            <tr>
                <td><label for="foto">foto</label></td>
                <td>:</td>
                <td><input type="text" name="foto" id="foto" /></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <button type="submit" name="submit"  id="submit">Simpan</button>
                    <button type="reset" id="reset">reset</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>