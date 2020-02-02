<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="renderer" content="webkit">
    <meta name="generator" content="KodCloud">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    
    <!-- 强制移动设备以app模式打开页面(即在移动设备下全屏，仅支持部分浏览器) -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->

    <title>小懒音乐</title>
    <meta name="description" content="一款开源的基于网易云音乐api的在线音乐播放器。具有音乐搜索、播放、下载、歌词同步显示、个人音乐播放列表同步等功能。">
    <meta name="keywords" content="喵小懒,音乐,VIP音乐免费下载,在线音乐播放器,网易云音乐,音乐api,音乐播放器源代码">

    <!-- 不支持IE8及以下版本浏览器 -->
    <!--[if lte IE 8]>
    <script>window.location.href = "plugns/killie/"</script>
    <![endif]-->
    <link rel="stylesheet" href="css/navagation.css">
    <!-- favicon图标 -->
   <link rel="shortcut icon" href="images/iconlogo.png"/>

    <script src="js/jquery.min.js"></script>

    <!-- 播放器样式表文件 -->
    <link rel="stylesheet" type="text/css" href="css/player.css">

    <!-- 小屏幕样式修复 -->
    <link rel="stylesheet" type="text/css" href="css/small.css">

    <!-- 滚动条美化样式文件 -->
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">

    <!-- layer弹窗插件样式文件 -->
    <link rel="stylesheet" href="plugns/layer/skin/default/layer.css?v=3.0.2302" id="layuicss-skinlayercss">

</head>
<body>
<div id="blur-img"></div>
<div class="header">
    <a class="get-menu-nav">
        <div class="cat-menu"></div>
    </a>
    <a id="logo-mobile" ><img src="images/logo.png" /></a>
    <!-- 侧滑栏 -->

    <header>
        <nav>
            <ul class="navigation">
                <li>
                    <a id="logo" ><img src="images/logo.png" /></a>
                </li>
                <li><a href="/" >小懒De情绪</a></li>
                <li><a href="music" style="color: rgb(175, 126, 132); font-size: 16px;">小懒音乐</a></li>
                <li><a href="dance">小懒ai跳舞</a></li>
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
        <a href="/" ><li id="cat-qx" class="menu-nav-item" >小懒De情绪</li></a>
        <a href="music" style="color: rgb(241, 101, 101);"> <li id="cat-music" class="menu-nav-item">小懒音乐</li></a>
        <a href="dance" ><li id="cat-dance" class="menu-nav-item">小懒ai跳舞</li></a>
        <li id="cat-laboratory" class="menu-nav-item">小懒实验室</li>
    </ul>
</div>



<div class="cont-blur"></div>

<!-- 中间主体区域 -->
<div class="center">
    <div class="container">
        <div class="btn-bar">
            <!-- tab按钮区 -->
            <div class="btn-box" id="btn-area">
                <span class="btn" data-action="player" hidden>播放器</span>
                <span class="btn" data-action="playing" title="正在播放列表">正在播放</span>
                <span class="btn" data-action="sheet" title="音乐播放列表">播放列表</span>
                <span class="btn" data-action="search" title="点击搜索音乐">歌曲搜索</span>
            </div>
        </div>  <!--class="btn-bar"-->

        <div class="data-area">
            <!--歌曲歌单-->
            <div id="sheet" class="data-box" hidden></div>

            <!--音乐播放列表-->
            <div id="main-list" class="music-list data-box"></div>
        </div>  <!--class="data-area"-->

        <!-- 右侧封面及歌词展示 -->
        <div class="player" id="player">
            <!--歌曲封面-->
            <div class="cover">
                <img src="images/player_cover.png" class="music-cover" id="music-cover">
            </div>
            <!--滚动歌词-->
            <div class="lyric">
                <ul id="lyric"></ul>
            </div>
            <div id="music-info" title="点击查看歌曲信息"></div>
        </div>
    </div>  <!--class="container"-->
</div>  <!--class="center"-->

<!-- 播放器底部区域 -->
<div class="footer">
    <div class="container">
        <div class="con-btn">
            <a href="javascript:;" class="player-btn btn-prev" title="上一首"></a>
            <a href="javascript:;" class="player-btn btn-play" title="暂停/继续"></a>
            <a href="javascript:;" class="player-btn btn-next" title="下一首"></a>
            <a href="javascript:;" class="player-btn btn-order" title="循环控制"></a>
        </div>  <!--class="con-btn"-->

        <div class="vol">
            <div class="quiet">
                <a href="javascript:;" class="player-btn btn-quiet" title="静音"></a>
            </div>
            <div class="volume">
                <div class="volume-box">
                    <div id="volume-progress" class="mkpgb-area"></div>
                </div>
            </div>
        </div>  <!--class="footer"-->

        <div class="progress">
            <div class="progress-box">
                <div id="music-progress" class="mkpgb-area"></div>
            </div>
        </div>  <!--class="progress"-->
    </div>  <!--class="container"-->
</div>  <!--class="footer"-->

<!-- layer弹窗插件 -->
<script src="plugns/layer/layer.js"></script>

<!-- 播放器数据加载模块 -->
<script src="js/ajax.js"></script>

<!-- 播放器歌词解析模块 -->
<script src="js/lyric.js"></script>

<!-- 音乐列表配置 -->
<script src="js/musicList.js"></script>

<!-- 封装函数及ui交互模块 -->
<script src="js/functions.js"></script>

<!-- 播放器主体功能模块 -->
<script src="js/player.js"></script>

<!-- 滚动条美化插件 -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- 背景模糊化插件 -->
<script src="js/background-blur.min.js"></script>

<!-- 站长统计代码 -->
<span style="display: none">
    <!-- 各类统计代码都放在这里…… -->

</span>
<script src="js/index.js"></script>
</body>
</html>