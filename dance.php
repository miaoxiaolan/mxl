<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>小懒ai跳舞</title>
    <link rel="shortcut icon" href="images/iconlogo.png" />
    
    <link rel="stylesheet" href="css/navagation.css"/>
    <link rel="stylesheet" type="text/css"  href="css/videodance.css"/>
    <link rel="stylesheet" href="css/pageXx.css"/>   
    <style>   
    </style>
</head>

<body>
    <?php
    require_once "DBHelper.php";
    $con = new  DBHelper();
    $sql = " select * FROM  catvideo order by  v_id desc ";

    $res = $con->getAll($sql);
    $num = count($res);
    ?>
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
        <div class="list_wapper" style="margin-top: 80px">
            <ul id="v-data" class="clearfix list_ul">


            </ul>

        </div>
        <div id="page"></div>
    </section>

    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/pageXx.js"></script>

    <script>
        $.ajax({

            type: "get",

            url: 'vquery_server.php?page=1',

            async: false,

            data: {},

            dataType: "json",

            success: function(data) {

                for (var a in data) {

                    $("#v-data").append(`
                    <li class="list_items">
                    <a href="blackboard?aid=` + data[a].v_id + `" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;` + data[a].video_imgs + `&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>` + data[a].v_count + `</span></li>
                                <li><svg t="1580654540890" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2927" width="20" height="20">
                                        <path d="M386.304 761.856a33.792 33.792 0 0 1-33.664-36.48l-0.128-54.912H307.2c-35.84 0-65.024-29.184-65.024-65.024V256.256c0-35.84 29.184-65.024 65.024-65.024h527.104c35.84 0 65.024 29.184 65.024 65.024V605.44c0 35.84-29.184 65.024-65.024 65.024H550.016l-147.072 87.04c-0.512 0.384-1.152 0.64-1.792 0.896-4.736 2.304-9.856 3.456-14.848 3.456z m17.408-106.24v41.728l124.672-73.728c2.176-1.28 4.48-2.176 6.912-2.816l3.712-0.896c2.048-0.512 4.096-0.768 6.144-0.768h289.024c7.552 0 13.824-6.144 13.824-13.824V256.256c0-7.552-6.144-13.824-13.824-13.824H307.2c-7.552 0-13.824 6.144-13.824 13.824V605.44c0 7.552 6.144 13.824 13.824 13.824h62.848c9.984 0 19.328 4.352 25.728 11.904 5.888 6.784 8.704 15.616 7.936 24.448z" p-id="2928" fill="#ffffff"></path>
                                        <path d="M441.088 421.504m-50.56 0a50.56 50.56 0 1 0 101.12 0 50.56 50.56 0 1 0-101.12 0Z" p-id="2929" fill="#ffffff"></path>
                                        <path d="M573.056 421.504m-50.56 0a50.56 50.56 0 1 0 101.12 0 50.56 50.56 0 1 0-101.12 0Z" p-id="2930" fill="#ffffff"></path>
                                        <path d="M705.024 421.504m-50.56 0a50.56 50.56 0 1 0 101.12 0 50.56 50.56 0 1 0-101.12 0Z" p-id="2931" fill="#ffffff"></path>
                                    </svg>
                                    <span>234</span>
                                </li>
                            </ul>
                        </div>
                        <p class="list_title">` + data[a].video_describe + `</p>
                        <div class="list_user">` + data[a].video_user + `</div>
                    </a>
                </li>
                `);


                }


            },

            error: function(data) {


            },

            beforeSend: function(data) {

            }

        });

        // xxPaging.js 使用方法
        $("#page").paging({
            nowPage: 1, // 当前页码
            pageNum: <?php echo  ceil($num / 30) ?>, // 总页码
            buttonNum: 6, //要展示的页码数量
            canJump: 1, // 是否能跳转。0=不显示（默认），1=显示
            showOne: 1, //只有一页时，是否显示。0=不显示,1=显示（默认）
            callback: function(num) { //回调函数

                $.ajax({

                    type: "get",

                    url: 'vquery_server?page=' + num,

                    async: false,

                    data: {},

                    dataType: "json",

                    success: function(data) {
                        $(".list_items").remove();
                        for (var a in data) {
                            $("#v-data").append(`
                            <li class="list_items">
                    <a href="blackboard?aid=` + data[a].v_id + `" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;` + data[a].video_imgs + `&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>` + data[a].v_count + `</span></li>
                                <li><svg t="1580654540890" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2927" width="20" height="20">
                                        <path d="M386.304 761.856a33.792 33.792 0 0 1-33.664-36.48l-0.128-54.912H307.2c-35.84 0-65.024-29.184-65.024-65.024V256.256c0-35.84 29.184-65.024 65.024-65.024h527.104c35.84 0 65.024 29.184 65.024 65.024V605.44c0 35.84-29.184 65.024-65.024 65.024H550.016l-147.072 87.04c-0.512 0.384-1.152 0.64-1.792 0.896-4.736 2.304-9.856 3.456-14.848 3.456z m17.408-106.24v41.728l124.672-73.728c2.176-1.28 4.48-2.176 6.912-2.816l3.712-0.896c2.048-0.512 4.096-0.768 6.144-0.768h289.024c7.552 0 13.824-6.144 13.824-13.824V256.256c0-7.552-6.144-13.824-13.824-13.824H307.2c-7.552 0-13.824 6.144-13.824 13.824V605.44c0 7.552 6.144 13.824 13.824 13.824h62.848c9.984 0 19.328 4.352 25.728 11.904 5.888 6.784 8.704 15.616 7.936 24.448z" p-id="2928" fill="#ffffff"></path>
                                        <path d="M441.088 421.504m-50.56 0a50.56 50.56 0 1 0 101.12 0 50.56 50.56 0 1 0-101.12 0Z" p-id="2929" fill="#ffffff"></path>
                                        <path d="M573.056 421.504m-50.56 0a50.56 50.56 0 1 0 101.12 0 50.56 50.56 0 1 0-101.12 0Z" p-id="2930" fill="#ffffff"></path>
                                        <path d="M705.024 421.504m-50.56 0a50.56 50.56 0 1 0 101.12 0 50.56 50.56 0 1 0-101.12 0Z" p-id="2931" fill="#ffffff"></path>
                                    </svg>
                                    <span>234</span>
                                </li>
                            </ul>
                        </div>
                        <p class="list_title">` + data[a].video_describe + `</p>
                        <div class="list_user">` + data[a].video_user + `</div>
                    </a>
                </li>
                `);


                        }


                    },

                    error: function(data) {

                    },

                    beforeSend: function(data) {



                    }

                });


            }

        })

        $(".cover_container").coverPreviewModuleInit();
    </script>

</body>

</html>