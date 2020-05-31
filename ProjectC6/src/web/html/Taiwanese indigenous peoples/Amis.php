<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>原住民介紹-阿美族</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                                    <div class="header_content d-flex flex-row align-items-center justify-content-start">

                                        <div class="logo"><img src="../img/logo.jpg" style="max-height: 60px;"><a href="#" style="color: aliceblue;">台灣原住民族傳統歌謠</a></div>
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
                        <li><a href="signin.html"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDYamzP6pBag-YWcAlKJJVIwgIxe-eeI2cZhW9EvB8vvNL0jTI&s" height="20px" width="20px"></a></li>
                    </ul>
                </div>
            </header>

            <!-- Menu -->

            <div class="menu menu_mm trans_300">
                <div class="menu_container menu_mm">
                    <div class="page_menu_content">

                        <div class="page_menu_search menu_mm">
                            <form action="#">
                                <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                            </form>
                        </div>
                        <ul class="page_menu_nav menu_mm">
                            <li class="page_menu_item  menu_mm"><a href="../new_index.php">首 頁<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item  menu_mm"><a href="../index.php">認 識 原 住 民<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../music_introduction.php">歌 謠 介 紹<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../shop.php">購 買 商 品<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../music_play.php">音 樂 播 放<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../contantwe.php">線 上 合 作 洽 談<i class="fa fa-angle-down"></i></a></li>
                            <li class="page_menu_item menu_mm"><a href="../donate.php">資 助 物 資<i class="fa fa-angle-down"></i></a></li>

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
                <div class="footer_background" style="background-image: url(data:image/jpeg;base64,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)"> </div>
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
                                <a href="../music_introduction.php" class="list-group-item list-group-item-light">● 歌 謠 介 紹</a>
                                <a href="../shop.php" class="list-group-item list-group-item-dark">● 購 買 商 品</a>
                                <a href="../music_play.php" class="list-group-item list-group-item-light">●
                                    音 樂 播 放</a>
                                <a href="../contantwe.php" class="list-group-item list-group-item-dark">●
                                    線 上 洽 談 合 作</a>
                                <a href="../donate.php" class="list-group-item list-group-item-light">●
                                    資 助 物 資</a>
                            </div>
                            <iframe class="sidemar" src="https://calendar.google.com/calendar/embed?src=ntutipp%40gmail.com&ctz=Asia%2FTaipei" style="border: 0; height: 600px;" frameborder="0" scrolling="no"></iframe>
                        </div>
                    </div>
                    <div class=" col-lg-9 ">
                        <div>
                            <ul style="font-size: 25px; color: black; margin: 30px;">
                                <font face="DFKai-sb">

                                    <h1 class="musictop">
                                        阿美族</h1>

                                    <ul style="margin: 10px;">
                                        <li style="font-size: 20px;">
                                            阿美族:是臺灣原住民的一個族群。其原鄉主要分布於花東縱谷平原與海岸平原地區，少數分布於屏東縣牡丹、滿州鄉一帶。總人口數約二十萬餘人，是台灣原住民中人數最多的族群。
                                            <br>阿美族通常自稱為「Pangcah」或「Amis」。阿美族語「Pangcah」的意思是「人」或「同族」，而「Amis」是「北方」的意思。Pangcah的自稱可能源自於從Cilangasan向外遷移後對自我來源的描述，進而變成自我族群認同的稱呼，除此之外，由於發音類似舟的意思，因此有指象徵從海外行舟至此的人，其他甚或有番人或番社等諧音的說法。
                                        </li>
                                        <li style="font-size: 20px;">
                                            語言:<br>阿美族的語言為阿美語，屬於臺灣南島語言的一種，是目前臺灣南島語言當中使用人口數最多的語言。此外，臺鐵各級列車行駛花蓮至知本間中途各站會增加阿美語廣播。阿美語除因近代歷史因素，甚多使用日語以外，甚少受外界語言影響。其原始語彙上與馬來語與印尼語相似。

                                        </li>
                                        <li style="font-size: 20px;">
                                            族系分布:
                                            <br>阿美族根據地裡分布、傳統習慣及語音差異等因素，可以進一步分為北部（南勢）阿美、中部（秀姑巒）阿美、海岸阿美、馬蘭阿美、恆春阿美 等五個分類群。

                                            <br>北部阿美群︰分布於花蓮縣新城鄉、花蓮市、吉安鄉、壽豐鄉。
                                            <br>中部阿美群︰分布於花蓮縣鳳林鎮、光復鄉、瑞穗鄉、玉里鎮、富里鄉。
                                            <br>海岸阿美群︰分布於花蓮縣豐濱鄉、富里鄉豐南村及台東縣長濱鄉、成功鎮。
                                            <br>馬蘭阿美群︰分布於臺東縣成功鎮、東河鄉、卑南鄉、臺東市、太麻里鄉。
                                            <br>恆春阿美群︰分布於臺東縣池上鄉、關山鎮、鹿野鄉及屏東縣牡丹鄉、滿州鄉。
                                            <br>阿美族原鄉分布於花蓮縣、臺東縣和屏東縣境內。人口大部份居住在平地，較少處於山谷或群山之中。隨著經濟型態的轉變，長年旅居都會區的阿美族人，也在臺北和高雄等都會區中建立了以阿美族為主體的社區或聚落，如基隆市的奇浩社區和新北市汐止區的山光社區等，在台灣各地都有族人的身影。

                                        </li>
                                        <li style="font-size: 20px;">
                                            文化:
                                            <br>阿美族的起源傳說與大洪水、檳榔、兄妹婚有關。

                                            <br>阿美族在傳統上被歸類為母系社會（母系親屬制度），家族事務多以女性為主體並由女性負責，家族產業之繼承以家族長女及其他女性為優先；家族/氏族多指母系一族。然而在部落中，有關部落大小事務則是由部落男子所組成的年齡階級制度（selal）和集會所來負責部落事務的統籌規劃與分工執行；各階級負責各種不同的任務與工作，並且聽從青年之父（mama&ensp;
                                            nu&ensp; kapah）與長輩們的指導。阿美族女性對於部落事務則沒有議事權，甚至不得於平時進入集會所（Talo'an / Soraratan /
                                            'Adawang
                                            /
                                            Sefi）。

                                            <br>阿美族的傳統祭儀有豐年祭（Ilisin）、播種祭（hafay/小米）、捕魚祭、海祭、祈晴祭和祈雨祭等等。許多祭典內容原有嚴格男女分際或性別禁忌，但因時代變遷而有所更曳或亡佚。

                                            <br>豐年祭是阿美族重要的祭祀儀式，其重要性相當於漢人的農曆年，是族人與祖先、神靈團聚的時間，具有經濟、教育、訓綀、宗教以及政治軍事上的功能。在日治時期與基督教傳播盛行期間，因其功能性，許多部落的豐年祭活動幾度被禁止，並因此造成豐年祭傳承的斷代。豐年祭通常在每年七至九月間進行，主要為耕地收獲後的時節舉辦，早期則是在小米收獲過後舉行；天數則依各部落而異，一般是由各部落耆老（mato'asay）來決定，傳統上短則三天，多則半個月，並依氣候條件造成的收獲時間不同，大抵是由台東阿美族部落先舉辦，之後才陸續由花蓮阿美族接辦。祭祀過程與內容依各部落習慣上之不同而有差異，如年齡階層（selal）的訓練與進階、祭祀流程等，傳統上主要會包括迎靈、宴靈和最後的送靈三大階段。豐年祭期間會進行捕獵、採集或購買食物，並由族人們共聚分食。
                                            而因應時代改變，許多部落在豐年祭尾聲，會進行各階層的各自表演，一來是寓意在延續階級之間的凝聚力，二來則是為了傳遞歡樂的氣氛。部分部落甚至已經出現了女性階級，並且一樣在豐年祭期間分工並表演。

                                            <br>阿美族傳統文物中包含有陶製品（主要是女性負責製作，目前大概只剩下花蓮豐濱鄉的貓公部落有傳承）、編藝品（使用材料：竹、藤、莎草、香蕉絲、月桃等等）和其它手工藝品（如傳統服飾、樹皮帽、木雕和各類工具等等）。

                                            <br>沿海阿美族目前尚有部分部落保有製作排筏的技藝並在平時出海獵捕魚類，如台東長濱鄉的真柄部落（傳統竹筏）和大俱來部落（現代膠筏）。沿海阿美族除乘船出海之外，部分族人會潛水獵捕礁間魚類、海膽等海產，女性族人則大多會採集潮間帶海草和貝類。傳統上，女性被禁止上船活動。

                                            <br>阿美族的生活中從不缺乏音樂和舞蹈，婚宴和喜慶場合中，常見到阿美族人會起身歌唱和跳舞，此時，除了各部落或各分類群裡會有固定的傳統歌舞之外，也常見流行歌舞或阿美族人的即興創作。但是豐年祭歌舞則只會在豐年祭儀呈現，在一般場合中並不被允許。在現代，許多阿美古調也被錄製或改編並傳唱於世。

                                            <br>在傳統信仰上為泛靈信仰，各部落也有巫師/祭司系統，祖先或祖靈亦屬神靈，但不是指有專門神通或管理特定事務之神。基督宗教傳入後，許多族人改信基督教，而傳統信仰雖仍存在但並不普遍。目前，傳統巫師/祭司系統則絕大多數亡佚，只剩下極少數部落才留有口述或是即將面臨傳承消失。
                                        </li>
                                        <li style="font-size: 20px;">
                                            習俗:
                                            <br>下列為阿美族的各種祭典。

                                            <br>豐年祭：祭品以糯米飯、米酒、獸肉為主，祭典過程中除了重要活動，其他就是眾人共享阿美大餐，取自大自然的各種新鮮野菜，以豆類、藤心、芒草心、雞肉、豬肉為主。
                                            <br>海祭：又稱為捕魚祭，祭品以阿里鳳鳳為主，另一個祭品是芒草結，即把割下的芒草插在土裡，末端留下留嫩的一葉，其餘打個結，用以象徵強韌的生命力。由於阿美族信奉的海神（Kafit）忌諱綠色的葉菜，因此在此時的祭典中是不可食用葉類野菜，或許這也是十心菜成為阿美族野菜的原因。所謂的「心」指的是植物的嫩莖，阿美族所食用的野菜中最具代表性的是十心菜分別為黃藤心、林投心、芒草心、月桃心、檳榔心、山棕心、甘蔗心、鐵樹心、椰子心和臺灣海棗心。
                                            <br>小米收穫祭：古早採收小米時，通常用山棕葉來綑綁，山棕心與豆類（早期主要是樹豆），是小米收穫祭中食用的野菜。小米是早期臺灣原住民的主食，對原住民而言，小米是植物中最敏感的精靈，好像具有靈性一樣，有靈耳、靈眼、靈覺。相對地、禁忌也特別多，稍不留心就會惹來災禍。在田裡收割小米時，不但講話要小心，動作更要謹慎，使用「休息」、「完畢」、「回家」等日常用語以及放屁、打人等動作，都不能說也不能做。在稻米取代小米成為阿美族的主要糧食作物之後，小米收獲祭已名存實亡。
                                            <br>播種祭：煮龍葵湯來祭祀神明，以祈求將來能豐收，到了天一亮便出門播種。
                                            <br>狩獵祭：這是一年最後一個祭典，藉由捕獵的活動，讓家族、親戚、平日換工的夥伴們一起享用捕肉的獵物，獵物以鳥類為主，通常與樹豆、鵲豆一同煮食。
                                            <br>建屋祭：年初的第一個祭典，主要意義是祭拜掌管田獵與耕作的戰神（守護神）馬拉道(Malataw)，同時也是男性年齡階級晉級的一個祭典（現代多併入豐年祭期間擇時舉辦），女子皆不得靠近。食用的菜餚是豆類、烤雞、藤心、地瓜與芋頭，葉菜類則禁止食用。
                                            <br>祭祖：全村以家庭為單位全員參加，由女祭司擔任家人與先祖的溝通者，祭品是生薑、糯米糕、檳榔、酒等等。</li>
                                        <li style="font-size: 20px;">
                                            相關歷史事件:
                                            <br>麻荖漏事件為1911年發生在臺灣臺東廳的阿美族反抗日警事件，台東史上最大規模的抗日事件。
                                            <br>七腳川事件
                                            <br>大港口事件</li>
                                    </ul>
                                </font>
                            </ul>
                        </div>
                    </div><!-- .container -->



                    <div class="container-fluid" style="margin-bottom: 220px;">
                        <div class="row">
                            <div class="mx-auto">
                                <a class="col-sm-12 col-md" href="https://www.apc.gov.tw/portal/index.html"><img class="fd" src="../../img/原住民族委員會.jpg"></a>
                                <a class="col-sm-12 col-md" href="http://www.tipp.org.tw/index.asp"><img class="fd" src="../../img/原住民族資訊資源網.jpg"></a>
                                <a class="col-sm-12 col-md" href="http://www.dmtip.gov.tw/web/index"><img class="fd" src="../../img/原住民數位博物館.jpg"></a>
                                <a class="col-sm-12 col-md" href="https://www.taiwan.net.tw/m1.aspx?sNo=0001023"><img class="fd" src="../../img/觀光局原住民.jpg"></a>
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