<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>

    <title>原住民介紹-泰雅族</title>
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
                                    <h1 class="musictop">泰雅族</h1>
                                    <ul style="margin: 10px;">
                                        <li style="font-size: 20px;">
                                            族群分類:
                                            <br>以下為王梅霞《泰雅族》一書中提出的泰雅族族群分類：


                                            <br>魚筌（三井物產株式會社舊倉庫藏）

                                            <br>汲水竹筒（三井物產株式會社舊倉庫藏）

                                            <br>賽德克亞族太魯閣群奇卡拉汗社（花蓮縣秀林鄉富世村）佩刀（國立臺灣博物館藏）

                                            <br>賽德克亞族太魯閣群披風（國立臺灣大學人類學博物館藏）
                                            <br>泰雅（Tayal）亞族：
                                            <br>賽考列克（Sekoleq）系統：
                                            <br>馬卡納奇（Makanaji）亞系統 ：
                                            <br>福骨（Xalut）群
                                            <br>石加路（Shyakalo）群
                                            <br>金那基（Mknazi）群
                                            <br>大嵙崁群
                                            <br>南澳群
                                            <br>馬列巴（Malepa）亞系統：
                                            <br>屈尺群
                                            <br>大嵙崁群
                                            <br>卡奧灣（Gaogan）群
                                            <br>溪頭群
                                            <br>司加耶武（Sqoyaw）群：包含沙拉茅（Slamaw）群。
                                            <br>馬里闊丸（Malikoan）亞系統：
                                            <br>馬里闊丸（Mrqwang）群
                                            <br>馬武督（M'utu）群
                                            <br>澤敖列（Tseole）系統：
                                            <br>馬巴阿拉（Mabaala）亞系統：
                                            <br>南澳群
                                            <br>馬巴阿拉群
                                            <br>萬大群
                                            <br>馬巴諾（Mapanox）亞系統：
                                            <br>汶水群
                                            <br>北勢群
                                            <br>南勢群
                                            <br>莫拿玻（Menebo）亞系統：
                                            <br>南澳群
                                            <br>莫里拉（Mererax）亞系統：
                                            <br>鹿場群
                                            <br>大湖群
                                            <br>加拉排（Kalabai）群：廣義包含美卡蘭（Mekarang）群。
                                            <br>賽德克亞族：
                                            <br>太魯閣群
                                            <br>道澤（Toda）群
                                            <br>德克達雅（Tgdaya）群
                                        </li>
                                        <li style="font-size: 20px;">
                                            物質文化:
                                            <br>身體藝術
                                            <br>紋面
                                            <br>在臺灣原住民族中，紋面（patas）是泰雅族特有的文化，經過紋面者才可論及婚姻。相傳上古時代有姊弟二人，弟婚期將至卻無女可娶，有一天姊向弟說：「我已經替你找到一個女人，明天就在雙叉路口的樹下等你。」隔天姊先用墨紋臉，再前往約定的地點，弟認不出她就是姊，遂將他帶回家，彼此結為夫妻後繁衍後代，這成為必須經過紋面才可婚嫁的由來。

                                            <br>一般在約十五、六歲之後，身體發育漸趨穩定後就可進行紋面。無論男女皆在額頭刺一至七道縱紋（因地區而異），男性須有成功的獵首經驗，才可在下巴刺縱紋；女性則須織布技術熟練，並已有月經，可以傳宗接代，才可環繞雙脣並往左、右耳際刺橫紋。紋面師（ppatas）皆為女性，且世代相襲。紋面時以敲槌（ttucing）敲打刺針（atuk，以黃銅針或縫衣針整排束起製成），刺入皮膚在臉上留下傷口，將流出的血拭去後，再塗抹煙灰或火藥以留下顏色，並重複相同的動作三到四次，使顏色更加明顯。術後以一疋布或一隻豬做為謝禮。

                                            <br>傳統泰雅族社會嚴禁婚前與婚外的性行為，認為青年若觸犯禁忌，必將遭到祖靈（utux）的懲戒，導致紋面後的傷口發炎難以癒合，或是施刺後的花紋模糊，顏色黯淡不清。紋面師在施刺之前，會詢問受術者是否曾有過婚外情的行為，如果答案是肯定的，必須向祖靈祈禱認錯後再施刺。若女性刺紋花紋清楚，色澤黝黑，出嫁時可向男方家族多索要聘禮。紋面的習俗直至日治時期初期才被嚴格禁止。

                                            <br>穿耳
                                            <br>泰雅族無論男女皆穿耳洞、配戴耳飾。兒童自五至六歲開始穿耳洞，逐漸更換不同直徑的管狀耳飾，以擴大耳洞。耳飾（qingay）採細竹管截斷而成，可分為有紋飾與無紋飾兩種，無紋飾者為在平日配戴，以防止耳洞密合；有紋飾者布滿幾何線文雕刻，並鑲嵌木槲草皮以為裝飾，有時前方加上紅色毛線絨球，婦女則常與長貝板綴飾同時配戴。

                                            <br>拔牙
                                            <br>泰雅族男女皆在成婚前，舉行拔牙（smapa）儀式，拔去上門齒兩側兩顆牙齒，或連同上犬齒共拔去四顆牙齒。

                                            <br>巫術占卜
                                            <br>鳥占
                                            <br>從前人們外出時，並無可資判斷吉凶之物，因此時常得病、受傷，甚至死亡。於是眾人商量之後，決定尋找一種派斷吉凶的方式。傳說有一次，烏鴉與ssiliq（鳥名）進行般石過河的比賽，並約定：「我們之中堪任此事者，就來擔任人們吉凶的判斷者。」烏鴉首先舉起石頭，但是石頭動也不動；後ssiliq立即將石頭輕易舉起並搬過河，放在對岸。因ssiliq的獲勝，從此人們遠行時就以ssiliq的飛行方向與叫聲來判斷吉凶。

                                            <br>竹占
                                            <br>泰雅族的竹占（hamungap）以巫珠（tsriyanan）與細竹管（nawi）作為道具，被視為與祖靈（utux）溝通的媒介，有治病、解決糾紛或祈求等目的。施術過程中，女巫（phgup）持細竹管蹲下後以膝蓋夾住保持水平，再將一顆管狀珠子平放在細竹管上，女巫一邊念咒語，一邊用手向珠子搧風，如果珠子停住不滾動，則代表疾病可治癒或問題可獲得解決。同樣的巫術也出現在賽夏族的部落，由於泰雅族與賽夏族皆無製作管狀珠的技術，故巫珠可能是來自於平埔族人，類似的管狀珠在平埔族中常串成項鍊作為裝飾使用。

                                            <br>音樂舞蹈
                                            <br>口簧琴
                                            <br>主條目：泰雅族口簧琴
                                            <br>口簧琴（lubo）多用於獨奏，據傳在過去為青年表達情意時所吹奏。口簧琴以一截長約10公分的竹片作為琴身，中間穿有長孔，安置細長舌狀的竹或銅製簧片，簧片一般為三片，最多可達六、七片，琴身兩端鑽孔穿繫麻繩。吹奏時左手持琴置於唇間；右手拉扯右端麻繩，依靠震動發出聲響，隨口腔形狀變化可產生不同的音調，簧片的寬窄厚薄不同則可產生不同的音階。

                                            <br>竹藤編織
                                            <br>泰雅族的竹藤編織有鏤空背籃（kagisi'）、密閉背籃（ya'abun）、背袋（babaha'）、圓箕（baluku'）與篩子（garagiran）等製品。竹材以於三至四月間，採集筍禾剛脫落，剛長葉的新竹為最佳。以製作中型圓箕為例：先以小刀（balitux）將竹材削成約350支、長約2尺5寸的竹篾子（raruma'），再將竹篾子以橫、直向相互編織成大片的四方形，將邊緣修成圓形後，最後以黃藤（awani'）收邊。

                                            <br>藤帽
                                            <br>藤帽（kabobo）為男子外出時所配戴，除保護頭部之外，也具有美觀與展現身分的作用。藤帽最普遍的形式為無邊碗型，偶爾也會出現附加帽簷的形式。善於打獵者可將藤帽外罩熊頭皮或豹皮，獵首成功者則在藤帽前額中央鑲縫稱為「mayon」的白色圓形貝板。

                                            <br>圓箕
                                            <br>圓箕（baluku'）有多種功能。在婚禮時用以放置聘肉（sapat），再平均分給眾人共享；在舂米時或收割後，利用風力在稻穀中篩出稻糠，做法為在清晨吹落山風時，將稻榖置於圓箕內，舉起後背對著風，緩慢將稻榖倒下來，較重的穀粒會落在近處，較輕的稻糠則會落在遠處，穀粒與稻糠因而分離，這個動作稱為「tamapus'」。
                                        </li>
                                        <li style="font-size: 20px;">生命禮俗:
                                            <br>生育
                                            <br>泰雅族嬰兒出生十至十二天後，便由產婦將嬰兒初次抱出室外，舉行祓禳儀式。先由產婦懷抱嬰兒蹲踞室內門邊，以布蓋住嬰兒頭部，女巫（phgup）再手持一塊燃燒的樟木，口念咒語在產婦頭上一尺多高處祈福，後再將木柴丟棄，由產婦抱嬰兒至屋外，以手指天再重複念一次咒語。舉行過祓禳儀式後，即擇定日期，邀請親戚來家中飲宴，親戚則準備布疋與食物相贈。其中必須為產婦的兄弟與從兄弟準備一份禮物，稱為「makalaus」，以禳除因姊妹生產而招來的不潔，以給予長兄的禮物最為貴重。以大嵙崁群為例，對於產婦的長兄，需贈貝珠裙一條，其餘兄弟則贈布一疋。

                                            <br>人名
                                            <br>泰雅族採親子連名制，一般情況下以父名連於己名之後，但若父早逝或其他原因，亦可連母名。如：父名為「Temu
                                            Batu」，若子名為「Wadan」則其全名應為「Wadan
                                            <br>Temu」，孫若名「Dakun」則其全名為「Dakun Wadan」，曾孫若名「Walis」則其全名為「Walis Dakun」，以此類推。

                                            <br>喪葬
                                            <br>根據傳統，泰雅族自然死亡者舉行室內葬，意外死亡者一般就地掩埋。室內葬時先在死者床下挖洞，再由三個人分別抬著屍體的左、右與中部位將之埋葬。埋葬時以屈肢葬的方式，同時為死者穿上傳統服飾，並在板子夾層放置死者生前用過的刀。負責埋葬死者的人先在室內脫去衣服，並由專門在死者床邊牆壁所鑿的洞出到室外，洗手後再由同一個洞回到屋內，馬上將洞封好後最後從大門進出。死者埋葬後家屬繼續在該房子生活，直到已無空間可以埋葬死者再搬遷，必要時可將竹材做的牆壁拆開，以增加室內葬的面積。

                                            <br>男人在世時必須大量獵取山豬、鹿等獵物與敵人首級，這些獸類與敵人在其死亡後會成為其隨從，男人前往靈界（utuxan）時不僅聲勢浩大，在靈界的祖先也會以同等的陣勢迎接。在抵達靈界前，會經過一個大池沼，其上架有靈橋（hongu
                                            utux），只有曾經獵首成功的男人與善於織布的女人可平安通過此橋，其他人則會掉到充滿糞便的橋下（賽德克亞族則認為橋下有螃蟹會吃人）。</li>

                                        <li style="font-size: 20px;">
                                            起源傳說:
                                            <br>人類始祖
                                            <br>賽考列克系統
                                            <br>相傳上古時代，位於賓斯博干（Pinsbkan）的大石突然裂開來，首先生出一男一女兩人，其後又生一人（性別未知），後出生的那人向先出生的那對男女說：「請為我洗一次澡，如此我們大家都將長生不老。」那對男女不肯為他洗澡，他便跳回大石的裂縫中，並說：「你們會遇到生老病死等不幸。」此後人們便有了生老病死的現象。

                                            <br>澤敖列系統
                                            <br>相傳上古時代在大霸尖山八分高的地方，有一塊突出的大石，其內潛藏著一男一女，烏鴉與ssiliq（鳥名）得知此事，便每日至此祈禱人類出現。一天，ssiliq的祈禱奏效，在一聲巨響下大石裂為兩半，從中出現一男一女。這對男女至青春期時，對男女性交之事仍全然不知，最初嘗試兩眼相接，但仍不能滿足情慾。後陸續以鼻、耳、手與腳進行交合，但皆失敗。這時突然看見兩隻金蠅正在交配，兩人依樣模仿（一說金蠅停於女子私處，兩人乃發現彼此構造的不同，獲得性交方法的提示），從此方能繁衍子孫。

                                            <br>賽德克亞族
                                            <br>傳說上古時代，白石山牡丹岩（bunohon）長有一棵大樹，此樹半邊為木質，另一半邊卻由岩石所構成。一天，從樹幹裡走出男女二神，此二神生下很多子女，子女又繁衍很多後代。當時只要將一粒小米切成幾份，烹煮其中一份，就能得到一鍋子的飯；拔下野豬的一根毛髮，切成幾段後投入鍋中煮，便能煮成滿鍋子的肉。幾代人後因人口增加，牡丹岩這個地方太小而不夠居住，族人因而四散他遷。但從此人們必須終身勞動與農耕，而不得閒暇。

                                            <br>生命起源
                                            <br>上古時代有一棵參天巨木，枝葉茂密而遮天蔽日。有一天，有種東西於樹幹下方誕生，以四肢行走，體外披著一層毛皮；接著，又有一樣東西自樹幹下誕生，形狀如樹木，具有兩條根與兩根樹枝，頂上長有一顆瘤，後樹幹上方再長出兩種東西：一種外型細長，在地上爬行；另一種東西很少在地面活動，經常在空中飛行。後人將這四種東西分別稱為獸類、人類、蛇類與鳥類。

                                            <br>射日神話
                                            <br>相傳從前天上曾有兩個太陽，一個往西邊落下，另一個同時就由東方升起，兩者輪流升降。在烈日下河流乾涸、作物歉收，且因只有白晝而沒有夜晚，人們持續不停工作，而沒有固定的休息時間。眾人決定派人去東方射下其中一個太陽，但第一批派出的人在還未抵達日出之處即死亡，於是第二批派出的人決定各自背負一名嬰兒，並攜帶小米與橘子的種子沿途播種，原先的成員去世，所背負的嬰兒長成後繼續前進，最後僅三人到達目的地。他們拉弓射向太陽，太陽濺出大量的血，被射中的太陽光芒減弱成為月亮，血滴灑遍天空化為恆星。從此有了夜晚，人們也開始有固定的睡眠時間。

                                            <br>洪水傳說
                                            <br>從前，人們皆居於平原，一天突然發生大洪水，逼得人們遷徙至山上（據說為大霸尖山）。洪水久久不退，人們嘗試很多方法平息水患，先將一條狗丟進水中，但沒有效果；再將一人丟入水中，同樣沒有效果；最後將一對近親性交的兄妹丟進水裡，洪水馬上退去。洪水退後形成山與溪谷，這兩位被丟入水中的兄妹形成了大安溪與大甲溪，祖靈（utux）為懲罰他們永遠不得結合，便讓這兩條河無法交會。
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