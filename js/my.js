var history;
history = [];
var call = false;
var firstCall=true;
function resizePlaceholder()
{
    var divHeight = $('.bar-float').height();
    $('.placeholder').css('min-height', divHeight+'px');
}
function historyBack()
{
    var hl=history.length-1;
    if(hl>0)
    {
        history.pop();
        call=true;
         changeContent(history[hl,0], history[hl,2]);
        if(history.length==1)
        {
            $("#backArrow").css("visibility","hidden");
        }
    }
}

function changeContent(pageNo,args){
    var address="";
    $("#extra").html("");
    $.post("auth.php", {
            pageID: pageNo
        },
        function (data, status) {
            if(status!="success")return;
            if(data=="false")return;
            data=JSON.parse(data);
            $("#titleLarge").html(data.largeTitle);
            $("#titleSmall").html(data.smallTitle);
            address=data.address;
            if(call!=true)
            {
               history.push([pageNo,data,args]);
                if(firstCall!=true)
                {
                    $("#backArrow").css("visibility","visible");
                }
                firstCall=false;
            }
            else
            {
                call=false;
            }
            $.post(address,args,function (data, status) {$("#content").html(data);});
        });

}
$(function(){
    var lastScroll = 0;
    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        if (st > lastScroll)$("#float-container").slideUp(500);
        else $("#float-container").slideDown(500);
        lastScroll = st;
    });
});
	