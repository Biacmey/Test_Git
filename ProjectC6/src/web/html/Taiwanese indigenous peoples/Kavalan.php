<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>原住民介紹-噶瑪蘭族</title>
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
                    <div class="col-lg-9 ">

                        <ul style="font-size: 25px; color: black; margin: 30px;">
                            <font face="DFKai-sb">
                                <h1 class="musictop">
                                    噶瑪蘭族</h1>
                                <ul style="margin: 10px;">

                                    <li style="font-size: 20px;">
                                        為台灣的平埔族原住民，主要分布於：冬山河域、三星鄉、壯圍鄉、宜蘭縣的宜蘭市、羅東鎮的羅東、蘇澳鎮的蘇澳...等一帶，以及花蓮市與新城鄉附近、東海岸之豐濱鄉(主要聚集地)、臺東縣和長濱鄉等地，人口約1,494人。原居於蘭陽平原，後因漢人爭地壓力而逐漸南遷。
                                    </li>
                                    <li style="font-size: 20px;">
                                        宜蘭地名的由來:<br>
                                        台灣舊稱「葛瑪蘭」、「蛤仔蘭」、「蛤仔難」、「甲仔難」、「甲子難」等，正是「噶瑪蘭」（Kbalan）一語台灣閩南語的音譯。「Kbalan」在噶瑪蘭語裡面，是「平原之人類」的意思，主要是該族族人用來區別當時居住於山區之泰雅族「Pusulan」的稱謂。西班牙人佔領北部之後於噶瑪蘭居住地劃定「噶瑪蘭省」（Cabarán）。清朝領台以後，宜蘭歸諸羅縣管轄，至1723年又歸新設立的「彰化縣」，7年後再劃入同樣成立於1723年的「淡水廳」。在這段期間內，清朝政府對宜蘭地區只有名義上的管轄，並沒有真正設管治理。由於宜蘭被視為行政邊疆，常成為海盜、流寇的聚集地。為便於經營開發，在臺灣府知府楊廷理多次奏請設置行政區以後，才於1810年設「噶瑪蘭廳」於噶瑪蘭廳城。1875年噶瑪蘭廢廳改縣，而以噶瑪蘭的「蘭」字，冠上「宜」字，改稱「宜蘭縣」，由新設的臺北府管轄。自此以後，「噶瑪蘭」這三個字消失，而「宜蘭」則變成該縣新的專屬名稱。
                                    </li>
                                    <li style="font-size: 20px;">
                                        噶瑪蘭族以前稱為「蛤仔難三十六社」，但事實上其聚落的數量是超過六、七十個社以上。過去對噶瑪蘭族的稱呼都以蘭陽溪為界，以北的稱為「西勢番」、以南的稱為「東勢番」。當時重要聚落包括打馬煙社、抵美簡社、奇立丹社、奇立板社、貓里霧罕社、抵美福社、流流社、武暖社、歪仔歪社、新仔羅罕社、利澤簡社、加禮宛社、奇武荖社等。
                                        噶瑪蘭族群首見於歷史的記載，是在1632年，當時佔據淡水一帶的西班牙人，有一艘商船在航行中被颶風漂流至「蛤仔難」平原。但是，對於噶瑪蘭比較明確的記載，則是在1650年時，荷蘭人所記錄之當時該地39社的人口資料，距今已有340餘年。
                                    </li>
                                    <li style="font-size: 20px;">
                                        祭祀:<br>
                                        噶瑪蘭族的祭司皆為女性，男性則有年齡階級。重要的祭儀活動有：出草勝利之後的儀式「卡達班」（qataban，目前這項活動轉化為豐年祭舉行）、成為巫師的入巫儀式「奇賽伊茲」（kisaiz）；治病儀式「巴格拉比」（pakalabi）、喪禮「巴都干」（patxuqan/patuxqan）、以及年底的祭祖儀式「巴禮令」（palilin）等。
                                        噶瑪蘭族人認為全黑的服飾只有長者才能穿著，所以噶瑪蘭男子必須在從tama na
                                        sabasayan（青年之父）的年齡階級組織晉升至lubang（長老群）的人，才有資格全身穿著黑色的服飾。
                                        日人伊能嘉矩在1897年〈宜蘭方面平埔番的實地調查〉的調查資料中提及噶瑪蘭人的有袖短衣與方布衣還有保存，另外尚有開襟筒袖衣、長及膝蓋的筒袖衣。近代噶瑪蘭族的常見的服飾以黑白為主，新社部落的族人不僅復織了用香蕉絲織布縫製成的滾黑邊方衣，同時也復織了主色為黑、紅、藍的傳統綴珠垂鈴新娘腰裙。
                                    </li>
                                    <li style="font-size: 20px;">
                                        被迫離開原居地到花蓮平原:<br>
                                        1768年漢人林漢生初侵噶瑪蘭，為當地原住民所殺。1776年，林元旻由烏石港北邊的河流上溯，成功侵佔淇武蘭，為漢人入墾蘭陽平原最早者。然而20年後，漢人大規模武裝進入噶瑪蘭，這次的結果卻是噶瑪蘭族被迫離開原居地。1796年，漳州人吳沙率領軍隊式的集團，以漳州移民為主力，配上泉州人和客家族群，以武力侵犯噶瑪蘭，建立了頭城。這群已經在這片土地平靜生活了數千年的噶瑪蘭族人，開始了他們翻天覆地的大改變。但早在吳沙帶著漢人開墾宜蘭平原之前，噶瑪蘭人農耕範圍已遍及各地，吳沙所率領的「羅漢腳仔」只能找較為偏僻的地方墾拓。漢人以欺壓的方式，侵佔噶瑪蘭族的土地。例如將死貓、死狗丟入噶瑪蘭族的田地，使噶瑪蘭族因為不吉利而放棄田地。或是推移田埂，使噶瑪蘭人的田地縮減。漢人種種欺壓行為，終於迫使噶瑪蘭族往花蓮、台東遷移。
                                        不久以後，漢人的勢力就遍及噶瑪蘭東西勢三十六社，漢人人口並急速增加。噶瑪蘭人不論在經濟、社會方面，都居於絕對弱勢的地位，他們只好在平原內部做境內的小遷徙，開始遷往三星、蘇澳等地。噶瑪蘭人逐漸失去賴以維生的土地以後，在1830年至1840年之間，以五結鄉的加禮宛社人為首南遷奇萊平原，在美崙溪北岸(今花蓮北埔)建立新的聚落，包括加禮宛社、竹仔林社、武暖社、七結仔社、談仔秉社、瑤歌社，為加禮宛六社，以加禮宛社為頭領的「大社」。
                                        初到該地的噶瑪蘭人，就像當時吳沙挾千人之勢席捲蘭陽平原一樣，很快地也稱雄於奇萊的荒野間，族人紛紛湧至，而逐漸凌駕於原本居住在該地的阿美族和賽德克族，加禮宛六社遂成為噶瑪蘭族的第二故鄉。
                                    </li>
                                    <li style="font-size: 20px;">
                                        加禮宛事件:<br>
                                        噶瑪蘭族人的被迫遷徙早期主要因為受到漢人武裝屯墾及「流番」遷徙的進逼，晚期受制於社會的弱勢被漢人運用契約使所得無法溫飽，或喪失土地；雖然一再遷徙，但自清朝開山撫番政策的施行，加上晚清北路（約今日之蘇花公路）的修築，經濟文化的衝突加上在臺漢人違反清朝保護番民的禁入番界令屢屢侵吞番地，終於在光緒四年（1878年）爆發了由「少壯番」引導的加禮宛事件。
                                        該事件的起因有兩個版本，一主張漢人商賈陳文禮越界侵墾加禮宛六社的土地而引發衝突，另一說為漳浦人陳輝煌「指營撞騙，按田勒派，共詐番銀不少；該社被逼難堪，是以決計反撫」。噶瑪蘭族群原偏居蘭陽平原，為漢人進墾台灣最晚的地區；但自加禮宛社事件後，主要的噶瑪蘭族群精銳盡失，餘眾或向南逃竄或歸降清軍。自清朝1874年再度廢止渡臺禁令後，經此役更積極的鼓勵墾民與商販前往後山，戰事結束後總兵吳光亮採「勒遷以分其勢」的政策，勒令部份加禮宛社及參與戰事的撒奇萊雅族（Sakizaya）社眾遷離，自此噶瑪蘭族人散居各處，逐漸融入漢人或他族的社會。2005年統計資料顯示僅查得911人。
                                        現在，居住在蘭陽平原上的噶瑪蘭人已經很少了，他們散居各處，沒有比較大的聚落。至於在花東海岸，花蓮豐濱鄉的新社村與立德部落，則是噶瑪蘭人目前較具規模的部落。
                                        當年雖有數千人移往花蓮，但仍有噶瑪蘭族人沒有離開，混居於外來移民，而私下依然保有自己的傳統習俗，仍有族語依然使用於鄉間。</li>
                                    <li style="font-size: 20px;">
                                        族群尋根運動:<br>
                                        一直被迫附屬在阿美族當中的噶瑪蘭族，其實不論是祭典或語言文化，都與阿美族完全不同。因此，從1980年開始，噶瑪蘭族的原住民，就開始展開尋根以及正名運動。經過長期的努力，緊接著邵族之後，中華民國行政院原住民族委員會也在2002年12月25日正式認定噶瑪蘭族為原住民的第11族。噶瑪蘭族文化的傳承與保存，自此步入一個新的紀元。
                                        事實上，噶瑪蘭族語至今依然被該族族人保存使用，同時他們也已經編印噶瑪蘭語辭典、語法等教材，做為學校鄉土教學的材料。噶瑪蘭族不僅族群意識強烈，宗教信仰以及文化祭儀也都十分鮮明。
                                    </li>
                                </ul>
                            </font>
                        </ul>

                    </div>
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