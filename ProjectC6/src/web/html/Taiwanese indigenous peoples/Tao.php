<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>

    <title>原住民介紹-達悟族</title>
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
                                    <h1 class="musictop">達悟族</h1>
                                    <ul style="margin: 10px;">
                                        <li style="font-size: 20px;">
                                            源於日本人類學家鳥居龍藏在1897年的調查報告，他在報告中將蘭嶼稱為雅美（Yami），是台灣南島語系唯一分布在台灣離島的一支民族，分布於台灣本島東南外海的蘭嶼上，人口約四千餘人，語言為達悟語，達悟族是海洋民族，以捕魚為主要產業，並有飛魚祭等歲時祭儀，蘭嶼在1877年起進入清代有效控制範圍內，但在1903年日治時期時方有國家機構的建制。1998年，主管台灣原住民事務的行政院原住民族委員會在雅美族人的呼聲下將蘭嶼原住民的族群名稱改為達悟族（Tao）
                                            <br>由各家族的長老為意見領袖的父系社會，這些家族也構成達悟族最重要的社會單位：漁團組織。達悟族是中華民國原住民族中唯一以漁業為主的民族，但也會種植小米、芋頭等作物。一般來說，漁業是男性的任務，而農業則由女性負責，並劃有漁團組織、粟作組織、灌溉組織等經濟工作單位。每年的3－6月是達悟族的重要祭典：飛魚祭。達悟人視飛魚為神賜予的禮物，在飛魚季期間，各漁船船員需住在共宿屋內，在這期間只捕飛魚，不捕其它魚種，而所有的漁獲皆與部落共享，因為達悟族人相信若在飛魚祭結束前將漁獲分食完畢，來年就會有源源不絕的收獲。
                                            <br>2005年6月，行政院原住民委員會為了保護達悟人的飛魚文化，規定每年3－6月蘭嶼外海6海里內的海域禁止10噸以上漁船捕魚，也禁止使用流刺網、追逐網，或毒魚、炸魚等手段。
                                        </li>
                                        <li style="font-size: 20px;">血緣和語言:
                                            <br>根據考古與語言學的理論，認為臺灣是南島語族的故鄉，南島語族的擴散是由臺灣經蘭嶼、巴丹島，到達菲律賓，再由東南亞島嶼遷往大洋洲。達悟族人與巴丹島人雖然在語言與文化上要較達悟族人與臺灣原住民相似，但在遺傳上，達悟族人卻與臺灣原住民相近。[4]

                                            <br>日本學者移川子之藏於19世紀考據，蘭嶼和巴丹兩邊居民的禮儀、穿著、藤帽、髮型等特徵，及主食、烹飪方法與民俗語彙，都極相似，研判屬同一族群。美國人類學者Dezso&emsp;Benedek更從兩地墓葬都採「甕棺葬」，認為兩地應有共同起源，只因後來蘭嶼與巴丹被劃為兩個國家而被迫分隔。蘭嶼第一位博士生、國立臺灣師範大學地理所博士生董恩慈說16世紀以來，巴丹島歷經西班牙、美國、菲律賓等國治理，西化程度較高，蘭嶼則相對位處台灣外海邊陲，保留較多傳統文化。
                                        </li>
                                        <li style="font-size: 20px;">
                                            經濟:
                                            <br>林業

                                            <br>欖仁舅是拼板舟的主要材料
                                            <br>蘭嶼位在台灣東南海域，與菲律賓隔巴士海峽相望。此一地理位置除了造就蘭嶼達悟族人和巴丹群島的密切聯結外，也對生物多樣性產生影響。這是因為蘭嶼屬於生物地理學上的「東洋區」和「澳大拉西亞區」間的過渡帶，所以有豐富的物種組成。

                                            <br>達悟族人的林業使用可分為果樹栽培和建材用林兩種，主要是用在食用與建材、造船上。達悟族建材用木的使用包括房屋建設、造船、薪木和漁架等。這些建材用林多分布於溪谷或山腰上，因為該處相對濕潤，林木可以長得又快、又大，而且堅硬。而樹種則包括欖仁舅（Guettarda
                                            &emsp;speciosa）、綠島榕、欖仁（Terminalia&ensp; catappa&ensp;L.）、賽赤楠（Acmena&ensp;
                                            acuminatissima）等，培育以天然生長為主，但也會為它們除草、修枝，並砍除周邊的非目標樹種。如果有天然幼苗的長成，則會受到悉心照料，以確保樹種的繁衍優勢。

                                            <br>達悟族的果樹通常種植在聚落附近，樹種以當地原生物種為主，例如番龍眼（Pometia&ensp;
                                            pinnata）、異色柿（Diospyros&ensp;
                                            discolor）、大葉山欖等，但也有引進椰子、檳榔、蔞葉等植物栽培。這些果樹通常種植在高大喬木下的樹蔭，等到果樹長大後才砍伐喬木，避免妨礙果樹生長。為了維護果林，達悟族人會為其除草、修枝。除非果樹已經自然死亡，果樹林不會輕易採伐，而為了縮短老樹枯死、新樹尚未長成間的空白，這些果樹在長成後，幼苗就會立刻種下，這樣當老樹需要代謝時，新樹已經長到可以取代老樹的年齡。

                                            <br>達悟族的林業使用對生態環境的復育是有益的，因為這樣利用方式可以使土地或山坡地長期保持在擁有植被的情況下，而不會因為林地裸露導致侵蝕或土石流。在現代文明的改變下，蘭嶼的木材使用量大幅減少，房屋建材也改為鋼筋水泥，傳統林業依賴拼板舟的建造繼續維持，雖未過量，但也應注意樹林更新的問題。
                                        </li>
                                        <li style="font-size: 20px;">
                                            起源起源:
                                            <br>石生與竹生說
                                            <br>在「石生與竹生說」中，天神將一塊石頭扔到一座叫「Jipaptok」的山上，從石頭中迸出一個男嬰，喝露水長大。當他下山到「Jimaggigit」時，遇到另一個從竹子迸出來的男孩，這才知道原來世界上還有其他人的存在。兩個男孩從此便生活在一起，直到有一天，兩人的膝蓋都腫了起來。從石生男孩的右膝中生出了一個男嬰，竹生男孩的左膝則生出一個女嬰，兩個嬰兒長大後便結為夫婦，在生下4個瞎眼的孩子後，第5個孩子才與別部落的女孩結婚，逐漸繁衍出達悟一族。

                                            <br>石生與竹生說神話的版本，在諸部落中皆略有差異，從石生與竹生人的性別、生子方式到結尾皆有所不同，例如紅頭部落的版本裡，兩名男孩是用陽具摩擦膝蓋生子的，然而事實上男性的生殖器幾無可能碰觸到自己的膝蓋，因此可以看出初民的生殖崇拜。在部份結尾中「互換伴侶生子」可解釋成是告誡子孫需避免近親繁殖，以免生下畸型的孩子。至於石、竹生人，則是取其永恆、堅硬之意，寄託對種族繁衍生生不息的願望。

                                            <br>受神話影響，達悟族人尊敬石頭和竹子，但並不崇拜。石竹是達悟建築的重要象徵物，例如在屋外或飛魚祭儀式時放幾塊橢圓形獨石，被認為可帶來好運（Bannaligan），而這樣的習俗已被證實是由巴丹群島傳過來的，更說明達悟族與巴丹群島的緊密聯結。

                                            <br>神造說
                                            <br>在「神造說」中，傳說蘭嶼和小蘭嶼一樣原本都是無人島，但有一天，從海上漂來一隻密封木箱，擱淺在海岸上。從木箱裡走出天神創造的人，他們就是達悟人的祖先[21]。神造說來自椰油、漁人、朗島等部落，屬於海岸起源說的一種。
                                        </li>
                                        <li style="font-size: 20px;">
                                            文化:
                                            <br>飲食
                                            <br>達悟族一天吃兩餐，分別是出門工作前的早餐（Zomiag）和傍晚回家時的晚餐，午餐（Magza）只在節慶、招待賓客或生病時，因為有留在家中才吃。對達悟族人而言，飲食由主食（Kanen）和副食（Yakan）組成，其它佐料還有幫助吞嚥的湯水，餐後則享用檳榔和紙菸。主食和副食相輔相成，缺一不可，如果只有主食或副食，則只能稱為點心，而非正餐。

                                            <br>主食的種類一般包括水芋（Soli）、甘藷（Wakay）、旱芋（keytan）、山藥（Ovi）和一種叫「Patan」的塊根植物，小米（Kadai）則是祭儀上相互饋贈的禮物。隨著現代文明進入蘭嶼，稻米(Mogis)也成為達悟族人的主食之一，被部份家庭接受。副食的種類多樣，以各類海鮮為主，但也會食用藻類、人工栽培的水果或山野狩獵採集來的野味和野菜，例如陸蟹、白鼻心、山蘇等。豬、羊、雞只在祭儀時享用，一般人家則以雞為主；水果則包括番龍眼(Ciai)、毛柿(Kamala)、香蕉(Vineveh)、甘蔗(Onas)、香瓜、鳳梨等，但都是作為孩童的零食，而不會出現在餐桌上。

                                            <br>然而達悟族的副食還是以魚類為主，分成「春天魚」（Among &ensp;no&ensp; rayon）和「近棲魚」（Among
                                            &ensp;no&ensp;
                                            karawangan）兩種，春天魚是飛魚、鬼頭刀等洄遊魚類，在達悟族人心中是神聖的魚種，因為他們相信這些魚來自天界；近棲魚在是在春天魚的季節以外的時間捕到的魚，也包含一些生長在礁岩上的魚種。這些魚種又有「好魚」（Oyod）、「壞魚」（Zahet）、「老人魚」（Kakanen&ensp;
                                            no
                                            raraker）之分，好魚無論性別都可以食用，壞魚只有男性可以食用，老人魚則只有年長男性可以食用。但日常生活中，因為好魚難以捕捉，一旦捉到就會優先給女性食用，一個家中負責捕魚的男性如果無法抓到好魚給家裡的女性食用，妻子甚至可以拒絕行房，因為丈夫沒有盡到提供食物的責任。如果餐桌上出現壞魚時，男性需要以竹籤（Tatazi）享用，以免污染到主食[30]。此外，孕婦（Manili&ensp;
                                            so&ensp;
                                            kanen，意思即「慎選食物」）對食品種類的選擇需要特別謹慎，只要海鮮的長相怪異、名字不吉利就不應食用，否則一旦生下有胎記的孩子，就會被視為是吃下了不潔的食物所致。

                                            達悟族人不會讓彼此陷入飢餓，例如當負責供應食物的男主人和女主人生病或生產，或對年長者已無法自行取得食物時，親友會主動贈送食品給這些家庭。當主人有能力回饋時，會主動幫忙親友建造房屋、開闢田地或造船等勞務性工作。這種相互餽贈可以被視為是經濟型態的一種，例如有些魚特別難捕捉，就可以透過以物易物的方式交換。

                                            <br>工藝


                                            <br>擁有冶金工藝技術，銀盔的製作便是代表。根據研究，製作銀盔的原料來源主要是觸礁沉沒商船上的銀幣或透過交易所取得的銀元。鳥居龍藏在明治三十年（1897年）調查紀錄中寫道：「當船靠岸的時候，島上的『蕃人』爭先恐後似的駕著獨木舟（Canoe）過來，每一個人都喊著：Peark！Peark！（銀）…為什麼喜歡銀幣呢？拿銀幣作什麼用途呢？結果我查出了原因。『土人』一旦有了銀幣，就放進陶甕裡燒熱，然後拿出來用石頭打成薄片，以製造男子的頭盔、女子的頭飾、頸飾、臂飾等」。

                                            <br>圖騰


                                            <br>達悟族圖騰大多出現是在拼板舟上，而每個傳統圖騰又擁有自己所代表的意義。[34]

                                            <br>達悟三原色
                                            <br>黑色：取自鍋底的黑灰或木炭鎖鏈燒成的塗料。
                                            <br>白色：采自夜光貝、白珊瑚、石灰岩以及各類白色貝類研磨成粉末的塗料。
                                            <br>紅色：取自蘭嶼山上的天然紅土。
                                            <br>達悟族傳統圖騰
                                            <br>船眼：船眼位於拼板舟船首與船尾兩側，拼板舟上最重要的就是船眼，如果沒有要雕刻花紋圖騰的話還是得把船眼刻上去，通常由三或四個同心圓組成，環狀的三角圖紋有八、十、十二、十六並無定數組成，象徵船的眼睛有指引方向的意思也有驅邪招福，驅逐海怪的作用，讓船隻在大海航行時免於災難。
                                            <br>波浪紋：波浪紋位於船身兩側，照海洋的波浪造形演進而來，刻於船舷周圍紅、黑色的波浪紋具有避邪的功用。
                                            也有另一個說法是是在模仿羊角的樣子，同時山羊在達悟族具有「財富」的象徵。
                                            <br>人形紋：相傳是達悟族天神創造了石神和竹神兩位男性神，並且生出男女為現在的達悟族人們，蹲踞狀代表祖先的意思，也代表了家族世代的英雄，也是各家族的家徽，每個家族的家徽都皆為不同，不同的人形紋代表不同的家族，但是現今達悟族的人形紋幾乎都統一了，但是代表的意義卻是相同。
                                            <br>三角紋：刻在船頭上，傳說是 VOLAVOLAW 的鳥飛翔振翅的樣子，也可能是海浪造形。
                                            <br>菱形紋：刻在船身的幾何紋路，有避邪的功用。跟三角紋的意義是相同的，只是不同家族會運用不同的紋路。
                                            <br>禁忌
                                            <br>達悟族禁忌非常多且繁複，舉例如下：

                                            <br>棋盤腳：被達悟族視為禁忌物、魔鬼樹，絕不能帶入房舍。又例如達悟族人捕獲一船飛魚，但有人在旁說了達悟族語棋盤腳這個字，那整船的飛魚便被視為不祥，可能會被整船丟棄。
                                            <br>飛魚季時不得觸摸拼板舟，女性更是一概不准，認為會影響漁獲。
                                            <br>飛魚季期間，部落灘頭禁止從事任何水上活動。
                                            <br>女性嚴格禁止登小蘭嶼。
                                            <br>桔子不可帶至海邊，尤其是飛魚季時。
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