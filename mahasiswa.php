<?php


    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa);
    
    

   

   

   

?>



<!DOCTYPE php
>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <h1>WEB INFORMATIKA</h1>
    <hr>
    <table border = "1" cellspacing = "0" cellpadding = "10px">
        <tr>
            <td><a href = "index.php
            ">home</a></td>
            <td><a href = "profile.php
            ">profile</a></td>
            <td><a href = "contact.php
            ">contact</a></td>
            <td><a href = "mahasiswa.php
            ">mahasiswa</a></td>

    </table>
    <h2>Data mahasiswa</h2>
    <a href="inputdata.php
    ">
        <button>Tambah Data</button>
    </a>
    <table border = "1" cellpadding = "5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>jurusan</th> 
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
           
        </tr>
        <tr>
        </tr>
        <?php
        $i = 1;
           foreach($mahasiswas as $mhs)

            {
        ?>
        <tr>
            <td align="center"><?= $i ?></td>
            <td><?php echo $mhs["nama"] ?></td>
            <td align= "center"><?php echo $mhs["nim"] ?></td>
            <td align= "center"><?php echo $mhs["jurusan"] ?></td>
            <td align= "center"><?php echo $mhs["email"] ?></td>
            <td align= "center"><?php echo $mhs["no_hp"] ?></td>
            <td align= "center"><img src ="assets/images/<?php echo $mhs ["foto"] ?> width="70px></td>
            <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>
            
        </tr>
        <?php
        $i++;

        }
        ?>
    
</body>
</php
>