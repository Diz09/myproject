<!DOCTYPE html>
<html lang="en">
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="style_index.css">
    <style>
        .box_profil{
            position: relative;
            width: auto;
            height: auto;
            margin-top: 3vh;
            margin-left: 5vh;
            margin-right: 5vh;
            padding-right: 3vh;

            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */

            background: #D8B894;

            border-radius: 5vh;
        }
    </style>
</head>
<body>
    <div class="main">
        
        <div class="navbar2">
            <div class="menu">
                <h2 class="wel">Daftar Pelanggan</h2>
                <div class="box_profil">
                    <div class="tab1">
                        <table>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No. Telepon</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include 'tabel_data_pelanggan.php'; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar1">
            <div class="icon">
                <h1 class="logo">V I O S C A K E</h1>
            </div>
            <div class="sidebar">
                <ul>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="katalog.php">Katalog</a></li>
                    <li><a href="pesanan.php">Pesanan</a></li>
                    <li style="background: #EBEDF1;"><a style="color: #6B5048;" href="pelanggan.php">Pelanggan</a></li>
                    <li><a href="../login/login.php">Logout</a></li>
                </ul>
            </div>
        </div>

    </div>
</body>
</html>