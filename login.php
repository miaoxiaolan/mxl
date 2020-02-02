<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>喵小懒的后台管理验证</title>
    <link rel="stylesheet" href="css/login.css">
<link rel="shortcut icon" href="images/iconlogo.png" />
</head>

<body>
    <div id="wrapper" class="login-page">
        <div id="login_form" class="form">
            <form class="register-form" style="display: none;">
                <input type="text" placeholder="用户名"  id="r_user_name">
                <input type="password" placeholder="密码" id="r_password">
                <input type="text" placeholder="电子邮件" id="r_emial">
                <button id="create" style="background-color: #6d6b6b;">暂时无法创建账户</button>
                <p class="message">已经有了一个账户? <a href="#">立刻登录</a></p>
            </form>
            <form class="login-form" style="display: block;">
                <input type="text" placeholder="用户名" autocapitalize="off" autocorrect="off" value="" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')"  id="user_name">
                <input type="password" placeholder="密码" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" id="password">
                <button id="login">登　录</button>
                <p class="message">还没有账户? <a href="#">立刻创建</a></p>
            </form>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/login.js"></script>
</body>

</html>