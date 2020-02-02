<?php
    require_once "DBHelper.php";
    $con = new  DBHelper();
    $sql = "SELECT 	cat_articleId,cat_author,cat_from, cat_articleType,cat_title, cat_date, cat_imageSrc,cat_article,clicks_ip_COUNT FROM  catfeel order by  clicks_ip_COUNT desc 
 ";
    $sql2 = "SELECT 	cat_articleId,cat_author,cat_from, cat_articleType,cat_title, cat_date, cat_imageSrc,cat_article,clicks_ip_COUNT FROM  catfeel order by  cat_articleId desc 
 ";
//    获取到的变量
    $tmp = $_GET['data'];

    $sql3="SELECT 	cat_articleId,cat_author,cat_from, cat_articleType,cat_title, cat_date, cat_imageSrc,cat_article,clicks_ip_COUNT FROM  catfeel where cat_articleId=".$tmp;
    $res = $con->getAll($sql);
    $res2 = $con->getAll($sql2);
    $res3=$con->getAll($sql3);   
    $clickCount=++$res3[0]['clicks_ip_COUNT'];    
    $con->exec('catfeel',["clicks_ip_COUNT"=>$clickCount],"update","cat_articleId=".$tmp);
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>小懒De情绪</title>
    <link rel="stylesheet" href="css/navagation.css">
    <link rel="stylesheet" href="css/feel.css">
    <link rel="shortcut icon" href="images/iconlogo.png" />
</head>

<body>
    <!-- 导航栏部分 -->
    <div class="header">
        <a class="get-menu-nav">
            <div class="cat-menu"></div>
        </a>
        <a id="logo-mobile" ><img src="images/logo.png"/></a>
        <!-- 侧滑栏 -->

        <header>
            <nav>

                <ul class="navigation">
                    <li>
                        <a id="logo" ><img src="images/logo.png"/></a>
                    </li>
                    <li><a href="/" style="color: rgb(175, 126, 132); font-size: 16px;">小懒De情绪</a></li>
                    <li><a href="music">小懒音乐</a></li>
                    <li><a href="dance">小懒ai跳舞</a></li>
                    <li><a href="">小懒实验室</a></li>
                    <li>
                        <form id="search-input">
                            <input type="text" value="请输入关键字" onfocus="if(this.value=='请输入关键字'){this.value=''}"
                                   onblur="if(this.value==''){this.value='请输入关键字'}"/>
                            <button>搜索</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </header>

    </div>
    
    <div class="menu-nav">
        <span class="close-menu">×</span>
        <div class="menu-bg"></div>
        <ul class="menu-nav-box">
            <a href="/" style="color: rgb(175, 126, 132);"> <li id="cat-qx" class="menu-nav-item">小懒De情绪</li></a>
            <a href="music" > <li id="cat-music" class="menu-nav-item">小懒音乐</li></a>
            <a href="dance" ><li id="cat-dance" class="menu-nav-item">小懒ai跳舞</li></a>
            <li id="cat-laboratory" class="menu-nav-item">小懒实验室</li>
        </ul>
    </div>
    <div class="cont-blur"></div>
    <section>
        <!-- 正文区域 -->
        <div class="main">

            <ul class="article-des">
                <li class="des-item">编辑&nbsp;<i>|</i><span><?php
                        echo $res3[0]['cat_author']
                        ?></span></li>
                <li class="des-item">标签&nbsp;<i>|</i><span><?php
                        echo $res3[0]['cat_articleType']
                        ?></span></li>
                <li class="des-item">时间&nbsp;<i>|</i><span><?php
                        echo $res3[0]['cat_date']
                        ?></span></li>
            </ul>
            <div class="cat-title">
                <?php
                 echo $res3[0]['cat_title']
                ?></div>
            <img class="cat-images-des" src="<?php echo $res3[0]['cat_imageSrc'] ?>" alt="描述配图">

            <?php
             echo $res3[0]['cat_article']
            ?>

        </div>


        <!-- 右边区域 -->
        <div class="right">
            <div class="cat-ranking-box">
                <div class="ranking-title"><span>点击排行</span></div>
                <?php

                for ($i = 0; $i < 10; $i++) {

                    ?>
                    <div class="ranking-des">
                        <div class="ranking-des-img">
                            <a href="feel?data=<?php echo $res[$i]['cat_articleId'] ?>" > <img src="<?php echo $res[$i]['cat_imageSrc'] ?>" title="<?php echo $res[$i]['cat_title'] ?>"/></a>
                            <div class="ranking-img-des">
                                <span><a href="feel?data=<?php echo $res[$i]['cat_articleId'] ?>" ><?php echo $res[$i]['cat_title'] ?></a></span>
                                <i><?php echo $res[$i]['clicks_ip_COUNT'] ?>人围观</i>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>

            <div class="cat-ranking-box">
                <div class="ranking-title"><span>最近更新</span></div>

                <div class="ranking-des">
                    <?php

                    for ($j = 0; $j < 5; $j++) {

                        ?>
                        <div class="ranking-des-img">
                            <a href="feel?data=<?php echo $res2[$j]['cat_articleId'] ?>" > <img src="<?php echo $res2[$j]['cat_imageSrc'] ?>" title="<?php echo $res2[$j]['cat_title'] ?>" /></a>
                            <div class="ranking-img-des">
                                <span><a href="feel?data=<?php echo $res2[$j]['cat_articleId'] ?>"> <?php echo $res2[$j]['cat_title'] ?></a></span>
                                <i><?php echo $res2[$j]['cat_date'] ?></i>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <script src="js/index.js"></script>
</body>

</html>