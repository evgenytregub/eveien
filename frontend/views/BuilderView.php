
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
    <header class="headerBuilder zIndex_900">
    <div class="headerBuilder__col6 headerBuilder__col6_logo">
        <a href="/" class=""><img src="images/eveienWhite.png" alt="Skype" class="header__img"></a>
        <p id="demo"></p>
    </div>
    <div class="headerBuilder__col6">
        <img onclick="headerBuilder('builder?view=1'); builderView('1')" src='images/monitor.png' alt="Skype"/>
        <img onclick="headerBuilder('builder?view=2'); builderView('2')" src='images/tablet.png' alt="Skype"/>
        <img onclick="headerBuilder('builder?view=3'); builderView('3')" src='images/tabletg.png' alt="Skype"/>
        <img onclick="headerBuilder('builder?view=4'); builderView('4')" src='images/phone.png' alt="Skype"/>
        <img onclick="headerBuilder('builder?view=5'); builderView('5')" src='images/phoneg.png' alt="Skype"/>
        <form method="post" action="#">
            <button type="submit" name="check" style="background-color: transparent; border: 0;">
                <img src="images/update.png" width="25" height="25" alt="update">
            </button>
        </form>
    </div>
</header>
    

<div style="width: 100%; position: relative; float: left">
    <div id="iframe1" style="position: absolute; left: 50%; top: 50px; margin-left:-100px; width: 100px; height: 100px; background-image: url('.');">
        <div id="iframe2" style="position: absolute; left: 100px; top: 100px;">
            <iframe src="http://localhost/eveien" class="zIndex_800" width="100%" height="200px" id="iframe" marginheight="0" frameborder="0" onLoad="builderView('0');"></iframe>
        </div>
    </div>
</div>

<script language="JavaScript">

    function builderView(view){
        var newheight;
        var newwidth;
        var WidthBackground;
        var HeightBackground;
        var marginleft;
        var WidthLeft;
        var width;
        var HeightTop;
        var height;
        var backgroundImage;


        if ( view == '1' || view == '0') {
            /*            if(document.getElementById){
                            newheight=document.getElementById("iframe").contentWindow.document .body.scrollHeight;
                            newwidth=document.getElementById("iframe").contentWindow.document .body.scrollWidth;
                        }*/
            newheight=document.documentElement.scrollHeight;
            newwidth=document.documentElement.clientWidth;

            document.getElementById("iframe").height= (newheight) + "px";
            document.getElementById("iframe").width= (newwidth) + "px";
            height = (newheight);
            width = (newwidth);
            WidthBackground = (newwidth);
            HeightBackground = (newheight);
            backgroundImage = "";
        }
        if ( view == '2' ) {
            height = 920;
            width = 660;
            document.getElementById("iframe").height= height + "px";
            document.getElementById("iframe").width= width + "px";
            WidthBackground = '760';
            HeightBackground = '1120';
            backgroundImage = "url('images/TabletBackgroundVert.png')";
        }
        if ( view == '3' ) {
            height = 660;
            width = 920;
            document.getElementById("iframe").height= height + "px";
            document.getElementById("iframe").width= width + "px";
            WidthBackground = '1120';
            HeightBackground = '760';
            backgroundImage = "url('images/TabletBackgroundGor.png')";
        }
        if ( view == '4' ) {
            height = 540;
            width = 260;
            document.getElementById("iframe").height= height + "px";
            document.getElementById("iframe").width= width + "px";
            WidthBackground = '280';
            HeightBackground = '640';
            backgroundImage = "url('images/PhoneBackgroundVert.png')";
        }
        if ( view == '5' ) {
            height = 260;
            width = 540;
            document.getElementById("iframe").height= height + "px";
            document.getElementById("iframe").width= width + "px";
            WidthBackground = '640';
            HeightBackground = '280';
            backgroundImage = "url('images/PhoneBackgroundGor.png')";
        }
        marginleft = WidthBackground/2;
        WidthLeft = (WidthBackground - width) / 2;
        HeightTop = (HeightBackground - height) / 2;

        document.getElementById("iframe1").style.marginLeft = "-" + (marginleft) + "px";
        document.getElementById("iframe1").style.width = (WidthBackground) + "px";
        document.getElementById("iframe1").style.height = (HeightBackground) + "px";
        document.getElementById("iframe1").style.backgroundImage = backgroundImage;

        document.getElementById("iframe2").style.left = (WidthLeft) + "px";
        document.getElementById("iframe2").style.top = (HeightTop) + "px";

    }



</script>

</div>
<script src="js/eveien.js"></script>
</body>
