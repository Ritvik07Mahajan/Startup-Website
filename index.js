function clearerrors(){

errors=document.getElementsByClassName('formerror');
for(let item of errors){

    item.innerHTML="";
}

}

function seterror(id,error)
{

    element=document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML=error;
}

function validateform(){

clearerrors();

var returnval=true;

var name=document.forms['myform']["name"].value;
if(name.length<=1)
{
    seterror("name","*Length of name is too short!!");
    returnval=false;
}


var email=document.forms['myform']["email"].value;
if(email.length>=50)
{
    seterror("email","*Length of name is too long!!");
    returnval=false;
}


var phone=document.forms['myform']["phone"].value;
if(phone.length!=10)
{
    seterror("phone","*Phone Number should of 10 digits!!");
    returnval=false;
}

return returnval;

}
