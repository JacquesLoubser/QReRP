var blurState=false;
var typeState=false;
var customMessages=[];
//submit
function submit()
{
	
}
//divDicover
function divDiscover(element)
{
	if(element.tagName=="DIV")
	{
		var children=element.childNodes;
		for(var i=0;i<children.length;i++)
		{
			if(children.item(i).tagName=="DIV")
			{
			divDiscover(children.item(i));
			}
			if(children.item(i).tagName=="INPUT")
			{
				addListener(children.item(i));
				
			}
		}
	}
}
//create
function create(elementID)
{
	var element = document.getElementById(elementID);
	if(element.tagName=="DIV")
	{
		divDiscover(element);
	}
	else if(element.tagName=="INPUT")
	{
		addListener(element);
	}
}
//addListener
function addListener(element)
{
	$(element).after("<span></span>");
if(blurState==true)
{
	addEventListener(element,'blur',blurListen);
}
if(typeState==true)
{
	addEventListener(element,'keydown',changeListen);
}
}
//validate
function validate(elementID)
{
	var element = document.getElementById(elementID);
	if(element.tagName=="FORM")
	{
		var children=element.childNodes;
		for(var i=0;i<children.length;i++)
		{
			if(children.item(i).tagName=="INPUT")
			{
				verifyField(children.item(i));
				
			}
		}
	}
	else if(element.tagName=="INPUT")
	{
		verifyField(element);
	}
}

function verifyField(field,message)
{
	if(field.disabled=!"")
	{
		$(field).next("span").html("");
		$(field).removeClass("warn");
		$(field).removeClass("error");
		$(field).removeClass("success");
		$(field).next("span").removeClass("warn");
		$(field).next("span").removeClass("error");
		$(field).next("span").removeClass("success");
		return;	
	}
	$(field).next("span").html("");
	var type=field.type;
	var pattern=field.pattern;
	var required=field.required;
	if(type=="email")
	{
			//Required
			if(required==true)
			{
					if(field.value=="")
					{
						addClass(field,message);
						errorMessage(field,message,"required");
						return;
					}
			}
			//Valid
			var regex=RegExp("^[a-z0-9_.\-]+@[a-z0-9.\-]+([\.]{1}[a-z0-9]+){1,4}$","i");
			var test=regex.test(field.value);
			if(test==false)
			{
				addClass(field,message);
				errorMessage(field,message,"valid");
				return;
			}
	}
	
	
	
}
//Add Event Listener
var addEventListener = (function() {
    if(document.addEventListener) {
        return function(element, event, handler) {
            element.addEventListener(event, handler, false);
        };
    }
    else {
        return function(element, event, handler) {
            element.attachEvent('on' + event, handler);
        };
    }
}());
var inputClassChange=false;
var messageClassChange=false;
var classWarningMessage="";
var classWarningControl="";
var classErrorMessage="";
var classErrorControl="";
var classSuccessMessage="";
var classSuccessControl="";

var emailValidMessage="Please enter a valid email address";
var emailRequiredMessage="This field is required";
var checkboxRequiredMessage="This field is required";
var dateRequiredMessage="This field is required";
var dateMinMessage="This cannot be less than the minimum";
var dateMaxMessage="This cannot be more than the maximum";
var selectRequiredMessage="Please select an item";
var textPatternMessage="This field does not match the pattern";
var textRequiredMessage="This field is required";

//ChangeClass
function addClass(element,state)
{
	if(inputClassChange==true)
	{
		if(state="success")
		{
			$(field).removeClass("warn");
			$(field).removeClass("error");
			$(field).addClass("success");	
		}
		else if(state="warning")
		{
			$(field).removeClass("warn");
			$(field).removeClass("error");
			$(field).addClass("success");	
		}
		else if(state="error")
		{
			$(field).removeClass("warn");
			$(field).removeClass("error");
			$(field).addClass("success");	
		}
	}
	if(messageClassChange==true)
	{
		if(state="success")
		{
			$(field).next("span").removeClass("warn");
			$(field).next("span").removeClass("error");
			$(field).next("span").addClass("success");	
		}
		else if(state="warning")
		{
			$(field).next("span").removeClass("warn");
			$(field).next("span").removeClass("error");
			$(field).next("span").addClass("success");	
		}
		else if(state="error")
		{
			$(field).next("span").removeClass("warn");
			$(field).next("span").removeClass("error");
			$(field).next("span").addClass("success");	
		}
	}
}
//states
function blurListen()
{
	verifyField(this,"error");
}
function changeListen()
{
	verifyField(this,"warning");
}
function setBlur(state)
{
blurState=state;	
}
function setChange(state)
{
	typeState=state;
}
function errorMessage(field,state,error)
{
	var custom=customMessage(field,error);
	var type=field.type;
	if(type=="email" && custom!=true)
	{
			if(error=="required")
			{
				$(field).next("span").html(emailRequiredMessage);
			}
			else if(error=="valid")
			{
				$(field).next("span").html(emailValidMessage);
			}
	}
}
function customMessage(field,error)
{
	for(var i=0;i<customMessages.length;i++)
	{
	if(customMessages[i][0]==field.id)
	{
	if(customMessages[i][1]==error)
	{
		$(field).next("span").html(customMessages[i][2]);
		return true;
	}
	}
	}
	return false;
}
function setCustom(id,error,message)
{
if(id !=""&& error!=""&& message!="")
{
customMessages.push([id,error,message]);
}
}