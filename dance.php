<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>小懒ai跳舞</title>
    <link rel="shortcut icon" href="images/iconlogo.png" />
    <link rel="stylesheet" href="css/dance.css">
    <link rel="stylesheet" href="css/navagation.css">
    <script src="js/jquery.min.js"></script>
    <style>
        .list_wapper {
            width: 890px;
            background-color: #fff;
            margin: 0 auto;
            padding: 40px;
        }

        .clearfix::after {
            display: block;
            clear: both;
            content: "";
            overflow: hidden;
            height: 1%;
        }

        .list_ul {
            margin-left: -20px;
        }

        .list_items {
            float: left;
            margin: 0 0 20px 20px;
        }

        .cover_container {
            width: 160px;
            height: 90px;
        }

        .icon_ul {
            position: absolute;
            color: white;
            bottom: 5px;
        }

        .icon_ul>li {            
            margin-left: 5px;            
            float: left;                        
        }
        .icon_ul>li span{
            font-size: 12px;                                  
        }
        .icon_ul>li svg{
            transform: translate(3px,6px);
            
        }
        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: blue;
        }

        .list_title,
        .list_user {
            font-size: 14px;
            text-overflow: ellipsis;
            word-break: break-all;
            overflow: hidden;
            width: 160px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            white-space: normal;
        }

        .list_user {
            color: #ccc;
        }
    </style>
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


    <section style="margin-top: 80px">
        <div class="list_wapper">
            <ul class="clearfix list_ul">
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
                <li class="list_items">
                    <a href="blackboard" target="_blank">
                        <div class="cover_container" style="background-image: url(&#39;./video/imgs/a1.jpg&#39;)" data-frames="10" data-row="10">
                            <div class="cover_progress_box">
                                <span class="cover_progress_bar"></span>
                            </div>
                            <ul class="icon_ul">
                                <li><svg t="1580653535993" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="837" width="20" height="20">
                                        <path d="M504.48 460.224a57.408 57.408 0 1 0 57.44 57.44 57.44 57.44 0 0 0-57.44-57.44" p-id="838" fill="#ffffff"></path>
                                        <path d="M504.544 288C314.304 288 160.064 517.6 160.064 517.6s154.24 229.664 344.48 229.664 344.48-229.664 344.48-229.664S694.784 288 504.544 288m0 373.152a143.52 143.52 0 1 1 143.552-143.552 143.552 143.552 0 0 1-143.552 143.552" p-id="839" fill="#ffffff"></path>
                                    </svg>
                                    <span>123</span></li>
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
                        <p class="list_title">这是一个充满神奇而有大胆的地方，是的就是这里</p>
                        <div class="list_user">喵小懒</div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <script src="js/index.js"></script>
    <script src="js/dance.js"></script>
    <script>
        $(".cover_container").coverPreviewModuleInit();
    </script>
</body>

</html>