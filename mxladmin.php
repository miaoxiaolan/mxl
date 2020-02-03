<?php
session_start();
if (isset($_SESSION['user'])) {
    $catUserId = $_SESSION['userID'];
    require_once "DBHelper.php";
    $con = new DBHelper();
    $sql = "select tel,password,nickname,touxiang from user where userID=" . $catUserId;
    $res = $con->getAll($sql);
?>
    <!DOCTYPE html>
    <html lang="en" class="app js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>喵小懒后台管理</title>
        <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/animate.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css">
        <link rel="stylesheet" href="css/font.css" type="text/css">
        <link rel="stylesheet" href="css/app.css" type="text/css">

    </head>

    <body class="">
        <section class="vbox">

            <!-- 头部内容 -->
            <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
                <div class="navbar-header aside bg-info nav-xs">
                    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                        <i class="icon-list"></i>
                    </a>
                    <a href="" class="navbar-brand text-lt">
                        <i class="icon-home"></i>
                        <img src="images/logo.png" alt="." class="hide">
                        <span class="hidden-nav-xs m-l-sm">喵小懒</span>
                    </a>
                    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                        <i class="icon-settings"></i>
                    </a>
                </div>
                <!-- 切换侧滑栏详情页按钮 -->
                <ul class="nav navbar-nav hidden-xs">
                    <li>
                        <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
                            <i class="fa fa-indent text"></i>
                            <i class="fa fa-dedent text-active"></i>
                        </a>
                    </li>
                </ul>
                <!-- <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
                            </span>
                            <input type="text" class="form-control input-sm no-border rounded" placeholder="搜索">
                        </div>
                    </div>
                </form> -->
                <div class="navbar-right ">
                    <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                        <li class="hidden-xs">
                            <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
                                <i class="icon-bell"></i>
                                <span class="badge badge-sm up bg-danger count" style="display: inline-block;">n</span>
                            </a>
                            <section class="dropdown-menu aside-xl animated fadeInUp">
                                <section class="panel bg-white">
                                    <div class="panel-heading b-light bg-light">
                                        <strong>你有 <span class="count" style="display: inline;">n</span> 通知</strong>
                                    </div>
                                    <div class="list-group list-group-alt">
                                        <a href="#" class="media list-group-item" style="display: block;">
                                            <span class="pull-left thumb-sm text-center">
                                                <i class="fa fa-envelope-o fa-2x text-success"></i>
                                            </span>
                                            <span class="media-body block m-b-none">这是那个谁发的？？？<br>
                                                <small class="text-muted">1分钟之前</small></span></a>

                                    </div>
                                    <div class="panel-footer text-sm">
                                        <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                                        <a href="#notes" data-toggle="class:show animated fadeInRight">查看更多</a>
                                    </div>
                                </section>
                            </section>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
                                <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                                    <img src="<?php echo $res[0]['touxiang'] ?>" alt="...">
                                </span>
                                <?php echo $res[0]['nickname'] ?> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight">
                                <li>
                                    <span class="arrow top"></span>
                                    <a href="#">设置</a>
                                </li>
                                <li>
                                    <a href="#">个人信息</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="badge bg-danger pull-right">n</span>
                                        通知
                                    </a>
                                </li>
                                <li>
                                    <a href="#">帮助</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="logout">退出</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </header>
            <section>
                <section class="hbox stretch">
                    <!-- 左边侧滑栏 -->
                    <aside class="bg-black dk nav-xs aside hidden-print" id="nav">
                        <section class="vbox">
                            <section class="w-f-md scrollable">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 859px;">
                                    <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railopacity="0.2" style="overflow: hidden; width: auto; height: 859px;">

                                        <nav class="nav-primary hidden-xs">
                                            <ul class="nav bg clearfix">
                                                <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                                    目录
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-drawer icon text-primary-lter"></i>
                                                        <b class="badge bg-primary pull-right">n</b>
                                                        <span class="font-bold">数据处理中心</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="icon-list icon  text-info-dker"></i>
                                                        <span class="font-bold">图文管理</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" data-target="#content" data-el="#bjax-el" data-replace="true">
                                                        <i class="icon-social-youtube icon  text-primary"></i>
                                                        <span class="font-bold">视频管理</span>
                                                    </a>
                                                </li>
                                                <li class="m-b hidden-nav-xs"></li>
                                            </ul>
                                            <ul class="nav" data-ride="collapse">
                                                <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                                    接口
                                                </li>

                                                <li>
                                                    <a href="#" class="auto">
                                                        <span class="pull-right text-muted">
                                                            <i class="fa fa-angle-left text"></i>
                                                            <i class="fa fa-angle-down text-active"></i>
                                                        </span>
                                                        <i class="icon-grid icon">
                                                        </i>
                                                        <span>实验室</span>
                                                    </a>
                                                    <ul class="nav dk text-sm">
                                                        <li>
                                                            <a href="#" class="auto">
                                                                <i class="fa fa-angle-right text-xs"></i>
                                                                <span>样品1</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="auto">
                                                                <i class="fa fa-angle-right text-xs"></i>
                                                                <span>样品二</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>

                                        </nav>

                                    </div>

                                    <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 10px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 859px;">
                                    </div>
                                    <div class="slimScrollRail" style="width: 10px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;">
                                    </div>
                                </div>

                            </section>

                        </section>
                    </aside>

                    <!-- 主体显示区 -->
                    <section id="content">
                        <iframe src="feelData" width="100%" height="100%" frameborder="0" scrolling="yes"></iframe>
                    </section>
                </section>
            </section>
        </section>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/app.js"></script>
        <script src="js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="js/mxladmin.js"></script>
        <div id="qds" style="display:none;"></div>
    </body>

    </html>

<?php
} else {
    header("location:login");
}
?>