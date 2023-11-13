<?php
require_once("../koneksi.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="register-style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <img class="image1" src="../img/4.png">
            <div class="a">
                <h2>Hello</h2>
                <div class="form">
                    <form action="#" method="post" id="information_form">
                        <div class="form-group">
                            <label for="name">Your Fullname*</label>
                            <div class="input">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <div class="input">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Create Password*</label>
                            <div class="input">
                                <input type="password" class="form-control" id="pass" name="pass" maxlength="6" placeholder="Enter Password" onmouseover="showPassword(this)" onmouseout="hidePassword(this)">
                            </div>
                        </div>

                        <!-- <label><input class="checkbox" type="checkbox" id="condition" name="condition" value="1"> I agree to terms & condtions<br></label> -->

                        <button class="btn1" type="submit" id="loginBtn">Login</button>
                    </form>
                    <p class="or">------------------- or --------------------</p>
                    <button class="btn2">
                            <img class="image2" src="../img/flat-color-icons_google.png">
                            <h2>Login with Google</h2>
                            <!-- <a href="login.php"></a> -->
                    </button>
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