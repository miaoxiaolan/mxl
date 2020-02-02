;
(function ($) {
    $.fn.extend({
        coverPreviewModuleInit: function () {
            var $this = this,
                option = {
                    row: $this.attr('data-row') || 10,
                    frames: $this.attr('data-frames') || 10
                };
            $this.on('mousemove', function (e) {
                var $that = $(this),
                    box_width = $that.outerWidth(),
                    box_height = $that.outerHeight(),
                    currentIndex = Math.floor(e.offsetX / (box_width / option.frames)),
                    currentY = Math.floor(currentIndex / option.row),
                    currentX = Math.floor(currentIndex - (currentY * option.row));
                $that.css({
                    'background-position': (-currentX * box_width) + 'px ' + (-currentY * box_height) + 'px'
                });                
                $that.find('.cover_progress_bar').css({
                    'width': (e.offsetX / box_width * 100) + '%'
                });
                $that.find('.icon_ul').css({
                    'display': 'none'
                });                
                $that.next('p').css({
                    'color': 'blue' ,
                    '-webkit-line-clamp': '2'                   
                });
                $that.siblings('.list_user').hide();
            });
            $this.on('mouseleave', function () {
                var $that = $(this);
                $that.css({
                    'background-position': '0px 0px'
                });
                $that.find('.cover_progress_bar').css({
                    'width': '0'
                });
                $that.find('.icon_ul').css({
                    'display': 'block'
                });
                $that.next('p').css({
                    'color': 'black' ,
                    '-webkit-line-clamp': '1'  
                });
                $that.siblings('.list_user').show();
            });
        }
    })
})(jQuery)