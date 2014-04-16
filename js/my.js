function resizePlaceholder()
{
	var divHeight = $('.bar-float').height(); 
$('.placeholder').css('min-height', divHeight+'px');
}
function back()
{
window.history.back();
}
function changeContent(pageNo){
      $.post("auth.php", {
                   pageID: pageNo
                },
                function (data, status) {                    
						$("#content").html(data);
						
                });
	  
    }
	