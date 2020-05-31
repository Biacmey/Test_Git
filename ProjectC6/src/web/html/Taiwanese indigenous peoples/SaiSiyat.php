<?php
session_start();
echo $_SESSION["email"];
?>
<!DOCTYPE html>
<html>

<head>

    <title>原住民介紹-賽夏族</title>
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
                                    <h1 class="musictop">賽夏族</h1>
                                    <ul style="margin: 10px;">
                                        <li style="font-size: 20px;">
                                            舊稱薩斯特，古稱獅設族（閩南語：Sai-siat），為台灣原住民，高山族，分布在新竹縣和苗栗縣交界的山區。居住於海拔高度約五百公尺至一千五百公尺間，人口約六千餘人，是台灣原住民中文化瀕臨危機最深的一個族群，在邵族被承認之前是台灣原住民山區人口最少數的一族，分布範圍狹窄，且有被漢化的趨勢。以神秘完整兩年一度的矮靈祭聞名。<br>
                                            位於南庄鄉的賽夏族人受漢族客家人影響，多半會說客家語，稱為南賽夏；而五峰鄉的族人則受泰雅族影響，大多以說[泰雅語]為主，稱為[北賽夏]。是比較少人知道的原住民族。
                                        </li>
                                        <li style="font-size: 20px;">
                                            賽夏族的語言分南北二方言群，據語言學家推測是較古老的南島語言，可能出現在台灣的時間較早。為了適應當地社會環境，賽夏人大部份會講國語、甚至以此種語言為日常用語，自我族群的語言反而日漸淡忘，但因政府意識到各族群語言之重要性，開始推動「族語認證」。才逐漸恢復原本賽夏語的使用人數。
                                            <br>賽夏族早期也是事游耕、山地燒墾及山區狩獵。後來受到周圍強勢民族的壓迫，土地利用範圍逐漸狹窄，而轉變為定耕農業和林業的型態。面對強勢的外在文化，老一輩的賽夏人對於傳統祭典就更加珍惜，排除了許多外力使賽夏族的祭典完整地保留下來，是台灣少數能保有祭典原味的族群。賽夏族屬於父系社會，以地域和圖騰氏族為社會組織的基本構成單位。三五同姓（同圖騰）家族聚居為一聚落。聚落又聯合成一個村落，村落中同姓家族則組成各姓之氏族祭團，是各姓耕地漁區的互助單位。在聯合成一個部落聯盟，也就是現在所稱的南賽夏或北賽夏。
                                            <br>衣飾以麻布自己紡織為主，背心由兩張麻布二折而縫成，前後夾織花紋（在織的過程中，夾入不同色彩的織線，構成幾何形花紋）頭上有黑頭巾，上衣為長達膝部的對襟上衣，由兩幅麻布對折背部縫合，前面對開。腰裙男性為丁字帶，女性則以深色棉布製成的綁腿布，通常會在下緣綴以小鈴。其他還有臂、腿、腕、頭飾、腰飾等。　
                                            　
                                            <br>賽夏族的住家多位在山腹坡地或小台地上，因為居住在樹木和竹林盛產地，因此建築材料多為竹、木為主樹藤為輔。</li>
                                        <li style="font-size: 20px;">
                                            起源傳說:<br>
                                            傳說賽夏族的祖先發源於大霸尖山，洪水時期南下到達南阿里山附近，沿著海邊到達後來的居住地[來源請求]。賽夏族對外自稱「SaySiyat」古稱獅設族，分南北二群：北賽夏自稱（Say
                                            kilapa:）又稱大隘群，分布於鵝公髻山麓一帶；南賽夏自稱（Say
                                            walo'）又稱東河群，分布於向天湖山麓附近。現在北群主要分布新竹縣五峰鄉大隘村上大隘、高峰、茅圃及竹東鎮。南群分布較廣，有南庄鄉東河、向天湖、蓬萊、八卦力及獅潭鄉百壽村等地。<br>
                                            日治時代初期，伊能嘉矩將賽夏族歸類為道卡斯族的支族，從此開啟學界的爭論。1930年代中期，移川子之藏、宮本延人、馬淵東一等研究者，在《台灣高砂族所屬系統研究》中，推翻道卡斯支族的說法後，才確定賽夏族的定位。
                                            賽夏族起源傳說依居住地域而有不同的說法，當時尚無文字，都由長輩口傳：
                                            <br>東北部的賽夏族傳說：洪水發生時，僅存於大霸尖山（papakwaka:(泰雅語)，或'opoehnabo:ong）之夫妻為始祖，其子孫到大湖、苗栗後再向南庄，到目前居住之地。
                                            <br>中部的賽夏族傳說：與東北部一樣是從大霸尖山的洪水傳說開始，他們南下到達tamari'或tamei（據說是阿里山附近），再沿著海邊到達竹南、後龍一帶居住，按著再往山裡走，竹東、北埔部曾經居住過，目前分布於台灣北部中央山脈西側新竹五峰鄉五指山區與苗栗獅潭、南庄大東溪一帶，夾雜於泰雅族和客家人之間，深受漢人和泰雅族習俗影響。
                                            <br>西南部的賽夏族傳說：洪水傳說的地點為附近的加里山（raynaynora或pae'neh）後移至沿海的後龍附近，居住甚久以後逐漸往山腳地帶移住。
                                        </li>
                                        <li style="font-size: 20px;">
                                            手工藝:
                                            <br>&emsp;&emsp;&ensp;編織:東河社無袖長衣（複製品）（國立臺灣大學人類學博物館藏）
                                            <br>&emsp;&emsp;&ensp;編織材料大多是由婦女自行種植的苧麻，曬乾作為麻線，以織布機織成服飾。也會使用狩獵後經揉制處理的皮革。近代漸為棉布所取代，通常和漢人購買棉布製作。

                                            <br>&emsp;&emsp;&ensp;編織工具為水平背帶織布機，主要用具有：

                                            <br>&emsp;&emsp;&ensp;經卷：不織布時收藏其他工具和未完成的布料（三角形長筒狀，為整塊木頭中間挖空）。
                                            <br>&emsp;&emsp;&ensp;布夾：使用時放在腹部上，和背帶綁在一起（兩塊長方形木條組合而成，扣合面有凹凸的榫接點，用來夾緊經線或織好的布）。
                                            <br>&emsp;&emsp;&ensp;打棒：每穿入一條線便以打棒打緊使布更緊密（狀似刀兩端尖中間寬，用密度較高的木材製作）。
                                            <br>&emsp;&emsp;&ensp;隔棒：用來區分線的奇、偶線。
                                            <br>&emsp;&emsp;&ensp;固定棒：固定棒置於經卷後方，主要將經線固定。
                                            <br>&emsp;&emsp;&ensp;綜絖棒：綜絖棒則配合所織花紋，使用不同數量以分出梭路。
                                            <br>&emsp;&emsp;&ensp;桃花棒：主要是織花時挑起經線使用。（把竹子一端削尖而成）
                                            <br>&emsp;&emsp;&ensp;梭子：兩端都有凹口，讓緯線繞在梭子上面，穿梭入經線內（扁長的棒狀物，竹或木製作）。
                                            <br>&emsp;&emsp;&ensp;背帶：將布夾綁繫固定於腹部（粗麻線編成的長帶子）。
                                            <br>&emsp;&emsp;&ensp;紡織的過程步驟如下：種麻→抽麻線→紡線→框線→漂白→染色→打蠟→整經→織布。
                                            <br>&emsp;&emsp;&ensp;紡織技巧:
                                            <br>&emsp;&emsp;&ensp;織法
                                            <br>&emsp;&emsp;&ensp;hinipalatan：最簡單的平織法，織出規則性十字形交叉的無紋飾布。
                                            <br>&emsp;&emsp;&ensp;hinihalos：無夾織花紋，以不同的挑線法穿梭經緯線製出有菱形浮紋的布。
                                            <br>&emsp;&emsp;&ensp;hiniho:an：艷麗紋飾的布料，主要用來製成祭典穿的服飾。紋飾的織法利用提經挑花夾織的方式，以及賽夏族廣泛使用的浮織或雙層織法，搭配組合織出各種華美的紋樣。
                                            <br>&emsp;&emsp;&ensp;織紋
                                            <br>&emsp;&emsp;&ensp;賽夏族人多將織紋圖案視為是代表個人及家族傳承的智慧與殊榮；每家有其熟練的圖紋織造技術。傳統織紋圖案常見的有菱形紋、卍字紋、XO紋、線條紋等。主要由紅、黑、白三色交錯變化而成。以圖案元素來說，和泰雅族的織布非常類似（菱形紋、線條紋）。

                                            <br>&emsp;&emsp;&ensp;色系:紅色：對待他人要熱情。
                                            <br>&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;黑色：做人不可黑心。
                                            <br>&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;白色：心要純潔。
                                            <br>&emsp;&emsp;&ensp;編器
                                            <br>&emsp;&emsp;&ensp;常見的編器有米籩、米篩、種子籃、背籃、提籃、線籃、便當、食籃、置物盒、籐帽、甚至放置祖靈象徵物的神聖小籐籃等。賽夏族傳統編噐有特殊形式和技法，例如背籃為雙肩帶式的背籃，不像泰雅族或平埔族是額帶式背籃，傳統的背籃形式是喇叭型，上為呈圓椎狀、下為圖柱狀，多以斜紋法編成細密無孔。現在生活中普遍使用的主要以六角形編法製的透孔背籃（Takil），用來裝置各種雜物等。
                                            <br>&emsp;&emsp;&ensp;編器主要使用桂竹作為材料，是使用最多的材料；另一種野生的小綠竹用來編製較細緻器物（如穀物背籃）。此外也會使用黃籐來製作精緻器物，如籐帽等。
                                            <br>&emsp;&emsp;&ensp;編器的編法分為方格編法、透孔六角編法、斜紋編法、絞織編法、合縫螺旋編法、相交螺旋編法等。編器修緣則分為加蔑紮編法、夾條紮縫法，以及8形修邊法。
                                        </li>
                                        <li style="font-size: 20px;">
                                            文化:
                                            <br>&emsp;&emsp;&ensp;舞蹈:
                                            <br>&emsp;&emsp;&ensp;賽夏族人的社會中所見的舞蹈主要項目僅有矮靈祭。矮靈祭呈現了矮人與族人相處的情形（如矮人拉著懶惰的賽夏人去看豐收的田地，以快舞步的方式呈現），到哀泣之處，舞步緩緩前進，快速的旋轉與定點跳躍呈現了族人驅趕矮靈的心理反映。會使用「臀鈴」（tapangaSan）作為舞蹈道具。

                                            <br>&emsp;&emsp;&ensp;音樂:
                                            <br>&emsp;&emsp;&ensp;賽夏族除了一般所唱的歌之外，矮靈祭的祭歌最為重要。一般的歌流傳不多。矮靈祭的歌，由於每二年一次祭典中，由集體一起歌唱，且祭歌需要很長的時間吟唱，所以在族人中廣受流傳。除迎神歌之外其餘都伴有舞蹈。而祭歌歌詞內容非常具文學價值。

                                            <br>&emsp;&emsp;&ensp;賽夏族兩年一度的矮靈祭，對賽夏的音樂文化十分重要。矮靈祭有一套完整的祭歌，以十五曲祭祀為中心，曲譜有十六種，歌詞四十八章，每章若干節，矮靈祭歌唱法並不像其他族群或現代歌謠的唱法，而是重覆著幾段音節。要將全部的祭歌唱完、跳完，必得通宵達旦，幾天幾夜才會結束。和鄰近的泰雅族互相影響，使用的音階la、sol、mi、re四音階頗為相近。

                                            <br>&emsp;&emsp;&ensp;矮靈祭歌的練唱只准許在祭期前一個月左右，練唱其間以部落為單位，且在夜間實施，平常不可練唱，所以都在祭前由專人以密集練習形式教唱。

                                            <br>&emsp;&emsp;&ensp;賽夏族的祭歌悠揚而非節奏化（拍節化）。祭歌的質量相當相當豐富，曲調也彼此異趣，以第一首第一節為例，共有五句，唱法卻是^1^^2^1^2，^2^3^3，^3^4^4，^4^5^5。以不規則的方式反覆唱法，是非常特殊的表現方式。
                                            並且有相當的歷史。

                                            <br>&emsp;&emsp;&ensp;矮靈祭歌詞包括《招請歌》、《出草歌》、《行樂矮人故地》、《雷女之歌》、《送神之歌》等，祭歌幽雅悲涼顯露出對矮靈的那份恩怨交錯及原始部落巫術的神秘氣氛。以歌曲而言，追述了矮人的教誨與祈求農作物的豐收。

                                            <br>&emsp;&emsp;&ensp;樂器方面主要使用膜笛、杵、竹筒、臀鈴。臀鈴（tapa:ngasan）又稱背響，是賽夏族特有的樂器，主要由竹管與薏仁的果實穿綴而成，目前有些臀鈴用銅管代替竹管。

                                            <br>&emsp;&emsp;&ensp;儀式:
                                            <br>&emsp;&emsp;&ensp;出生禮:
                                            <br>&emsp;&emsp;&ensp;以前的賽夏族人在生子三日後，必須派人通知母家，因處於強大漢族與泰雅族之間，故極望多產而重男輕女。生女（Mingsarapaang，意為塵土般的），生男（'ima
                                            paheks'aehae' boehoe:，指多一張弓）帶箭鏃、糕餅至母家門口通報，母家則由一青年持鏃與餅與通報者互換。

                                            <br>&emsp;&emsp;&ensp;成年禮:
                                            <br>&emsp;&emsp;&ensp;賽夏族人舉行的成年禮與每年的祭軍神tinato'
                                            <br>&emsp;&emsp;&ensp;儀式一起舉行，古代祭軍神時，都拿敵人的頭來當祭品，凡是參加祭儀的青年人，都要喝下儀式上的祭酒，這樣才取得族人認可，成為一個真正的成年人。
                                            <br>&emsp;&emsp;&ensp;成年才能進行三件事，拔牙、紋面、穿耳。賽夏族人以拔牙為成年的象徵，不論是男生或是女生都要經過這個過程。但現在已無此儀式。

                                            <br>&emsp;&emsp;&ensp;婚禮:
                                            <br>&emsp;&emsp;&ensp;男子二十至三十歲，女子十七、八歲至二十歲為適婚年齡，原則上男女年齡相彷或男長於女數歲，男方便可請氏族長輩至女家求婚。女家如表同意，便會和求婚者互換菸斗完成許婚儀式。成婚前需先訂婚，訂婚後二、三年擇期結婚。

                                            <br>&emsp;&emsp;&ensp;喪禮:
                                            <br>&emsp;&emsp;&ensp;賽夏人對於死亡的定義為生靈脫離軀體而出即為死亡，在同一氏族中有人死亡則氏族內各人有為其服喪一日的義務。在賽夏族傳統的習慣中，人死後埋葬並沒有特別標幟的墳地，也無死後祭拜之事。向天湖每年訂在清明節舉行掃墓，主要是為了配合假期，方便在外地工作者能夠回來參加，同時也有送東西給鬼魂吃的意思。在喪葬的禁忌方面有：死者屍體僅能由氏族中的年長者得以觸摸；而橫死者則是由發現者告知親屬在就地掩埋以示禁忌；男子的武器及小刀禁止附葬；而參加埋葬者回家後必須更衣，且脫下的衣服必須棄之野外；家有喪祭者不能參加農事祭儀，也不得參加出草與戰爭。
                                            <br>&emsp;&emsp;&ensp;賽夏族人認為衰老疾病死者為善終，橫死與戰死者為惡死。橫死者須就地掩埋並舉火行祭，堆石於掩埋處以示禁忌。善死者在彌留之際，家人便須將之移至地上，因為死在床上是為惡死。垂死者置於地上後，家人為之洗浴，斷氣後為之易盛裝。然後將死者扶起來，兩腿曲於胸前，以布包起來。家中女子煮新飯，將數粒飯塞於死者口中以為辭食，男子則出外尋覓埋葬地。男子們在野外適當處，掘深三、四尺之橫穴，將屍體抬至墓旁後，由最近親屬背向墓穴，以左足蹴屍入穴。屍身入穴後以面向東為吉，面向上或向西為兇。屍身伸直橫臥穴中，以包屍體的布覆蓋之。將鹽巴灑在屍上，再覆以茅草，再覆蓋泥土，最後用短竿插於墓之四周
                                            ，再以石塊圍砌即可。埋葬時同一氏族的人必須參加，死者生前的遺物，除武器外，一律陪葬。埋葬之第三日，家人蒸糯米飯，殺雞持往墓側祭亡魂，然後家人全體食分，翌日出獵，獵獲歸來共食後，即解除喪服。

                                            <br>&emsp;&emsp;&ensp;祭典:
                                            <br>&emsp;&emsp;&ensp;賽夏族人對於祭典的分工非常清楚。如族內最為盛大的paSta'ay(巴斯達隘別名矮靈祭)由朱姓主持。祈晴祭由潘姓主持。baki'Soro:(龍神祭)由夏與蟹姓主持。鎮風祭由風姓長老主持。tinato'(火祭；另一稱敵首祭)由趙(豆)姓長老主持。這些規範，來自族裡的神話傳說與歷史經驗。

                                            <br>&emsp;&emsp;&ensp;播種祭（pit'aza'）:
                                            <br>&emsp;&emsp;&ensp;北群的播種祭分為社祭與家祭二次舉行，先行社祭，按姓氏輪流選出一家戶長擔任主祭，通常在掃墓節過後半個月內舉行。
                                            <br>&emsp;&emsp;&ensp;而在南群中，目前只有向天湖地區的氏族還保存著播種祭，舉行的時間，配合水稻的播種祭節，約在每年的四月舉行。主祭的人選由目前住在向天湖的氏族輪流，其中，風姓因為人數眾多，因此分為'omawa
                                            ta:in和bawnay a 'ataw兩組，而與解、朱、芎姓依序輪流。
                                            <br>&emsp;&emsp;&ensp;儀式定期在四月舉行，由主祭一人在某一天的午夜十二點過後，獨自在預先選好的一塊地上插上一根兒茅（茅草的一種），按著閉上眼睛，將小米種籽灑向田地，儀式就算結束。主要是祈求今年的農作豐收。

                                            <br>&emsp;&emsp;&ensp;祖靈祭（paSbaki'）:
                                            <br>&emsp;&emsp;&ensp;主要是祭祀去世的列祖列宗。舉行的時間不一定，由二位長老主持，將插有豬肉、黏糕的供品及酒攜至屋後空地行祭。祭品分為二份，向東的給善靈，向西的給凶死的靈。祖靈祭的另一個目的是家族成員的認定，透過儀式成為家族的一份子。

                                            <br>&emsp;&emsp;&ensp;祈天祭:
                                            <br>&emsp;&emsp;&ensp;祈天祭為賽夏族與自然對話的祭儀，一年一小祭，隔年一大祭，祭拜神祇為天帝、天后，目的為祈晴，或為鎮風、驅疫。主祭為撒萬(根、錢、潘)家族共同擔任，祭場坐落著竹編的靈屋、祭屋。第一天南北各姓氏代表聚集於山下河畔集會，次日宰殺豬只作為祭品，最後一天開始祭神儀式。

                                            <br>&emsp;&emsp;&ensp;每年的3月13日至15日連續舉行三天，整天不能進湯水，直到儀式結束才一起分享飯糰。期間不得折損植物，祭品不可見天，須在房內用手吃飯。據說祭典期間必定放晴，十分靈驗。

                                            <br>&emsp;&emsp;&ensp;又有一說，祈天祭尚包含已經消失的祭典，月神祭。

                                            <br>&emsp;&emsp;&ensp;火神祭或稱敵首祭（tinato'）:
                                            <br>&emsp;&emsp;&ensp;於每年農曆二月十五日舉行，為北群趙姓長老召集會議，為紀念趙氏以往與異族戰爭之史實，為保鄉衛民精神之崇敬。
                                            <br>&emsp;&emsp;&ensp;敵首祭是伴隨賽夏族過去獵首風俗而衍生出的一項祭儀。以火器袋作為獵首祭儀式中重要的用具。

                                            <br>&emsp;&emsp;&ensp;龍神祭或卡蘭祭（karang）:
                                            <br>&emsp;&emsp;&ensp;這一特殊的傳統祭儀，又稱蛇尾祭；過去主要是夏季久雨連綿時，受村人拜託而執行的儀式，也有治病的作用。卡蘭祭所祭拜的是傳說中的神獸Soro:
                                            <br>&emsp;&emsp;&ensp;的骨灰，現由夏姓族人祀奉於賽夏五福龍神宮。

                                            <br>&emsp;&emsp;&ensp;矮靈祭（paSta'ay）:
                                            <br>&emsp;&emsp;&ensp;賽夏族最為人知也最為重要的便是矮靈祭。相傳矮人教導賽夏族人農耕等技術，可說是族人的恩人，但因矮人屢次調戲賽夏族婦女，以致於族人用計殺害矮人，此後，賽夏族開始舉行矮靈祭，以慰藉矮人的靈魂。矮靈祭舉辦的時間在農曆十月，每兩年舉辦一次小祭，每十年舉辦一次大祭，每到這時候，外地的族人都會趕回來參加。據說往昔矮靈祭每年都會舉辦，後來因受到日本政府的反對，而改為兩年一次。台灣原住民中除了賽夏族人相信有矮人的存在外，布農族、鄒族、泰雅族、排灣族等，也都有關於矮人的傳說。不過只有本族發展出獨特的祭典，這與其族人傳說過去與矮人之間密切的恩怨情仇有關。南賽夏會比北賽夏提早一天舉行祭儀，雖然分隔兩地舉辦，但兩祭團的儀式幾乎皆相同，且兩祭團的成員會於祭典前後相互討論、觀摩並協助，因此時間的早晚對於族人而言並沒有太大的差別。
                                            <br>&emsp;&emsp;&ensp;矮靈祭（巴斯達隘）的祭典流程如下[3]:
                                            <br>&emsp;&emsp;&ensp;結芒草約定祭典舉行時間：
                                            <br>&emsp;&emsp;&ensp;南、北祭團在祭典前一、二個月在南莊的河邊相會，決定矮靈祭的時間。時間一旦決定後，族人便著手忙碌籌備，並開始練唱祭歌。這些歌曲平常並不能吟唱。
                                            <br>&emsp;&emsp;&ensp;迎靈：
                                            <br>&emsp;&emsp;&ensp;矮靈祭第一天清晨，由主祭率族人，面向東方唱招請之歌（傳說中的矮黑人逃至東方），迎接矮人前來，婦女並樁米以祈求豐收。當天晚上七時左右，由主祭領隊，以歌舞迎請矮人前來。
                                            <br>&emsp;&emsp;&ensp;娛靈：
                                            <br>&emsp;&emsp;&ensp;第二天晚上，歌舞回憶與矮人相處的情景。娛靈是矮靈祭的重心，目的在娛樂歸來的矮黑人。
                                            <br>&emsp;&emsp;&ensp;訓勉：
                                            <br>&emsp;&emsp;&ensp;第二天午夜十二時，由主祭站在大田上，向族人訓勉，並唱「雷女之歌walowalon」，全體須立正，是祭典中最肅穆的一刻。族人並請出神鞭揮打，咸信可以趨邪。（北祭團無神鞭）。
                                            <br>&emsp;&emsp;&ensp;逐靈、送靈：
                                            <br>&emsp;&emsp;&ensp;在第三天晚上開始逐靈歌舞，歌舞至第四天清晨送走矮靈。
                                            <br>&emsp;&emsp;&ensp;塗泥、跳抓芒草、毀榛木架：
                                            <br>&emsp;&emsp;&ensp;在第四天清晨一連串的儀式展開。塗泥有避邪的作用。跳抓芒草則是在祭屋前架上榛木，榛木樹幹每隔一小段，就結綁茅草，由族內青年輪流跳摘芒草，此儀式有向矮靈展示體力的恐嚇活動。跳摘成功者，代表未來可逢凶化吉。摘取完畢之後，在祭場上的男子會全部衝向前，將枝幹折斷。
                                            <br>&emsp;&emsp;&ensp;聚飲慰勞：
                                            <br>&emsp;&emsp;&ensp;儀式結束後各家族互相慰勞、飲酒、吃糯米糕。
                                            <br>&emsp;&emsp;&ensp;河邊送靈：
                                            <br>&emsp;&emsp;&ensp;所有祭儀結束後的隔天，大隘的族人還必須到矮靈居住的山洞的對岸河邊餞送矮靈。族人在河邊獻祭，烤肉、餘興歌舞，與前幾天的肅穆哀泣大異其趣。至此整個矮靈祭才算真正結束。
                                            <br>&emsp;&emsp;&ensp;綜觀整個祭儀，有其深涵的意義。以歌曲而言，追述了矮人的教誨與祈求農作物的豐收。舞蹈方面則呈現了矮人與族人相處的情形（例如：矮人拉著懶惰的人去看豐收的田地，以快舞步的方式呈現）。唱到哀泣之處，舞步緩緩前進，如泣如訴。而在逐靈的歌舞裡，快速的旋轉與定點跳躍呈現了族人驅趕矮靈的心裡反映。
                                            <br>&emsp;&emsp;&ensp;整個矮靈祭就在族人錯綜複雜的心理狀況下延續下來，其中有悔恨、有追憶、有懼怕、有喜悅。矮靈祭舉辦期間有許多禁忌，打從開始結草決定祭典日期開始，族人的言行舉止就相當謹慎，以避免不小心得罪矮人，倘若不小心犯忌，就有可能被矮靈附身，必須經由化解才能復原。為了避邪，每位族人在這個期間內都會攜帶一根芒草，而且各家家戶門口、家具、車輛等處也都別有芒草，甚至是外來的觀光客亦需入境隨俗，隨身攜帶芒草。

                                            <br>&emsp;&emsp;&ensp;宗教信仰:賽夏族除超自然信仰外，以祖靈祭和矮靈祭最具代表性。

                                            <br>&emsp;&emsp;&ensp;特殊文化:
                                            <br>&emsp;&emsp;&ensp;紋面與紋身：男女皆有，紋身則是獵頭勇士的專利，通常刺青於胸前。男子成年時在上額及下顎各刺一列紋飾。女子僅刺在上額。和泰雅族在雙頰刺上寬邊的V形紋飾不同。獵過二個人頭的男子則在胸前左乳肋骨刺第一道紋，獵三個首級者在右乳肋骨刺一道紋，往後如有收穫依次再加刺紋。
                                            <br>&emsp;&emsp;&ensp;肩旗（kilakil）又稱「舞帽」、「月光旗」，是各氏族的代表。南、北群的造型不同，肩旗上面寫有家族的姓氏，在矮靈祭時獨立繞行於祭場，通常由族裡的男子負責扛旗。
                                            <br>蛇鞭（babte:）是南賽夏族人南祭團舉行矮靈祭時使用的法器，北賽夏的儀式祭典中並不使用。蛇鞭由南賽夏朱姓的男性負責使用，賽夏族人認為朱姓以外的人揮舞會遭受天譴或不幸（若朱姓的妻子懷孕也不能碰，否則會對胎兒不利）。蛇鞭的製作是使用約二公尺的鹿仔樹皮結索作成，根部留二十公分，製成百步蛇頭形做柄，其餘除去木材部分，將樹皮切割成三片交互編織成一條索，尾端在綁上八條約三公分的藤條製作而成。傳說蛇鞭象徵百步蛇，有制煞避邪作用。蛇鞭的功能和意義在南賽夏族的眼中，是一種傳統信仰又可以撫慰他們心靈。早期的矮靈祭典中月光是很重要的，南賽夏族相信揮舞蛇鞭可以將烏雲帶走，為族人帶來光明和平。所以南祭團在進行矮靈祭典若雨霧不止或烏雲遮月的時候，認為矮靈作怪，這時由朱姓主祭者從祖靈屋裡拿出蛇鞭，在舞場對著空氣抽打，使神鞭發出「咻！咻！噠！噠！」聲響，打的愈響亮，天氣就會愈好。在矮靈祭典的時候，會有許多病患、小孩、婦女和老人都會上前去觸摸舞鞭者的背部，據說這樣可以掃除邪魔，祈求諸事平安。
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