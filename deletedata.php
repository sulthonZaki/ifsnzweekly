<?php

    require 'fungsi.php';
    $id = $_GET["id"];
   
    
    if(deletedata($id) > 0)
        {
            echo"<script>

                        alert('Data Berhasil di hapus');
                        window.location.href='mahasiswa.php';

                        </script>";

        }else
                    {
                        echo"<script>

                        alert('Data gagal di tambahakan');
                        window.location.href='mahasiswa.php';

                        </script>";

                    }


?>