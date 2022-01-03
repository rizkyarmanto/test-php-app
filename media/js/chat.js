jQuery(document).ready(function($) {
    if(active=='Y')
        setInterval(function(){get_chat_messages()}, 2500);

    if (uid=='0' || uid==''){
        var controller = 'institusi/chat'
    }else{
        var controller = 'kasn/chat'
    }

    $('#close_chat').click(function(){
        $.post(base_url+controller+'/close_chat_message',{chat_id : chat_id},
                function(data){
                    if(data.st=='1'){
                        location.reload();
                    }
            }, 'json');
    });

    $('#submit_message').click(function(){
        var content = $('#chat_message').val();
        if(content!=''){
            $.post(base_url+controller+'/ajax_add_chat_message',{content : content, chat_id : chat_id, uid : uid, uid_institusi : uid_institusi},
                function(data){
                    if(data.st=='1'){
                        var current = $('#chat_viewport').html();
                        $('#chat_viewport').html(current+data.msg);
                    }
            }, 'json');
            $('#chat_message').val('');
            $('#chat_message').select();
        }
    })

    function get_chat_messages(){
        if (uid=='0' || uid==''){
            var controller = 'institusi/chat'
        }else{
            var controller = 'kasn/chat'
        }
        $.post(base_url+controller+'/ajax_get_chat_message', {chat_id : chat_id}, 
            function(data){
                if(data.st=='1'){
                    var current = $('#chat_viewport').html();
                    $('#chat_viewport').html(current+data.msg);
                }
        },'json');
    }

    get_chat_messages();

});