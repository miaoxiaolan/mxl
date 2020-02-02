function check_login() {
    var name = $("#user_name").val();
    var pass = $("#password").val();

    
    var xmlhttp;
    var va = "user=" + name + "&pwd=" + pass;
    
    if (window.XMLHttpRequest) {
        //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // IE6, IE5 浏览器执行代码
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.open("post", "login_v");
    
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(va);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == "true") {

                window.location.href = "mxladmin"

            } else {
                $("#user_name").val("");
                $("#password").val("");
                $("#login_form").removeClass('shake_effect');
                setTimeout(function () {
                    $("#login_form").addClass('shake_effect')
                }, 1);
            }

        }
    }

        
    }

function check_register() {
    var name = $("#r_user_name").val();
    var pass = $("#r_password").val();
    var email = $("r_email").val();
    if (name != "" && pass == "" && email != "") {

        $("#user_name").val("");
        $("#password").val("");
    } else {
        $("#login_form").removeClass('shake_effect');
        setTimeout(function () {
            $("#login_form").addClass('shake_effect')
        }, 1);
    }
}
$(function () {
    $("#create").click(function () {
        check_register();
        return false;
    })
    $("#login").click(function () {
        check_login();
        return false;
    })
    $('.message a').click(function () {
        $('form').animate({
            height: 'toggle',
            opacity: 'toggle'
        }, 'slow');
    });
})