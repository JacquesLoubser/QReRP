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
	 $(function(){
      var lastScroll = 0;
      $(window).scroll(function(event){
          var st = $(this).scrollTop();
        if (st > lastScroll){
           $("#float-container").slideUp(500);
          }
          else {
             $("#float-container").slideDown(500);
          }
         lastScroll = st;
      });
    });
	