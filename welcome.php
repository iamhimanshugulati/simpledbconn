<?php

// 1. Fisrt start Session
session_start();

// 2. Remove unauthorized Access/if Condition doesnot Satisfy 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
    header("location: signin.html");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi, <?php echo $_SESSION['email_id']?>!!</title>
    <link rel="stylesheet" href="welcomestyle.css">
</head>

<body>
    <div class="navigation">

        <a class="button" href="signout.php">
            <img
                src="https://lh3.googleusercontent.com/-bPv31J9fApM/WMQwAyAVXbI/AAAAAAAAAmI/d9XC3r8AquQr5UVvLr-bKSkRGpwo0SGkgCEwYBhgLKs8DAL1OcqyitfRIekLb5tqenMk7iU-uykogA0zUaMOx-N-Z74JWpX-vKvXhYXSr8V9OdMeEomNhLaJbeyUQdC3V3VNMWlHSc6sFP58PkIYZ3w_Z5RhmZTaUIiU0KiQpSqRNc_o_repB5DusRqOws5HgNs84LM8szOqgEQiaT81yO6n4bihJSbeBZBUefndwDlj4zAZjv0gzLY6gQKLDzpR3Jkr16DzC8EIW-bBXMjiTL651GqPG3TYGWP87n8d3GOh556-pIlbasfmPuf3Z0WtX7Xy6oRVUp1OWgWYbB_ALHUZ5OHNw5LLuuCFm35nm2CXNpbbmdh1S51sz5i2XjqcXiMt6mcgXuCEtbHLGtQtRBlGqJoAG23g1b7tZYPOPNPfdVuF6GyW2Q27QDNIqD9MJC6RPZ18EUJGPr1qWl218QOPlKV62JE15qyouInFBbJXw_-7qmJgRSJY3Zjk8d0lJnt0cQco51YRmMNF9vy_Txmt2pbSxD5z-IPHWbmzmrW7torpftoek2dBShKyp-BAtD0da3Hcwof4pAODnBBA_Xc4SoraV4AGAzpoM1Zutlie1XuTJo5SmPRSzQzmTiGCUwsb1_Z9xsTj-nd11Ql4rDDCG8qz4BQ/w140-h140-p/16298549_10206553384792825_5064280919443924832_n.jpg">

            <div class="logout">Sign Out</div>

        </a>

    </div>

// 3. Displaying User Full Name    
<span> Welcome back <?php echo $_SESSION['email_id']; ?>!!</span>

</body>

</html>