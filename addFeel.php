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
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>添加文章数据</title>
        <link rel="stylesheet" href="css/addFeel.css">

    </head>

    <body>
        <section>



            <div class="left">

                <div class="view_img">
                    <span>设置封面配图</span>
                    <img src="" id="next" alt="" />
                </div>
               
                <a class="fileBg" href="javascript:;">选择图片
                    <input type="file" id="file" />
                </a>
                <input placeholder="输入标题" type="text" id="catTitle">                
                <input placeholder="写个标签吧" type="text" id="catType">                
                
            </div>
            <div class="right">
                <div id="div1" class="toolbar"></div>
                <div id="div2" class="text"></div>
            </div>            
                
                <input type="hidden" id="compressFile" />
                <input id="fileSm" type="submit" value="提交" />
            

            


        </section>        
        <script src="js/jquery.min.js"></script>
        <script src="js/wangEditor.min.js"></script>
        <script src="js/addFeel.js"></script>
        <script>
            var E = window.wangEditor;
            var editor = new E('#div1', '#div2');
            editor.customConfig.menus = [
                'head',
                'bold',
                'fontSize',
                'fontName',
                'italic',
                'underline',
                'strikeThrough',
                'foreColor',
                'backColor',
                'link',
                'list',
                'justify',
                'quote',
                'emoticon',
                'undo',
                'redo'
            ];
            //保存图片base64
            editor.customConfig.uploadImgShowBase64 = true;
            editor.customConfig.showLinkImg = false;
            editor.customConfig.uploadImgMaxLength = 1;
            //上传服务器
            // editor.customConfig.uploadImgServer = '/upload';          
            editor.create();           
        </script>
    </body>

    </html>


<?php
} else {
    header("location:login");
}
?>