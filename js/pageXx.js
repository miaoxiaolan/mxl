;
(function($, window, document, undefined) {
    'use strict';
    
    

    function Paging(element, options) {
        this.element = element;
        this.options = { nowPage: options.nowPage || 1, pageNum: options.pageNum, canJump: options.canJump || 0, showOne: options.showOne || 1, buttonNum: (options.buttonNum >= 5 ? options.buttonNum : 5) || 7, callback: options.callback };
        this.init();
    }
    Paging.prototype = {
        constructor: Paging,
        init: function() {
            this.createHtml();
            this.bindClickEvent();
            this.disabled();
        },
        createHtml: function() {
            var me = this;
            var nowPage = this.options.nowPage;
            var pageNum = this.options.pageNum;
            var buttonNum = this.options.buttonNum;
            var canJump = this.options.canJump;
            var showOne = this.options.showOne;
            var content = [];
            nowPage = nowPage > pageNum ? pageNum : nowPage;
            nowPage = nowPage < 1 ? 1 : nowPage;
            if (showOne && pageNum === 1) { return ''; }
            content.push("<ul>");
            content.push("<li class='xx-prevPage'>上一页</li>");
            if (pageNum <= buttonNum) {
                for (var i = 1; i <= pageNum; i++) {
                    if (nowPage !== i) {
                        content.push("<li>" + i + "</li>");
                    } else {
                        content.push("<li class='xx-active'>" + i + "</li>");
                    }
                }
            } else if (nowPage <= Math.floor(buttonNum / 2)) {
                for (var i = 1; i <= buttonNum - 2; i++) {
                    if (nowPage !== i) {
                        content.push("<li>" + i + "</li>");
                    } else {
                        content.push("<li class='xx-active'>" + i + "</li>");
                    }
                }
                content.push("<li class='xx-disabled'>...</li>");
                content.push("<li>" + pageNum + "</li>");
            } else if (
                pageNum - nowPage <= Math.floor(buttonNum / 2)) {
                content.push("<li>" + 1 + "</li>");
                content.push("<li class='xx-disabled'>...</li>");
                for (var i = pageNum - buttonNum + 3; i <= pageNum; i++) {
                    if (nowPage !== i) {
                        content.push("<li>" + i + "</li>");
                    } else {
                        content.push("<li class='xx-active'>" + i + "</li>");
                    }
                }
            } else {
                if (nowPage - Math.floor(buttonNum / 2) <= 0) {
                    for (var i = 1; i <= Math.floor(buttonNum / 2); i++) {
                        if (nowPage !== i) {
                            content.push("<li>" + i + "</li>");
                        } else {
                            content.push("<li class='xx-active'>" + i + "</li>");
                        }
                    }
                } else {
                    content.push("<li>" + 1 + "</li>");
                    content.push("<li class='xx-disabled'>...</li>");
                    for (var i = nowPage - Math.floor(buttonNum / 2) + (buttonNum % 2 == 0 ? 3 : 2); i <= nowPage; i++) {
                        if (nowPage !== i) {
                            content.push("<li>" + i + "</li>");
                        } else {
                            content.push("<li class='xx-active'>" + i + "</li>");
                        }
                    }
                }
                if (pageNum - nowPage <= 0) {
                    for (var i = nowPage + 1; i <= pageNum; i++) {
                        content.push("<li>" + i + "</li>");
                    }
                } else {
                    for (var i = nowPage + 1; i <= nowPage + Math.floor(buttonNum / 2) - 2; i++) {
                        content.push("<li>" + i + "</li>");
                    }
                    content.push("<li class='xx-disabled'>...</li>");
                    content.push("<li>" + pageNum + "</li>");
                }
            }
            content.push("<li class='xx-nextPage'>下一页</li>");
            if (canJump) {
                content.push("<li class='xx-jumpText xx-disabled'>跳转到<input type='number' id='xxJumpNum'>页</li>");
                content.push("<li class='xx-jumpButton'>确定</li>");
            }
            content.push("</ul>");
            me.element.html(content.join(''));
            setTimeout(function() { me.disabled(); }, 20);
        },
        bindClickEvent: function() {
            var me = this;
            me.element.off('click', 'li');
            me.element.on('click', 'li', function() {
                var cla = $(this).attr('class');
                var num = parseInt($(this).html());
                var nowPage = me.options.nowPage;
                if ($(this).hasClass('xx-disabled') || cla === 'xx-jumpText') { return ''; }
                if (cla === 'xx-prevPage') {
                    if (nowPage !== 1) {
                        me.options.nowPage -= 1;
                    }
                } else if (cla === 'xx-nextPage') {
                    if (nowPage !== me.options.pageNum) {
                        me.options.nowPage += 1;
                    }
                } else if (cla === 'xx-jumpButton') {
                    me.options.nowPage = Number($('#xxJumpNum').val());
                } else {
                    me.options.nowPage = num;
                }
                me.createHtml();
                if (me.options.callback) {
                    me.options.callback(me.options.nowPage);
                }
            });
        },
        disabled: function() {
            var me = this;
            var nowPage = me.options.nowPage;
            var pageNum = me.options.pageNum;
            if (nowPage === 1) {
                me.element.children().children('.xx-prevPage').addClass('xx-disabled');
            } else if (nowPage === pageNum) {
                me.element.children().children('.xx-nextPage').addClass('xx-disabled');
            }
        }
    }
    $.fn.paging = function(options) {
        return new Paging($(this), options);
    };
    
    $.fn.coverPreviewModuleInit=function () {        
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
    
})(jQuery, window, document);




