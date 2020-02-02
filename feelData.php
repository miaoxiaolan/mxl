<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>这是情绪表</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/pageXx.css">
    <style>
        table {
            table-layout: fixed;
            word-break: break-all;
        }

        table td>span {
            display: inline-block;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;

        }

        #msg {
            display: none;
            position: fixed;
            padding: 20px;
            background-color: #ccc;
            z-index: 999;
            color: black;
        }

        .close_msg {
            width: 30px;
            height: 20px;
            cursor: pointer;
            position: absolute;
            color: red;
            top: 0;
            right: 5px;
        }

        #msg img {
            display: block;
            /* margin-left: 40%; */
            width: 30%;
        }
    </style>
</head>
<?php
require_once "DBHelper.php";
$con = new  DBHelper();
$sql = "SELECT 	cat_articleId,cat_author,cat_from, cat_articleType,cat_title, cat_date, cat_imageSrc,cat_article,clicks_ip_COUNT FROM  catfeel order by  cat_articleId desc 
 ";
$res = $con->getAll($sql);
$num = count($res);
?>

<body>
    <div id="kjz">


    </div>
    <div class="blur"></div>
    <div id="msg">
        <div class="close_msg">关闭</div>
        <span></span>
    </div>
    <table class="table text-nowrap table-bordered text-center table-hover table-responsive">
        <thead>
            <tr style="background-color: #ccc; color:black;">
                <td width="5%">序号</td>
                <td width="5%">ID</td>
                <td width="5%">作者</td>
                <td width="5%">来源</td>
                <td width="5%">标签</td>
                <td width="10%">标题</td>
                <td width="8%">时间</td>
                <td width="8%">配图</td>
                <td width="35%">文章正文</td>
                <td width="5%">点击量</td>
                <td width="4%"></td>
                <td width="4%"></td>
            </tr>
        </thead>
        <tbody>



        </tbody>
    </table>
    <div id="page">

    </div>

    <script type="text/javascript" src="js/pageXx.js"></script>
    <script>
        $.ajax({

            type: "get",

            url: 'query_server.php?page=1',

            data: {},

            dataType: "json",

            success: function(data) {

                for (var a in data) {

                    var article = data[a].cat_article;
                    if ( article != null) {
                        article = article.replace(/(\n)/g, "");
                        article = article.replace(/(\t)/g, "");
                        article = article.replace(/(\r)/g, "");
                        article = article.replace(/<\/?[^>]*>/g, "");
                        article = article.replace(/\s*/g, "");
                    }


                    $("tbody").append("<tr> " +
                        "<td > " + (1 + parseInt(a)) + " </td>" +
                        "<td> " + data[a].cat_articleId + "</td>" +
                        "<td> " + data[a].cat_author + "</td>" +
                        "<td> " + data[a].cat_from + " </td> " +
                        "<td> " + data[a].cat_articleType + "</td>" +
                        "<td> <span>" + data[a].cat_title + "</span></td> " +
                        "<td> " + data[a].cat_date + " </td>" +
                        "<td> <span>" + data[a].cat_imageSrc + "</span> </td> " +
                        "<td> <span>" + article + "</span></td> " +
                        "<td> " + data[a].clicks_ip_count + "</td>" +
                        "<td><button data-btId=" + data[a].cat_articleId + " class=\" btn btn-success btn-xs\">修改</button></td>" +
                        "<td><button data-btId=" + data[a].cat_articleId + " class=\" btn btn-danger btn-xs\">删除</button></td>" +
                        "</tr>");
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
            pageNum: <?php echo  ceil($num / 15); ?>, // 总页码
            buttonNum: 6, //要展示的页码数量
            canJump: 1, // 是否能跳转。0=不显示（默认），1=显示
            showOne: 1, //只有一页时，是否显示。0=不显示,1=显示（默认）
            callback: function(num) { //回调函数                
                $.ajax({

                    type: "get",

                    url: 'query_server?page=' + num,

                    data: {},

                    dataType: "json",

                    success: function(data) {
                        $("tbody>tr").remove();
                       
                        for (var a in data) {
                            var article = data[a].cat_article;
                            if ( article != null) {
                                article = article.replace(/(\n)/g, "");
                                article = article.replace(/(\t)/g, "");
                                article = article.replace(/(\r)/g, "");
                                article = article.replace(/<\/?[^>]*>/g, "");
                                article = article.replace(/\s*/g, "");
                            }
                            $("tbody").append("<tr> " +
                                "<td > " + (1 + parseInt(a)) + " </td>" +
                                "<td>" + data[a].cat_articleId + "</td>" +
                                "<td> " + data[a].cat_author + "</td>" +
                                "<td > " + data[a].cat_from + " </td> " +
                                "<td > " + data[a].cat_articleType + "</td>" +
                                "<td ><span>" + data[a].cat_title + "</span></td> " +
                                "<td > " + data[a].cat_date + " </td>" +
                                "<td > <span>" + data[a].cat_imageSrc + "</span></td> " +
                                "<td> <span>" + article + "</span></td> " +
                                "<td > " + data[a].clicks_ip_count + "</td>" +
                                "<td><button  data-btId=" + data[a].cat_articleId + " class=\" btn btn-success btn-xs\">修改</button></td>" +
                                "<td><button data-btId=" + data[a].cat_articleId + " class=\" btn btn-danger btn-xs\">删除</button></td>" +
                                "</tr>");
                        }



                    },

                    error: function(data) {

                    },

                    beforeSend: function(data) {


                    }

                });

            }
        });

        $("tbody").on("click", "td", function() {
            $("#msg>span").remove();
            $("#msg>img").remove();
            $("#msg").hide();
            var catText = $(this).text();
            var ImgObj = new Image();
            ImgObj.src = catText;
            setTimeout(function() {
                if (ImgObj.fileSize > 0 || (ImgObj.width > 0 && ImgObj.height > 0)) {
                    $("#msg").append("<img src=" + ImgObj.src + ">");
                    $("#msg").fadeIn();
                } else if (catText == "修改") {
                    $("#msg").hide();
                } else if (catText == "删除") {
                    $("#msg").hide();
                } else {
                    $("#msg").append("<span>" + catText + "</span>");
                    $("#msg").fadeIn();
                }
            }, 500);



        });
        $(".close_msg").click(function() {
            $("#msg").toggle();
            $("#msg>span").remove();
            $("#msg>img").remove();
        });
        $("#page").click(function() {
            $("#msg").hide();
            $("#msg>span").remove();
            $("#msg>img").remove();
        });
        $("tbody").on("click", "button", function() {
            if ($(this).text() === "修改") {

                console.log("点击了修改，获取到的ID是：" + $(this).attr("data-btId"));

            } else if ($(this).text() === "删除") {
                if (confirm("你确定要删除这列数据？")) {
                    var id = $(this).attr("data-btId");
                    $.ajax({

                        type: "get",

                        url: 'delete?catTd=' + id,

                        data: {},

                        dataType: "json",

                        success: function(data) {
                            console.log("已经删除，后悔也没用了");
                            window.location = "feelData";
                        },

                        error: function(data) {
                            console.log("不好意思操作出现错误！！！！");
                        },

                        beforeSend: function(data) {

                        }

                    });
                } else {
                    console.log("操作已取消。");
                }

            }

        });
    </script>

</body>

</html>