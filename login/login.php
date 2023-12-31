<?php
    require_once ("../koneksi.php");
    
    session_start();

    $error = "";

    if (isset($_POST['submit'])){
        $email = $_POST['txt_email'];
        $pass = $_POST['txt_pass'];

        if(!empty(trim($email)) && !empty(trim($pass))){
            $query = "SELECT * FROM user WHERE user_email = '$email'";
            $result = mysqli_query($koneksi, $query);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                $idval = $row['id_user'];
                $valName = $row['user_fullname'];
                $userval = $row['user_email'];
                $passval =$row['user_password'];

                if ($userval == $email && $passval == $pass) {
                    $_SESSION['id_user'] = $idval;
                    
                    header('location: ../dashboard/profil.php');
                    exit;
                } else {
                    $error = "USER ATAU PASSWORD SALAH!!";
                }
            } else {
                $error = "USER TIDAK DITEMUKAN!!";
            }
        } else {
            $error = "DATA TIDAK BOLEH KOSONG!!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <img class="image1" src="../img/4.png">
            <div class="a">
                <h2>Selamat Datang</h2>
                <div class="form">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="txt_email">Email</label>
                            <div class="input">
                                <input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txt_pass">Password</label>
                            <div class="input">
                                <input type="password" class="form-control" id="txt_pass" name="txt_pass" maxlength="6" placeholder="Enter Password" onmouseover="showPassword(this)" onmouseout="hidePassword(this)">
                            </div>
                        </div>

                        <!-- <label><input class="checkbox" type="checkbox" id="condition" name="condition" value="1"> I agree to terms & condtions<br></label> -->
                        <button class="btn1" type="submit" name="submit" id="loginBtn">Masuk</button>
                        <p style="text-align:right; margin-top:5px;">tidak punya akun?? <a href="../register/register.php">register dulu</a></p>
                        <p class="or">------------------- or --------------------</p>
                        <button class="btn2">
                                <img class="image2" src="../img/flat-color-icons_google.png">
                                <h2>Login with Google</h2>
                        </button>
                        <div class="errorHandle"><?php echo $error; ?></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    
    function showPassword(input) {
        
        input.type = 'text'; // Ubah tipe input ke "text" saat kursor berada di dalam input
    }

    function hidePassword(input) {
        input.type = 'password'; // Kembalikan tipe input ke "password" saat kursor keluar dari input
    }

    // document.getElementById('condition').addEventListener('change', function () {
    //     var loginButton = document.getElementById('loginBtn');
    //     loginButton.disabled = !this.checked;
    // });

</script>
</html>