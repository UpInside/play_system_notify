$(function(){

    $('.call_trigger_blue').click(function(){

        var param = [];
        param['title'] = "Artigo cadastrado com sucesso!";
        param['icon'] = "icon-mug";
        param['color'] = "green";
        param['timer'] = 3000;

        triggerNotify(param);
    });

    $('html').on('submit', 'form', function(){

        $(this).ajaxSubmit({
            url: 'controller.php',
            data: {action: 'notify_status'},
            type: 'POST',
            dataType: 'json',
            success: function (data) {

                if(data.notify){
                    trigger(data.notify);
                }
            }
        });
        return false;
    });

    function trigger(data) {
        if(data[0]){
            $.each(data, function(key, value){
                triggerNotify(data[key]);
            })
        } else {
            triggerNotify(data);
        }
    }

    function triggerNotify(data) {

        var triggerContent = "<div class='trigger_notify trigger_notify_" + data.color + "' style='left: 100%; opacity: 0;'>";
        triggerContent += "<p class='" + data.icon + "'>" + data.title + "</p>";
        triggerContent += "<span class='trigger_notify_timer'></span>";
        triggerContent += "</div>";

        if(!$('.trigger_notify_box').length){
            $('body').prepend("<div class='trigger_notify_box'></div>");
        }

        $('.trigger_notify_box').prepend(triggerContent);
        $('.trigger_notify').stop().animate({'left': '0', 'opacity': '1'}, 200, function(){
            $(this).find('.trigger_notify_timer').animate({'width': '100%'}, data.timer, 'linear', function(){
                $(this).parent('.trigger_notify').animate({'left': '100%', 'opacity': '0'}, function(){
                    $(this).remove();
                });
            });
        });

        $('body').on('click', '.trigger_notify', function(){
            $(this).animate({'left': '100%', 'opacity': '0'}, function(){
                $(this).remove();
            });
        });
    }

    //triggerNotify();
});