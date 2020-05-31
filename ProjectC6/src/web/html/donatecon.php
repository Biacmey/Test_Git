<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>原住民歌謠-donate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../css/table.css" rel="stylesheet" type="text/css">
    <link href="../css/responsive.css" rel="stylesheet" type="text/css">
    <link href="../css/main_styles.css" rel="stylesheet" type="text/css">
    <link href="../css/OwlCarousel2-2.2.1/owl.carousel.css" rel="stylesheet" type="text/css">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments)
        }
        gtag('js', new Date());
        gtag('config', 'UA-49287116-7')
    </script>
</head>

<body style="margin-top: 50px;">
    <div style="overflow: hidden;">
        <header class="header">
            <div class="header_container">
                <div class="ovfl">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_content d-flex flex-row align-items-center justify-content-start">

                                    <div class="logo"><img src="../img/logo.jpg" style="max-height: 60px;"><a href="#" style="color: aliceblue;">台灣原住民族傳統歌謠</a></div>
                                    <nav class="main_nav">
                                        <ul>
                                            <li><a href="new_index.php" style="color: aliceblue;">首 頁</a></li>
                                            <li><a href="index.php" style="color: aliceblue;">認 識 原 住 民</a></li>
                                            <li><a href="music_introduction.php" style="color: aliceblue;">歌 謠 介 紹</a>
                                            </li>
                                            <li><a href="shop.php" style="color: aliceblue;">購 買 商 品</a></li>
                                            <li><a href="music_play.php" style="color: aliceblue;">音 樂 播 放</a></li>
                                            <li><input type="text" style="color: aliceblue;" name="type" value="<?= $_SESSION["email"] ?>"></li>
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
            <div class="header_social ">
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="signin.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s" height="20px" width="20px"></a></li>
                </ul>
            </div>
        </header>

        <div class="menu menu_mm trans_300">
            <div class="menu_container menu_mm">
                <div class="page_menu_content">

                    <div class="page_menu_search menu_mm">
                        <form action="#">
                            <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                        </form>
                    </div>
                    <ul class="page_menu_nav menu_mm">
                        <li class="page_menu_item  menu_mm"><a href="new_index.php">首 頁<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item  menu_mm"><a href="index.php">認 識 原 住 民<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item menu_mm"><a href="music_introduction.php">歌 謠 介 紹<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="shop.php">購 買 商 品<i class="fa fa-angle-down"></i></a>
                        </li>
                        <li class="page_menu_item menu_mm"><a href="music_play.php">音 樂 播 放<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="contantwe.php">線 上 合 作 洽 談<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="donate.php">資 助 物 資<i class="fa fa-angle-down"></i></a></li>

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
                    <li><a href="signin.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s" height="20px" width="20px"></a></li>
                </ul>
            </div>
        </div>



        <!-- Footer -->
        <footer class="footerss">
            <div class="footer_background" style="background-image: url(data:image/jpeg;base64,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)">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                            <div class="footer_logo"><a href="#">逢甲大學資訊工程系</a></div>
                            <div class="copyright ml-auto mr-auto">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>2019 逢甲大學喇叭庄<br>台中市西屯區
                                <i class="fa fa-heart-o" aria-hidden="true"></i><br>聯絡我們0900-888888<br> <a href="https://aboriginal-and-torres-strait-islander-organisation-26.business.site/?utm_source=gmb&utm_medium=referral" target="_blank">客家喇叭庄</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="footer_social ml-lg-auto">
                                <ul>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="signin.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s" height="20px" width="20px"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <div class="row">
            <div class="col-md" style="margin-top: 100px;">
                <img src="../img/090xs.jpg" class="mx-auto d-block" style="width: 94%;">
            </div>
        </div>


        <div class="container-fluid ml-auto mr-auto" style="margin-bottom: 150px; width: 92%">
            <div class="row">
                <div class=" col-lg-9 container">
                    <p class="shopfont mt-4 mb-4">歡迎來到原住民歌謠，如果有任何的疑問、建議、不滿或是資助的物資，都歡迎聯絡我們！</p>
                    <div id="applyForm">
                        <div class="form-row">
                            <div class="col-md-6 mb-3"><label class="contaa" for="nickname">暱稱</label><input id="nickname" class="form-control" type="text" value="" required="" style="color: black;"><small class="text-secondary">填寫暱稱可以讓我們辨識您的身分。</small></div>
                            <div class="col-md-6 mb-3"><label class="contaa" for="email">電子郵件</label><input id="email" class="form-control" type="email" value="" required="" style="color: black"><small class="text-secondary">填寫正確的電子郵件地址，我們才能回覆您的訊息。</small></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3"><label for="websiteURL" class="contaa">手機號碼</label><input id="phone" class="form-control" type="number" value="" style="color: black">
                                填寫您的手機號碼，可以讓我們進一步的了解您。</div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3"><label for="websiteURL" class="contaa">網站網址(選填)</label><input id="websiteURL" class="form-control" type="text" value="">
                                填寫您的網站網址，可以讓我們進一步的了解您。</div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3"><label class="contaa" for="content">內容描述</label><textarea id="content" class="form-control" rows="7" required="" style="font-family: TC MONO monospace; color: black;"></textarea><small class="text-secondary">請輸入您想要對本站敘述的文字內容，盡可能的詳細。</small>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center mt-4 mb-4">
                        <div class="col-12 mb-2 col-lg-5">
                            <a href="logg.php"><button id="submitButton" class="btn btn-lg btn-primary btn-block" type="submit">送出聯絡表單</button></a>
                        </div>

                    </div>
                </div>
            </div><!-- .container -->



            <div class="container-fluid" style="margin-bottom: 220px;">
                <div class="row">
                    <div class="mx-auto">
                        <a class="col-sm-12 col-md" href="https://www.apc.gov.tw/portal/index.html"><img class="fd" src="../img/原住民族委員會.jpg"></a>
                        <a class="col-sm-12 col-md" href="http://www.tipp.org.tw/index.asp"><img class="fd" src="../img/原住民族資訊資源網.jpg"></a>
                        <a class="col-sm-12 col-md" href="http://www.dmtip.gov.tw/web/index"><img class="fd" src="../img/原住民數位博物館.jpg"></a>
                        <a class="col-sm-12 col-md" href="https://www.taiwan.net.tw/m1.aspx?sNo=0001023"><img class="fd" src="../img/觀光局原住民.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>