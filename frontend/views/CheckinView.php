
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cover Template for Bootstrap</title>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/design.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">


</head>
<body class="text-center">
<div class="">
    <header class="header">
    <div class="header__col6 header__col6_logo">
        <a href="/" class=""><img src="images/eveien.png" alt="Skype" class="header__img"></a>
    </div>
    <div class="header__col6 header__col6__background">
        <nav class="nav">
    <ul class="hoverLine__nav">
        <li><a class="active" href="#opportunities">Opportunities</a></li>
        <li><a href="#advantages">Advantages</a></li>
        <li><a href="#price">Price</a></li>
        <li><a href="#english">English</a></li>
        <li><a href="/eveien/signin">Sign in</a></li>
    </ul>
</nav>
    </div>
</header>
    


<div class="signin">
    <div class="signin_header">
        <h1 class="font_60">Log In</h1>
        <p class="font_24">New to Eveien?</p>
    </div>
    <div class="signin_col signin_border">
        <div>

            <form method="post" action="#" id="registration">
                <div class="inputTxt">
    <div class="inputTxt_colLabel">
        <label for="Email" class="inputTxt_label">Email</label>
    </div>
    <div class="inputTxt_colInput">
        <input type="text" id="Email" name="Email" placeholder="Email..." onchange="emailver()">
        <span id="emailver"></span>
    </div>
</div>
                <div class="inputTxt">
    <div class="inputTxt_colLabel">
        <label for="EmailConf" class="inputTxt_label">Email again</label>
    </div>
    <div class="inputTxt_colInput">
        <input type="text" id="EmailConf" name="EmailConf" placeholder="Email again..." onchange="emailconf()">
        <span id="emailconf"></span>
    </div>
</div>
                <div class="inputTxt">
    <div class="inputTxt_colLabel">
        <label for="Password" class="inputTxt_label">Password</label>
    </div>
    <div class="inputTxt_colInput">
        <input type="text" id="Password" name="Password" placeholder="Password..." onchange="Passwordver()">
        <span id="Passwordver"></span>
    </div>
</div>
                <div class="inputTxt">
    <div class="inputTxt_colLabel">
        <label for="Passwordind" class="inputTxt_label">Password again</label>
    </div>
    <div class="inputTxt_colInput">
        <input type="text" id="Passwordind" name="Passwordind" placeholder="Password again..." onchange="Passwordind()">
        <span id="Passwordind"></span>
    </div>
</div>
                <div class="button">
    <button type="submit" name="Checkin">Check in</button>
</div>

            </form>

        </div>
    </div>
    <div class="signin_col">
        <div>
            <p class="font_24">Google</p>
            <p class="font_24">Facebook</p>
        </div>
    </div>
</div>


    <footer class="footer">
        <div>
            <div>
                <p class="font_20 hoverLine">Company</p>
                <ul class="font_14 hoverLine__nav">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Investors</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Confidentiality</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div>
                <p class="font_20 hoverLine">Opportunities</p>
                <ul class="font_14 hoverLine__nav">
                    <li><a href="#">Create automatically</a></li>
                    <li><a href="#">Create by description</a></li>
                    <li><a href="#">Create witch Designer</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div>
                <p class="font_20 hoverLine">Community</p>
                <ul class="font_14 hoverLine__nav">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google+</a></li>
                    <li><a href="#">YouTube</a></li>
                    <li><a href="#">LinkedIn</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div>
                <p class="font_20 hoverLine">Support</p>
                <ul class="font_14 hoverLine__nav">
                    <li><a href="#">Technical support</a></li>
                    <li><a href="#">Connect with us</a></li>
                </ul>
            </div>
        </div>
</footer>
</div>
<script src="js/eveien.js"></script>
</body>
