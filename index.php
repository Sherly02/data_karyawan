<?php include 'connection.php'?>
<html>
    <head>
        <link rel="stylesheet" href="assets/main.css">
    </head>
    <body>
    <center>
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
                case 'add-karyawan':
                    include "page/add_karyawan.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                    break;
            }
        }else{
            include "page/data.php";
        }
        ?>
    </center>
    </body>
</html>