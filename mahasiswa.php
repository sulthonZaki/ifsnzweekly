<?php

    $koneksi = mysqli_connect("localhost", "root", "root", "ifsnzweekly");

    // if ($koneksi)

    //     {
    //         echo "berhasil koneksi";
    //     }

    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query);

    // while ($mhs = mysqli_fetch_assoc($result))

    // {
    //     var_dump ($mhs);
    // }


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
            while($mhs = mysqli_fetch_assoc($result))
            {
        ?>
        <tr>
            <td align="center">1</td>
            <td><?php echo $mhs["nama"] ?></td>
            <td align= "center"><?php echo $mhs["nim"] ?></td>
            <td align= "center"><?php echo $mhs["jurusan"] ?></td>
            <td align= "center"><?php echo $mhs["email"] ?></td>
            <td align= "center"><?php echo $mhs["no_hp"] ?></td>
            <td align= "center"><img src ="assets/images/<?php echo $mhs ["foto"] ?> width="70px /></td>
            <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>
            
        </tr>
        <?php
        $i++;

        }
        ?>
    </table>
    <br>
    <hr>
    <table border = "1" cellspacing = "0" cellpadding = "5px">
        <tr>
            <td>11</td>
            <td>12</td>
            <td>13</td>
            <td>14</td>
        </tr>
        <tr>
            <td>21</td>
            <td colspan="2" rowspan="2" align="cente">?</td>
            
            <td>24</td>
        </tr>
        <tr>
            <td>31</td>
            
            <td>34</td>
        </tr>
        <tr>
            <td>41</td>
            <td>42</td>
            <td>43</td>
            <td>44</td>

    </table>
</body>
</php
>