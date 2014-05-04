var history = [,];
var call = false;
var firstCall=true;
function resizePlaceholder()
{
	var divHeight = $('.bar-float').height(); 
$('.placeholder').css('min-height', divHeight+'px');
}
function historyBack()
{
var historyLength=history.length;
if(historyLength>2)
{
var  input=history[historyLength-2].split('|');
history.pop();
call=true;
changeContent(input[0]);
var historyLength2=history.length;
if(historyLength2==2)
{
$("#backArrow").css("visibility","hidden");	
}
}
}

function changeContent(pageNo){
      $.post("auth.php", {
                   pageID: pageNo
                },
                function (data, status) {  
				var  input=data.split('|'); 
				$("#titleLarge").html(input[1]);
				$("#titleSmall").html(input[2]);
				if(call!=true)
				{
				history.push(pageNo+"|"+input[1]+"|"+input[2]);
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
	