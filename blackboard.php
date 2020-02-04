<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>小懒视频播放</title>
    <link rel="shortcut icon" href="images/iconlogo.png" />
    <link rel="stylesheet" href="css/bkbd.css">
    <link rel="stylesheet" href="css/DPlayer.min.css">
    <link rel="stylesheet" href="css/navagation.css">
    <script src="js/jquery.min.js"></script>
</head>

<body>

    <!-- 导航栏部分 -->
    <div class="header">
        <a class="get-menu-nav">
            <div class="cat-menu"></div>
        </a>
        <a id="logo-mobile"><img src="images/logo.png" /></a>
        <!-- 侧滑栏 -->

        <header>
            <nav>

                <ul class="navigation">
                    <li>
                        <a id="logo"><img src="images/logo.png" /></a>
                    </li>
                    <li><a href="/">小懒De情绪</a></li>
                    <li><a href="music">小懒音乐</a></li>
                    <li><a href="dance" style="color: rgb(175, 126, 132); font-size: 16px;">小懒ai跳舞</a></li>
                    <li><a href="">小懒实验室</a></li>
                    <li>
                        <form id="search-input">
                            <input type="text" value="请输入关键字" onfocus="if(this.value=='请输入关键字'){this.value=''}" onblur="if(this.value==''){this.value='请输入关键字'}" />
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
            <a href="/">
                <li id="cat-qx" class="menu-nav-item">小懒De情绪</li>
            </a>
            <a href="music">
                <li id="cat-music" class="menu-nav-item">小懒音乐</li>
            </a>
            <a href="dance" style="color: rgb(226, 24, 165);">
                <li id="cat-dance" class="menu-nav-item">小懒ai跳舞</li>
            </a>
            <li id="cat-laboratory" class="menu-nav-item">小懒实验室</li>
        </ul>
    </div>
    <div class="cont-blur"></div>
    <section>
        <div class="Dplayer_box">
            <div class="player_av">
                <div id="player1"></div>
            </div>

        </div>

        <div class="alert_back">加载中</div>
    </section>

    <script src="js/index.js"></script>
    <script src="js/DPlayer.min.js"></script>
    <script>
        var getParam = window.location.href.split('?')[1],
            aid = getParam.split('=')[1],
            data_url = "",
            data_pic = "";

        $.ajax({

            type: "get",

            url: 'videoserver.php?aid=' + aid,

            async: false,

            data: {},

            dataType: "json",

            success: function(data) {

                data_url = data[0].video_src;
                data_pic = data[0].video_imgs;
            },

            error: function(data) {


            },

            beforeSend: function(data) {

            }

        });
        var dp = new DPlayer({
            container: document.getElementById('player1'),
            video: {
                url: data_url,
                pic: data_pic,                
            }            
        });

        // 弹出框
        function alert_back(text) {
            $(".alert_back").html(text).show();
            setTimeout(function() {
                $(".alert_back").fadeOut();
            }, 1200)
        }
        //秒转分秒
        function formatTime(seconds) {
            return [
                    //            parseInt(seconds / 60 / 60),
                    parseInt(seconds / 60 % 60),
                    parseInt(seconds % 60)
                ]
                .join(":")
                .replace(/\b(\d)\b/g, "0$1");
        }
    </script>
</body>

</html>