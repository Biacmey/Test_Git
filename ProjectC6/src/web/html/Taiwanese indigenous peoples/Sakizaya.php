<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>

    <title>原住民介紹-撒奇萊雅族</title>
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
                    <div class=" col-lg-9">
                        <div>
                            <ul style="font-size: 25px; color: black; margin: 30px;">
                                <font face="DFKai-sb">
                                    <h1 class="musictop">撒奇萊雅族</h1>
                                    <ul style="margin: 10px;">
                                        <li style="font-size: 20px;">
                                            舊譯奇萊族、撒基拉雅、薩克扎耶或沙基扎雅，是台灣原住民的一個族群，世居於花蓮奇萊平原。<br>
                                            台灣清治時期，因欽差大臣沈葆禎開山撫蕃政策，與清朝軍隊發生衝突，在加禮宛事件（達固湖灣事件）中，撒奇萊雅族遭大舉屠殺，倖存者擔心遭致追殺便隱姓埋名躲藏於阿美族部落。當時因身藏阿美族部落，日治時代日本政府無從辨識其族群，將其列為阿美族的一支。1990年起經過17年正名運動，終於在2007年1月17日由中華民國政府官方合法承認其為台灣原住民族
                                        </li>
                                        <li style="font-size: 20px;">
                                            撒奇萊雅族世居於花蓮奇萊平原（即花蓮平原），勢力範圍約在立霧溪以南，木瓜溪以北，曾為花蓮平原上最大的原住民族群。目前有幾個主要部落分布在花蓮，分別是位在花蓮市國福里撒固兒部落及國慶里達固部灣撒固兒部落、新城鄉北埔復興部落、瑞穗鄉馬立雲部落、壽豐鄉水璉部落，以及豐濱鄉磯崎部落。主要根據地在今日四維高中附近，稱作「達固湖灣」（Takubuwan），清代時稱為「竹窩宛」。
                                            <br>一般外族開始接觸撒奇萊雅族，會將族名「Sakizaya、Sakilaya」誤以為地名，通常以諧音「奇萊」稱呼。因此，所在地的平原稱作「奇萊平原」，而位於附近中央山脈的高山也稱作「奇萊山」。包括西班牙、荷蘭、清朝、日本、中華民國的地圖與文獻均予沿用。
                                        </li>
                                        <li style="font-size: 20px;">
                                            歷史:
                                            <br>西班牙統治時期
                                            <br>1636年，在西班牙統治的文獻紀錄上已有撒奇萊雅族。當時，西班牙統治臺灣北部及東北部，在此區域劃分三省，其中即包含了撒奇萊雅族居住地。

                                            <br>荷蘭統治時期
                                            <br>1638年荷蘭東印度公司探險隊於東部探金，東印度公司派兵進逼，並教訓懲治不配合之部落，撒奇萊雅族包含其中。

                                            <br>清朝統治時期
                                            <br>撒奇萊雅族在這段時期取得奇萊平原領導地位。但為了保衛既有領域，與清軍發生多次大規模武裝衝突。

                                            <br>加禮宛事件
                                            <br>主條目：加禮宛事件
                                            <br>1878年，清帝國入侵台灣時，在台灣東部遭遇撒奇萊雅族強烈抵抗，為剿滅撒奇萊雅族，清軍火攻部落，稱為「加禮宛事件」（達固湖灣事件）。激戰後，撒奇萊雅族大頭目古穆·巴力克（Komod
                                            <br>Pazik）及其妻伊婕‧卡娜蕭（Icep
                                            Kanasaw）慘遭清軍凌遲處死以殺雞儆猴。倖存的族人為了躲避追殺，隱藏自己的文化和語言融入阿美族的生活中。

                                            <br>日本統治時期
                                            <br>因撒奇萊雅族人鑑於對昔日衝突事件受創的記憶刻骨銘心，選擇隱姓埋名，日本對臺灣原住民進行民族分類，而被歸為阿美族，依地理歸類而稱為奇萊阿美。

                                            <br>中華民國在台灣時期
                                            <br>1970年代起撒奇萊雅族長老帝瓦伊·撒耘校長有感於撒奇萊雅族即將失去自我認同，積極從事撒奇萊雅族文化的收集。1990年7月，帝瓦伊·撒耘（漢名：李來旺，1931年10月13日-2003年9月24日[8]，生平曾以40多年時間蒐集撒奇萊雅語及撒奇萊雅史料），於花蓮恢復舉辦祭祖大典。帝瓦伊·撒耘於2003年於慈濟醫院過世，刺激族人決心重建自己的文化。

                                            <br>2004年7月10日開始民族正名運動。並於2005年10月13日向行政院原住民族委員會正式申請。根據原住民族委員會委由國立政治大學民族學系進行研究調查認為撒奇萊雅族為單一民族，其語言與阿美語無法溝通，文化和生命哲學都與阿美族不同，同時族群區別明確，未被阿美化或漢化。

                                            <br>2007年1月17日獲得中華民國政府的官方承認，成為第13個臺灣原住民族。</li>
                                        <li style="font-size: 20px;">
                                            文化:
                                            <br>語言:
                                            <br>撒奇萊雅語為台灣撒奇萊雅族人所使用的語言，為台灣南島語言之一種，屬於南島語系的次語群。亦歸類為台灣南島語第6群，與阿美語、以及噶瑪蘭語並列。
                                            <br>目前台灣原住民撒奇萊雅語認證考試只有一類語群「撒奇萊雅語」。

                                            <br>祭典
                                            <br>播粟祭
                                            <br>播粟祭（mitway）共舉辦7天：

                                            <br>第一天（palili）：不工作，不吃蔬菜及魚，衹以食鹽拌飯。淨身不洗澡的祭主（Cilisinay）殺豬奉神，召集全部祭司（malapaway）舉行帕塞里儀式（pasayli）向瑪拉濤神（Malataw）祭祀祈求神明保佑部落安全幸福。
                                            <br>第二天（mitway）：開始進入播種期，每一戶都要請一位祭司至家中祭拜祖靈（odit no mama ato ina）祈求祖先保佑豐收。
                                            <br>第三天（molikuhpa』）：不吃蔬菜、魚和雞肉，但不限制豬肉、鹿肉等獸肉。同時準備播種。
                                            <br>第四、五天（misalasikuhpa』）：這兩天播完種子，不論男女均須盛裝播種，可以喝水。但是不能洗澡，甚至吃飯前也不能洗手，且直接以手抓飯吃，因為撒奇萊雅人認為將土洗掉種子就不會發芽。
                                            <br>第六天（palunges）：解除禁忌。全部落男子一起下溪捕魚。回來後進行親族團圓晚宴（malusulusu）。
                                            <br>第七天（mizuk）：出去獵鹿，將捕到的鹿連同小米送給祭主。
                                            <br>成年祭
                                            <br>頭目、長老及青年幹部開會決定每一個新年齡階級的組成，然後用雞、迪瓦斯器（diwas，一種祭祀用陶器）和酒向瑪拉濤神（Malataw）祭祀，最後正式成立新的階級。

                                            <br>豐年祭
                                            <br>慶豐收（patongi）：在收割小米前，全家人聚在一起到戶外喝酒、吃糯米飯，然後去砍先砍下臺灣山棕（balidas，嫩莖可以食用的野菜）的葉子用來綁在小米穗上，準備慶祝豐收。完畢後，每一戶準備糯米糕（tono』）、酒、檳榔迎接祭司，祭司會將這些食品分享給有親友剛去世的人家。
                                            <br>豐年祭（malaliki）：用木鼓敲擊並在瞭望台上喊叫集合，要參加豐年祭的年齡階級者要馬上到集會所集合。由頭目會交代舉行時間。預備階級者則在集會所練習跳舞。所有人都盛裝參與。第二天舉行盛宴（paklang，關於好事情的聚餐請客），全部落的人到河中捕魚，然後在家中吃糯米團，配著抓來的魚吃。
                                            <br>收藏祭
                                            <br>將收成的小米或旱稻（tipus）收藏，但是禁止讓小孩子看到也禁止沒有下過田耕作的人碰觸。完成之後做糯米糕，此時，只能吃樹豆和豬肉，做好的糯米糕則用來祭拜稻神。
                                            <br>年終時，每戶人家須將當年狩獵物全部拿出來烹煮，並和部落的人共同分享，迎接新年開始。
                                            <br>獵首祭
                                            <br>早年撒奇萊雅族有馘首（Mangayaw）習俗，但主要意義在於復仇。因為太魯閣族領域就在撒奇萊雅族居住地北邊，撒奇萊雅人時常被太魯閣人殺害並取下頭顱。所以，為了報復，撒奇萊雅族會組成獵首隊北上太魯閣族勢力範圍內獵人，並取回人頭獻給頭目。頭目會舉行獵首祭典，向瑪拉濤神（Malataw）祭祀。在祭祀完後，將獵得的人頭拿到部落外埋藏。

                                            <br>巴拉瑪火神祭
                                            <br>2006年7月1日，撒奇萊雅族在停辦火神祭（Palamal）128年後，在花蓮市國福部落恢復舉辦。火神祭之前祭「歲時祭儀」訂於每年十月的第一個週五為慶祝日，當日會進行部落年齡階級訓練以及繞境儀式。

                                            <br>巴拉瑪火神祭與傳統豐年祭不同，為撒奇來雅族後人對祖先的追思祭典。 祭典中共有七道法禮，並以紅、綠、藍、白、黑五色使者祈福。
                                            <br>紅色使者以紅花在額頭開啟靈魂之眼，迎接火神，傳承智慧； 綠色使者以刺竹除穢，藉由刺竹拍打，去除厄運及晦氣；
                                            藍色使者以酒解除族人心靈與智慧的鳩渴；
                                            <br>白色使者代表火神光照，透過點燃火把，表示祖先交付的薪傳，並為族人點燃光明的未來； 黑色使者則以炭塗黑表示隱身，讓惡靈、厄運無法靠近。
                                            <br> 儀式中祝禱司為族人以酒沫蕉葉表示護身，而族人持火把巡禮繞圈，體驗及追緬先民落難情境。
                                            在祈福儀式後，舉行火葬儀式燃燒火神太花棺，祈求火神的靈魂能與族人一起浴火重生。
                                            <br>服裝
                                            <br>撒奇萊雅族穿土金色為主色的服裝，以刺竹及眼淚珠為墜飾，在服飾中呈現族群辛酸及不忘故土的決心。</li>
                                        <li style="font-size: 20px;">
                                            社會組織:
                                            <br>撒奇萊雅族與阿美族有相似的年齡階級（sral），每五年進階一次。男子從嬰兒到15歲為幼年級（wawa）；15歲到23歲為預備階級（masatrot），開始離家住宿在青年集會所（taloan），服從上一個年齡階級指揮並接受訓練；最後成為成年級（Matrot），授予年齡階級。此時，親友都會來祝賀。依傳統慣例，新加入年齡階級者須服勞役鋪修部落道路。同時為訓練人格意志，新加入者必須到山中學習獨立生活，自行在野外取得食物，至固定才召回部落。而且須以賽跑方式返回部落，落後者，長老們會使用雞爪、薑葉、咬人鳥或咬人雞處罰他。
                                        </li>
                                    </ul>
                                </font>
                            </ul>
                        </div>
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