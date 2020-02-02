<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>一只特爱睡觉的小懒喵ε=(´ο｀*)))</title>
    <link href="css/index.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/navagation.css">
    <link rel="shortcut icon" href="images/iconlogo.png"/>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/pageXx.css">


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
                <li><a href="/">小懒De情绪</a></li>
                <li><a href="music">小懒音乐</a></li>
                <li><a href="dance">小懒ai跳舞</a></li>
                <li><a href="">小懒实验室</a></li>
                <li>
                <!-- onfocus="if(this.value=='请输入关键字'){this.value=''}"
                    onblur="if(this.value==''){this.value='请输入关键字'}" -->
                    <form id="search-input"  method="get" action="#">
                        <input type="text" name='data' placeholder="请输入关键字"/>
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
        <a href="/" style="color: rgb(10, 214, 95);"> <li id="cat-qx" class="menu-nav-item">小懒De情绪</li></a>
        <a href="music" > <li id="cat-music" class="menu-nav-item">小懒音乐</li></a>
        <a href="dance" > <li id="cat-dance"  class="menu-nav-item">小懒ai跳舞</li></a>
        <li id="cat-laboratory" class="menu-nav-item">小懒实验室</li>
    </ul>
</div>

<!-- 横幅部分 -->
<div class="banner">
    <div class="cat-box">
        <img class="cat-box-img" src="images/headerbg.png"/>
    </div>

    <div class="banner-author">
        <div class="banner-author-img">
            <img src="images/IMG_0764.png" alt="你有看见小懒的主人吗" title="这是喵小懒的主人哦"/>
        </div>
        <div class="banner-author-content">
            <a href="mxladmin" title="进入后台吗？">喵小懒</a>
            <p>公告栏</p>
        </div>
    </div>
</div>
<?php
require_once "DBHelper.php";
$con = new  DBHelper();
$sql = "SELECT 	cat_articleId,cat_author,cat_from, cat_articleType,cat_title, cat_date, cat_imageSrc,cat_article,clicks_ip_COUNT FROM  catfeel order by  clicks_ip_COUNT desc 
 ";
$sql2 = "SELECT 	cat_articleId,cat_author,cat_from, cat_articleType,cat_title, cat_date, cat_imageSrc,cat_article,clicks_ip_COUNT FROM  catfeel order by  cat_articleId desc 
 ";
$res = $con->getAll($sql);
$res2 = $con->getAll($sql2);
$num=count($res);
?>
<!-- 主体内容区域 -->
<section>
    <!-- 左边 -->
    <div class="left">
        <div class="cat-record-box">
            <p class="cat-record-des">
                <span>信息统计</span>
            </p>
            <div class="cat-info">
                <div class="cat-record-information">
                    <span>喂粮次数 ：<?php echo  $num?></span>
                </div>
                <div class="cat-record-information">
                    <span>舞蹈数量 ：0</span>
                </div>
                <div class="cat-record-information">
                    <span>评论次数 ：0</span>
                </div>
                <div class="cat-record-information">
                    <span>实验样品 ：0</span>
                </div>
                <div class="cat-record-information">
                    <span>访问数量 ：0</span>
                </div>
            </div>
        </div>
    </div>
    <!-- 中间 -->
    <div class="cont-blur"></div>
    <div class="main">
        <!-- 文章盒子 -->

        <h3 id="loading"></h3>
        <div id="kjz" >


        </div>
        <div id="loadmore">点击加载更多</div>

        <div id="page">

        </div>




    </div>
    <!-- 右边 -->
    <div class="right">
        <div class="cat-ranking-box">
            <div class="ranking-title"><span>点击排行</span></div>
            <?php
            for ($i = 0; $i < 10; $i++) {

                ?>
                <div class="ranking-des">
                    <div class="ranking-des-img">
                        <a href="feel?data=<?php echo $res[$i]['cat_articleId'] ?>" ><img src="<?php echo $res[$i]['cat_imageSrc'] ?>"  title="<?php echo $res[$i]['cat_title'] ?>"/></a>
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
                        <a href="feel?data=<?php echo $res2[$j]['cat_articleId'] ?>" ><img src="<?php echo $res2[$j]['cat_imageSrc'] ?>" title="<?php echo $res2[$j]['cat_title'] ?>"/></a>
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

<!-- 返回顶部 -->
<div id="goTopBtn" style="display: none; left: 269px;"><span class="icon_top"></span></div>
<footer>
    <div class="kor">
        <p>Copyright © 2018 <a href="index">喵小懒</a> 版权所有 All Rights Reserved</p>
        <a href="http://www.beian.miit.gov.cn/">赣ICP备19005287号</a>
        <hr>
        <p>本站所收录作品、热点评论等信息部分来源互联网，目的只是为了系统归纳学习和传递资讯

            所有作品版权归原创作者所有，与本站立场无关，如不慎侵犯了你的权益，请联系我们(QQ:2556253092)告知，我们将做删除处理！</p>
    </div>
</footer>


<script type="text/javascript" src="js/pageXx.js"></script>
<script>

    var windowWidth=document.body.clientWidth;
    if (windowWidth < 1200){
        // 定义一个变量，等会用来控制多次触发

        var i = 0;

        $(window).scroll(function () {

            //获取滚动时距离浏览器顶部的值

            var t = $(this).scrollTop();

            //获取当前窗口的高度

            var h = $(this).height();

            //获取按钮距离浏览器顶部的值

            var h1 = $('#loadmore').offset().top;

            //用按钮的值-滚动条的值与窗口高度进行比较，如果小时，则表示按钮进入可视区，同时也表示滚动条即将到达底部

            if (h1 - t < h) {

                //防止快速下拉时多次触发

                if (i == 0) {

                    //改变i的值

                    i = 1;

                    //触发点击事件

                    $('#loadmore').click();

                }

            }

        });

        // 加载初始数据

        var p = 1;
        $.ajax({

            type: "get",

            url: 'query_server?page='+ p,

            data: {},

            dataType: "json",

            success: function (data) {

                for (var a in data) {
                    $("#kjz").append("<div class=\"cat-article-box\">\n" +
                        "            <a href=\"feel?data="+data[a].cat_articleId+"\" > <img src="+data[a].cat_imageSrc+"></a>\n" +
                        "            <div class=\"cat-article-title\">\n" +
                        "                <a href=\"feel?data="+data[a].cat_articleId+"\" ><h2>"+data[a].cat_title+"</h2></a>\n" +
                        "                <span class=\"entry-meta\">\n" +
                        "              <i class=\"fa\"> "+data[a].cat_date+" </i>\n" +
                        "              <i class=\"fa\"> "+data[a].clicks_ip_count+"人浏览 |</i>\n" +
                        "              <i class=\"fa\"> 评论</i>\n" +
                        "            </span>\n" +
                        "            </div>\n" +
                        "            <div class=\"cat-article-des\">\n" +
                        "                隐藏说明\n" +
                        "            </div>\n" +
                        "        </div>");


                    $("#loading").remove();
                }


                i = 0;


            },

            error: function (data) {

            },

            beforeSend: function (data) {

                $('#loading').append("加载中");

            }

        });


        // 加载更多

        $('#loadmore').click(function () {

            p++;

            $.ajax({

                type: "get",

                url: 'query_server?page=' + p,

                data: {},

                dataType: "json",

                success: function (data) {
                    for (var a in data) {

                        $("#kjz").append("<div class=\"cat-article-box\">\n" +
                            "            <a href=\"feel?data="+data[a].cat_articleId+"\" ><img src="+data[a].cat_imageSrc+"></a>\n" +
                            "            <div class=\"cat-article-title\">\n" +
                            "                <h2>"+data[a].cat_title+"</h2>\n" +
                            "                <span class=\"entry-meta\">\n" +
                            "              <i class=\"fa\"> "+data[a].cat_date+" </i>\n" +
                            "              <i class=\"fa\"> "+data[a].clicks_ip_count+"人浏览 |</i>\n" +
                            "              <i class=\"fa\"> 评论</i>\n" +
                            "            </span>\n" +
                            "            </div>\n" +
                            "            <div class=\"cat-article-des\">\n" +
                            "                隐藏说明\n" +
                            "            </div>\n" +
                            "        </div>");


                        $("#loading").remove();
                    }

                    i = 0;

                },

                error: function (data) {
                    $('#loadmore').html('这里到底了，可以刷点其他的哦ε=(´ο｀*)))');

                },

                beforeSend: function (data) {

                    $('#loading').append("加载中");

                }

            });


        });
    } else if(windowWidth >1200){

        $.ajax({

            type: "get",

            url: 'query_server.php?page=1',

            data: {},

            dataType: "json",

            success: function (data) {

                for (var a in data) {

                    $("#kjz").append("<div class=\"cat-article-box\">\n" +
                        "            <a href=\"feel?data="+data[a].cat_articleId+"\" ><img src="+data[a].cat_imageSrc+"></a>\n" +
                        "            <div class=\"cat-article-title\">\n" +
                        "                <h2>"+data[a].cat_title+"</h2>\n" +
                        "                <span class=\"entry-meta\">\n" +
                        "              <i class=\"fa\"> "+data[a].cat_date+" </i>\n" +
                        "              <i class=\"fa\"> "+data[a].clicks_ip_count+"人浏览 |</i>\n" +
                        "              <i class=\"fa\"> 评论</i>\n" +
                        "            </span>\n" +
                        "            </div>\n" +
                        "            <div class=\"cat-article-des\">\n" +
                        "                隐藏说明\n" +
                        "            </div>\n" +
                        "        </div>");


                    $("#loading").remove();
                }


            },

            error: function (data) {
                $('#loadmore').html('这里到底了，可以刷点其他的哦ε=(´ο｀*)))');

            },

            beforeSend: function (data) {
                $('#loading').append("加载中");

            }

        });
        // xxPaging.js 使用方法
        $("#page").paging({
            nowPage: 1, // 当前页码
            pageNum: <?php echo  ceil($num/15) ?>, // 总页码
            buttonNum: 6, //要展示的页码数量
            canJump: 1, // 是否能跳转。0=不显示（默认），1=显示
            showOne: 1, //只有一页时，是否显示。0=不显示,1=显示（默认）
            callback: function(num) { //回调函数

                $.ajax({

                    type: "get",

                    url: 'query_server?page='+num,

                    data: {},

                    dataType: "json",

                    success: function (data) {                        
                        $(".cat-article-box").remove();
                        for (var a in data) {                            
                            $("#kjz").append("<div class=\"cat-article-box\">\n" +
                                "            <a href=\"feel?data="+data[a].cat_articleId+"\" ><img src="+data[a].cat_imageSrc+"></a>\n" +
                                "            <div class=\"cat-article-title\">\n" +
                                "                <h2>"+data[a].cat_title+"</h2>\n" +
                                "                <span class=\"entry-meta\">\n" +
                                "              <i class=\"fa\"> "+data[a].cat_date+" </i>\n" +
                                "              <i class=\"fa\"> "+data[a].clicks_ip_count+" 人浏览 |</i>\n" +
                                "              <i class=\"fa\"> 评论</i>\n" +
                                "            </span>\n" +
                                "            </div>\n" +
                                "            <div class=\"cat-article-des\">\n" +
                                "                隐藏说明\n" +
                                "            </div>\n" +
                                "        </div>");


                            $("#loading").remove();
                        }


                    },

                    error: function (data) {
                        $('#loadmore').html('这里到底了，可以刷点其他的哦ε=(´ο｀*)))');

                    },

                    beforeSend: function (data) {

                        $('#loading').append("加载中");

                    }

                });


            }
        });

    }


    

// 这是返回顶部的方法

    $(window).scroll(function () {

        //获取滚动时距离浏览器顶部的值

        var t = $(this).scrollTop();
        var rwidth = $(window).width();
        if (t > 1000) {
            $("#goTopBtn").css("display", "block");
            $("#goTopBtn").css("left", (rwidth - 106) + "px")
        } else {
            $("#goTopBtn").css("display", "none");
        }

        $("#goTopBtn").click(function () {
            // var sc = $(window).scrollTop();
            if(t!=0){
                $('html,body').stop().animate({'scrollTop': top},800);
                return false;
            }

        })
    });


</script>


<script src="js/index.js"></script>


</body>

</html>