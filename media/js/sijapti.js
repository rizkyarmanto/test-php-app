jQuery.fn.ForceNumericOnly = function() {
    return this.each(function() {
        $(this).keydown(function(e) {
            var t = e.charCode || e.keyCode || 0;
            return 8 == t || 188 == t || 9 == t || 13 == t || 46 == t || 110 == t || 190 == t || t >= 35 && 40 >= t || t >= 48 && 57 >= t || t >= 96 && 105 >= t
        })
    })
}
var createCookie = function(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}
$(function(){
    var json_str = getCookie('popup_chat');
    if(json_str=='')json_str='{}';
    var arr1 = JSON.parse(json_str);
    for (var i in arr1){
        $.post(base_url+controller+'/open_popup',{data:i},
            function(data){
                if(data.st=='1'){
                    data.msg = data.msg.replace(/\n/g, "<br />");
                    $('#chat_box').append(data.msg);
                    for (var x in arr1){
                        if(arr1[x]==0){
                            $("#chat"+x+" > .panel.panel-chat").removeClass('normal').addClass('mini');
                            $("#chat"+x+" > .panel.panel-chat > .panel-body").animate({height: "0"}, 500);
                            $("#chat"+x+" > .panel.panel-chat > .panel-footer").animate({height: "0"}, 500);
                            $("#chat"+x+" > .panel.panel-chat > .panel-footer").fadeOut('fast');
                            $("#chat"+x+" > .panel.panel-chat > .panel-body").hide();
                                $("#chat"+x+" > .panel.panel-chat > .panel-footer").hide();
                        }
                        $("#chat"+x+" > .panel.panel-chat > .panel-body").animate({ scrollTop: 100000 }, "slow");
                    }
                }
        }, 'json');
        }
    $( "#chat_box" ).on( "click",".panel.panel-chat > .panel-heading > .chatMinimize", function() {
        var i = 0;
        if($(this).parent().parent().hasClass('mini')){
            $(this).parent().parent().removeClass('mini').addClass('normal');
            $(this).parent().parent().find('.panel-body').animate({height: "250px"}, 500).show();
            $(this).parent().parent().find('.panel-footer').animate({height: "75px"}, 500).show();
            i = 1;
        }else{
            $(this).parent().parent().removeClass('normal').addClass('mini');
            $(this).parent().parent().find('.panel-body').animate({height: "0"}, 500);
            $(this).parent().parent().find('.panel-footer').animate({height: "0"}, 500);
            $(this).parent().parent().find('.panel-footer').fadeOut('fast');
            setTimeout(function() {
                $(this).parent().parent().find('.panel-body').hide();
                $(this).parent().parent().find('.panel-footer').hide();
            }, 501);
            i = 0;
        }
        var arr = {},
        json_str = getCookie('popup_chat');
        if(json_str=='')json_str='{}';
        arr = JSON.parse(json_str);
        arr[$(this).parent().parent().parent().attr('data-id')] = i;
        json_str = JSON.stringify(arr);
        document.cookie = "popup_chat="+json_str;
    });

    $( "#chat_box" ).on( "click",".panel.panel-chat > .panel-heading > .chatClose", function() {
        $(this).parent().parent().parent().remove();
        var arr = {},
        json_str = getCookie('popup_chat');
        if(json_str=='')json_str='{}';
        arr = JSON.parse(json_str);
        delete arr[$(this).parent().parent().parent().attr('data-id')];
        json_str = JSON.stringify(arr);
        document.cookie = "popup_chat="+json_str;
    });

    $( "#chat_box" ).on( "click",".submit_message", function() {
        var chat_id = $(this).parent().parent().parent().attr('data-id'), ele = $(this).parent().parent().parent();
        var content = $(this).siblings('textarea');
        if(content.val()!=''){
            $.post(base_url+controller+'/ajax_add_chat_message_popup',{content : content.val(), chat_id : chat_id, uid : opsi1, uid_institusi : opsi2},
                function(data){
                    if(data.st=='1'){
                        content.val('');
                        data.msg = data.msg.replace(/\n/g, "<br />");
                        ele.children('.panel.panel-chat').children('.panel-body').append(data.msg);
                        ele.children('.panel.panel-chat').children('.panel-body').animate({ scrollTop: 100000 }, "slow");
                    }
            }, 'json');
        }
    });

    setInterval(function(){
        json_str = getCookie('popup_chat');
        if(json_str.length === 0){

        }else{
            arr_aktif = JSON.parse(json_str);
            for(var i in arr_aktif){
                var id = i,chat_id=$('#chat'+id);
                $.post(base_url+controller+'/ajax_get_chat_message_popup',{chat_id : chat_id.attr('data-id')},
                    function(data){
                        if(data.st=='1'){
                            if(data.msg!=''){
                                data.msg = data.msg.replace(/\n/g, "<br />");
                                chat_id.children('.panel.panel-chat').children('.panel-body').append(data.msg);
                                chat_id.children('.panel.panel-chat').children('.panel-body').animate({ scrollTop: 100000 }, "slow");
                            }
                        }
                }, 'json');
            }
        };
    }, 2500);
})