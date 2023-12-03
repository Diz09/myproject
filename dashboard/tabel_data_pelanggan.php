<?php

    require_once("../koneksi.php");

    session_start();

    if (!isset($_SESSION['id_user'])){
        header('Location: ../login/login.php');
        exit;
    }


    $query = "SELECT * FROM user WHERE id_level = 2" ;
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $number = 1; //inisiasi variabel nomor

        while($row = mysqli_fetch_assoc($result)) {
            $name = $row['user_fullname'];
            $email = $row['user_email'];
            $telp = $row['telp'];
            $alamat = $row['alamat'];
            $picture = $row['pict'];

            echo "<tr>
                    <td>$number</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$telp</td>
                    <td>$alamat</td>
                    <td>
                        <img src='../img/" . (isset($picture) && $picture !== "" ? $picture : '4.png') . "' alt='User Picture'>
                    </td>
                    <td>
                        <button>hapus</button>
                        <button>edit</button>
                    </td>
                </tr>";
            $number ++; //incremen untuk banyaknya baris
        }

        mysqli_free_result($result);
    } else {
        echo "<tr><td colspan='4'>Error: " . mysqli_error($koneksi) . "</td></tr>";
    }

    mysqli_close($koneksi);

?>