<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0" />
    <title>BGIMI ESPORTS - OFFICIAL TOURNAMENT</title>
    <link rel="stylesheet" href="css/verif.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrap">
        <div class="headers">
            <div class="logo">
                <img src="https://battle-ground.s3.ap-south-1.amazonaws.com/battleground-logo.svg">
            </div>
            <div class="utils">
                <div class="socialmedia">
                    <ul>
                        <li onclick="window.location='https://youtube.com/c/BattlegroundsMobile_IN'"><i
                                class="fa fa-youtube-play" aria-hidden="true"></i></li>
                        <li onclick="window.location='https://instagram.com/battlegroundsmobilein_official?igshid=YmMyMTA2M2Y='"><i
                                class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li onclick="window.location='https://www.facebook.com/BattlegroundsMobileIN/'"><i
                                class="fa fa-facebook-square" aria-hidden="true"></i></li>
                    </ul>
                </div>
                <div class="menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>

        <div class="banner">
            <img class="logo" src="https://i.ibb.co/7Y7r6Kb/logo-png.png">
            <h1>REGISTRATION</h1>
            <span class="ba-text">FINDING OUT NEW CHAMP</span>
        </div>

        <div class="success">
            <p>Hi, <?= $_GET['nick']; ?> <br>Your information is being processed<br>Please wait up to 24 hours! once we verify your Infomation, we will contact you on your give contact number and in game mail</p>
        </div>

        <div class="logout" onclick="window.location='https://www.battlegroundsmobileindia.com/'">
            Logout
        </div>

        <div class="footer">
            <ul>
                <li>
                    <img class="p-logo"
                        src="https://battle-ground.s3.ap-south-1.amazonaws.com/battleground_footer_logo.svg">
                </li>
                <li>
                    <img class="k-logo" src="https://battle-ground.s3.ap-south-1.amazonaws.com/krafton-1.svg">
                </li>
            </ul>
            <p class="f-desc"> &copy; 2021 KRAFTON, Inc. All rights reserved.</p>
            <div class="tos">
                <span class="ptos">Privacy Policy</span>
                <span class="split">|</span>
                <span class="ptos">Terms of Service</span>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</body>

</html>