<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>歌 謠 介 紹-太魯閣族</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link href="../../css/table.css" rel="stylesheet" type="text/css">
    <link href="../../css/responsive.css" rel="stylesheet" type="text/css">
    <link href="../../css/main_styles.css" rel="stylesheet" type="text/css">
    <link href="../../css/OwlCarousel2-2.2.1/owl.carousel.css" rel="stylesheet" type="text/css">
</head>

<body style="margin-top: 50px;">

    <div style="overflow: hidden;">
        <div class="super_container">
            <!-- Header -->
            <header class="header">
                <div class="header_container">
                    <div class="ovfl">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div
                                        class="header_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="logo"><img src="../../img/logo.jpg" style="max-height: 60px;"><a
                                                href="#" style="color: aliceblue;">台灣原住民族傳統歌謠</a></div>
                                        <nav class="main_nav">
                                            <ul>
                                                <li><a href="new_index.php" style="color: aliceblue;">首 頁</a></li>
                                                <li><a href="index.php" style="color: aliceblue;">認 識 原 住 民</a></li>
                                                <li><a href="music_introduction.php" style="color: aliceblue;">歌 謠 介 紹</a></li>
                                                <li><a href="music_play.php" style="color: aliceblue;">音 樂 播 放</a></li>
                                                <li><input type="text" style="color: aliceblue; width: 93px;" name="type" value="<?= $_SESSION["email"] ?>"></li>
                                            </ul>
                                        </nav>
                                        <div class="header_extra ml-auto">
                                            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social -->
                <div class="header_social">
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="signin.html"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s"
                                    height="20px" width="20px"></a></li>
                    </ul>
                </div>
            </header>

            <!-- Menu -->

            <div class="menu menu_mm trans_300">
                <div class="menu_container menu_mm">
                    <div class="page_menu_content">

                        <div class="page_menu_search menu_mm">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input menu_mm"
                                    placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav menu_mm">
                            <li class="page_menu_item  menu_mm"><a href="../new_index.php">首 頁<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item  menu_mm"><a href="../index.php">認 識 原 住 民<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../music_introduction.php">歌 謠 介 紹<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../shop.php">購 買 商 品<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../music_play.php">音 樂 播 放<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../contantwe.php">線 上 合 作 洽 談<i
                                        class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../donate.php">資 助 物 資<i
                                        class="fa fa-angle-down"></i></a></li>

                        </ul>
                    </div>
                </div>

                <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

                <div class="menu_social">
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="signin.html"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s"
                                    height="20px" width="20px"></a></li>
                    </ul>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footerss">
                <div class="footer_background"
                    style="background-image: url(data:image/jpeg;base64,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)">                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <div class="footer_logo"><a href="#">逢甲大學資訊工程系</a></div>
                                <div class="copyright ml-auto mr-auto">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script>2019 逢甲大學喇叭庄<br>台中市西屯區
                                    <i class="fa fa-heart-o" aria-hidden="true"></i><br>聯絡我們0900-888888<br> <a
                                        href="https://aboriginal-and-torres-strait-islander-organisation-26.business.site/?utm_source=gmb&utm_medium=referral"
                                        target="_blank">客家喇叭庄</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="footer_social ml-lg-auto">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="signin.html"><img
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s"
                                                    height="20px" width="20px"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


            <div class="row">
                <div class="col-md" style="margin-top: 100px;">
                    <img src="../../img/090xs.jpg" class="mx-auto d-block" style="width: 94%;">
                </div>
            </div>
            <div class="container-fluid ml-auto mr-auto" style="margin-bottom: 150px; width: 92%">
                <div class="row">
                    <div class="col-lg-3 ">
                        <div class="list-group text-align = left" style="width: 90%">
                            <div class="sidemar topface">
                                <a href="../index.php" class="list-group-item list-group-item-dark">●
                                    認 識 原 住 民</a>
                                <a href="../music_introduction.php"
                                    class="list-group-item list-group-item-light">● 歌 謠 介 紹</a>
                                <a href="../shop.php" class="list-group-item list-group-item-dark">● 購 買 商 品</a>
                                <a href="../music_play.php" class="list-group-item list-group-item-light">●
                                    音 樂 播 放</a>
                                <a href="../contantwe.php" class="list-group-item list-group-item-dark">●
                                    線 上 洽 談 合 作</a>
                                <a href="../donate.php" class="list-group-item list-group-item-light">●
                                    資 助 物 資</a>
                            </div>
                            <iframe class="sidemar"
                                src="https://calendar.google.com/calendar/embed?src=ntutipp%40gmail.com&ctz=Asia%2FTaipei"
                                style="border: 0; height: 600px;" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class=" col-lg-9 ">
                        <div>
                            <ul style="font-size: 25px; color: black; margin: 30px;">
                                <font face="DFKai-sb">
                                    <h1 class="musictop">歌 謠 介 紹-太魯閣族</h1>
                                    <ul style="margin: 10px;">
                                    <li style="font-size: 20px;"> 　　太魯閣族的文化習俗與泰雅族相似，原屬泰雅族之賽德克亞族太魯閣群，2004年1月正式從泰雅族劃出，正名為太魯閣族，為原住民族群中，唯一以地域名稱為族名者。在音樂的表現上，太魯閣族與泰雅族最顯著的差別在於音組織。泰雅族慣用小三度，並在其上方或者下方加入一個大二度音，成為三音組織；太魯閣族多在小三度的上方及下方各加入一個大二度音，使之成為四音組織。</li>
                                    <li style="font-size: 20px;"> 　　太魯閣族語彙中的「歌」稱為uyas，「唱歌」稱為muyas。在歌謠種類上，太魯閣族主要有跳舞歌（uyas mgrey）、還工歌（uyassmbarux）、酒醉歌（uyas bsukan），以及由虛詞ohnay作開頭的ohnay 類歌謠。在歌唱形式上，除了獨唱、對唱、領唱與答唱之外，另有卡農形式的輪唱唱法（smngur / mthri）。太魯閣族的輪唱僅用於跳舞歌，完全由女性擔任，主要為二聲部形式，一人領唱，眾人回應，領唱者歌詞自由即興，而跟著唱和的第二聲部在演唱時，則完整重現第一聲部的旋律、歌詞與節奏。在樂器的使用上，以口簧琴（lubug）與木琴（tatuk）為主，口簧琴為泰雅與太魯閣兩族均使用之樂器，木琴為太魯閣族所獨有</li>            
                                    <p>
                                        參考資料:<br>
                                        原住民族委員會<br>
                                        國家文化委員會
                                    </p>       
                                    </ul>        
                                </font>
                            </ul>
                        </div>
                    </div><!-- .container -->
                    <div class="container-fluid" style="margin-bottom: 220px;">
                        <div class="row">
                            <div class="mx-auto">
                                <a class="col-sm-12 col-md" href="https://www.apc.gov.tw/portal/index.html"><img
                                        class="fd" src="../../img/原住民族委員會.jpg"></a>
                                <a class="col-sm-12 col-md" href="http://www.tipp.org.tw/index.asp"><img class="fd"
                                        src="../../img/原住民族資訊資源網.jpg"></a>
                                <a class="col-sm-12 col-md" href="http://www.dmtip.gov.tw/web/index"><img class="fd"
                                        src="../../img/原住民數位博物館.jpg"></a>
                                <a class="col-sm-12 col-md" href="https://www.taiwan.net.tw/m1.aspx?sNo=0001023"><img
                                        class="fd" src="../../img/觀光局原住民.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js"></script>
        <script src="../../js/custom.js"></script>
    </div>
</body>

</html>