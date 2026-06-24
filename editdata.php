<?php
    require 'fungsi.php';

    $id = $_GET["id"];


    $query = "SELECT * FROM mahasiswa WHERE id=$id";
    
    $mhs = tampildata($query)[0]; ///wadah terbuka

    



    // variable super global $_POST 
    if(isset($_POST["submit"]))
        {   
           

            if (editdata($_POST, $id) >0)
                {
                    echo"<script>

                        alert('Data berhasil di diedit');
                        window.location.href='mahasiswa.php';

                        </script>";

                }
                else
                    {
                        echo"<script>

                        alert('Data gagal di diedit');
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
    <title>Edit data</title>
     <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" required/></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" value="<?= $mhs["nim"]?>"required/></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]?>"required/></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" value="<?= $mhs["email"]?>" /></td>

            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" name="nohp" id="nohp" value="<?= $mhs["no_hp"]?>" /></td>
            </tr>
            <tr>
                <td><label for="foto">foto</label></td>
                <td>:</td>
                <td><input type="text" name="foto" id="foto"value="<?= $mhs["foto"]?>" /></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <button type="submit" name="submit"  id="submit">Edit Data</button>
                    <button type="reset" id="reset">reset</button>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>