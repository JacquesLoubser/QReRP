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
				var  input=data.split('|'); 
				$("#titleLarge").html(input[1]);
				$("#titleSmall").html(input[2]);                 
				$.post(input[0], {data:true},function (data, status) {$("#content").html(data);});
                });
	  
    }
	