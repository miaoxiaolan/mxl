var bili = 0.7;
var quality = 0.7;
$(function () {
    $("#file").on('change', function () {


        var filePath = this.value;
        var index = filePath.lastIndexOf(".");
        var ext = filePath.substr(index + 1);
        if (isAssetTypeAnImage(ext)) {
            var file = this.files[0];
            var ready = new FileReader();
            ready.readAsDataURL(file);
            ready.onload = function (e) {
                var base64Img = e.target.result;
                compress(base64Img)
                $(".view_img span").hide() = true;
            }
        } else {
            alert("请选择图片格式的文件，例如：'png', 'jpg', 'jpeg', 'bmp', 'gif', 'webp', 'psd', 'svg', 'tiff'");

        }
    });
    $('#fileSm').on('click', function () {
        var cat_title = $('#catTitle').val();
        var compress_file = $('#compressFile').val();
        var edi = editor.txt.html();
        var cat_type=$('#catType').val();
        if (cat_title != "" && compress_file != "" && edi != "" && cat_type != "") {
            $.ajax({
                url: "photochuli",
                data: {
                    'cat_title': cat_title,
                    'compress_file': compress_file,
                    'edi': edi,
                    'cat_type':cat_type
                },
                type: 'post',
                dataType: 'html',
                success: function () {
                    window.location.href = "mxladmin"
                }

            });
        } else {
            alert("注意标题、图片、标签、文章都不许为空哦！")
        }

    });
})

function compress(base64Img) {
    var img = new Image();
    img.src = base64Img;
    img.onload = function () {
        var newWidth = img.width * bili;
        var newHeight = img.height * bili;
        var canvas = document.createElement("canvas");
        var ctx = canvas.getContext("2d");
        canvas.width = newWidth;
        canvas.height = newHeight;
        ctx.drawImage(img, 0, 0, newWidth, newHeight);
        var newBase64 = canvas.toDataURL("image/jpeg", quality);
        $("#next").attr("src", newBase64);
        $("#compressFile").val(newBase64);
    }
}



function isAssetTypeAnImage(ext) {
    return [
        'png', 'jpg', 'jpeg', 'bmp', 'gif', 'webp', 'psd', 'svg', 'tiff'
    ].
    indexOf(ext.toLowerCase()) !== -1;
}