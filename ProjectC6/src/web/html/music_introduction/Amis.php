<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>歌 謠 介 紹-阿美族</title>
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

                                    <h1
                                        class="musictop">
                                        歌 謠 介 紹-阿美族</h1>

                                    <ul style="margin: 10px;">
                                    <li style="font-size: 20px;"> 　　阿美族的生活中從不缺乏音樂和舞蹈，婚宴和喜慶場合中，常見到阿美族人會起身歌唱和跳舞，此時，除了各部落或各分類群裡會有固定的傳統歌舞之外，也常見流行歌舞或阿美族人的即興創作。但是豐年祭歌舞則只會在豐年祭儀呈現，在一般場合中並不被允許。在現代，許多阿美古調也被錄製或改編並傳唱於世。</li>
                                    <li style="font-size: 20px;"> 　　傳統的阿美族人謹守著神聖與世俗的分際，在適當的時候唱著合適的歌。 傳統阿美族歌謠皆是祖先流傳而來的，但自日治時期以來，由於政治力的介入，以及生活 型態改變等種種複雜因素，使得傳統阿美族音樂開始改變，曲調中滲入濃濃的東洋風。</li>            
                                    <li style="font-size: 20px;"> 　　1980年代後，許多阿美族人離開部落到都市工地做工，融入以漢族為主體的台灣 社會。現代的阿美族歌謠中，因而滲入了許多漢族的用語，並常以歌詞抒發工地生活的苦悶。</li>
                                    <li style="font-size: 20px;"> 　　由於傳統時代各部落的地理區隔，因此不同地區的歌謠便有著不 同的曲調與演唱形式。其中最著名的是台東馬蘭地區阿美族的複音唱法。洛杉磯奧運中驚艷國際樂壇的阿美 族【歡樂相聚歌】，就是在台東馬蘭地區傳唱千年的的複音歌謠。</li>
                                    <li style="font-size: 20px;"> 　　歷來的語言學或人類學研究將阿美族以「北部、中部、南部」三群或「南勢、秀姑巒、海岸、卑南、恆春」五群等劃分，在音樂上，也因地域關係而產生豐富差異及多元性。</li>
                                    <li style="font-size: 20px;"> 　　阿美族音樂以聲樂歌唱為大宗，最重要的區辨觀念是以演唱禁忌之有無，而劃分為「生活的」或「祭儀的」二種類型的歌謠。「生活的」可以熟悉的旋律輕鬆自由的詮釋當下的情景，歌詞以襯詞（或曰虛詞）ho hai yan 為主，實詞是歌者因人、事、時、地、物即興填詞。「祭儀的」歌是固定的、不變的、嚴肅的。歌詞無論襯詞或實詞都較固定，尤其是固定祭儀中之神靈、目的、祭品、祭具、禱詞等主要關鍵字。最主要的部落祭典是每年夏季所舉行的豐年祭， 北部阿美稱malalikit，中部曰ilisin，南部則以kiluma’an名之，三個地區的儀式內容與性質略有差異，祭歌也有很大的不同。巫師（cikawasay 或sikawasay）制度目前僅見於南勢阿美族的幾個部落，巫師的祭儀中以稱為mirecuk 的巫師祭最為重要，目的是為了祭祀巫師自身的祖先及所擁有的神靈。成年人的歌謠與兒童歌謠亦有顯著不同，兒歌多有固定的旋律與實詞，音樂為單音演唱，歌詞有時會帶著想像之成分，而成人歌謠不論曲詞皆多所即興，歌曲的內容僅與生活現實中的耕織漁獵、宴飲舞歡有關。阿美族人以歌唱娛神，如祭儀期間；或娛人，如歡慶場合；或自娛，如工作時刻。</li>
                                    <li style="font-size: 20px;"> 　　在形式結構上，阿美族音樂以「自由對位式複音歌唱」聞名，歌曲均以一人領唱，眾人和腔進行，在群眾的和腔部分，眾人同時演唱同一旋律，但各自發揮即興變化之能，其中一人以高八度音域演唱。故因即興所造成的旋律錯落，以及音域帶來的音色差異，導致豐富多彩的複音聲響效果。這種演唱方式一直被視為阿美族歌唱形式的特色代表，卻僅見於臺東地區的阿美族，花蓮阿美另有其所屬的複音演唱形態，比方卡農式的聲部重疊、某些巫師歌曲中根據巫師位階演唱不同旋律造成的旋律交疊等。</li>
                                    <li style="font-size: 20px;"> 　　文獻中記載的阿美族樂器，常見者有口簧琴 (datok)、弓琴(cifuculay datok)、竹木琴(kokang)、各式鈴鐺(singsing、tangfur、cingacing、palalikud)、銅鑼(kakelingan)、皮鼓(tatepo’an) 以及各式笛類樂器(tipolo’、’epip) 等。口簧琴與弓琴皆與青年男女的情愛表達有關。鈴鐺之屬多被視為服飾的一部分，tangfur 則為於集會所受訓之少年所特有的樂器。鑼、鼓應為漢人傳入的樂器，以報訊為其主要用途。笛類樂器的使用則因缺乏記載而所知甚少。這些樂器除鈴鐺還廣泛使用外，今多已絕跡，僅少數人仍為口簧琴的傳承而努力。舊時流傳下來的傳統音樂，除豐年祭歌謠外，現多僅五、六十歲以上的年長者才熟悉。1960、1970 年代，由於唱片的錄製發行，改變了近代阿美族音樂傳播及創作的形態，同時造就了不少家喻戶曉的阿美歌星，女歌手盧靜子可為代表。這時期許多傳統歌謠被填上阿美語歌詞，亦創作出許多新的曲調，例如著名的〈馬蘭姑娘〉，以及黃貴潮的〈阿美頌〉等，這類歌曲至今在阿美社群中仍十分流行。1996 年亞特蘭大奧運會使用一首馬蘭人郭英男夫婦演唱的古謠「第二首長歌」做為廣告配樂，此事從智慧財產權相關的法律事件帶動起阿美族人民族自覺，以歌舞文化做為號召的表演團體如雨後春筍紛紛成立，如杵音文化藝術團、巴奈合唱團、吉浦巒文化藝術團、馬蘭吟唱團等。此外以青年朋友為主的新一代音樂團體或歌手也展露頭角，如以藍調或搖滾角度重新詮釋傳統歌謠的「檳榔兄弟」，或如圖騰樂團、鹹豬肉樂團，或是以個人風格著稱的流行歌手張震嶽等。</li>    
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