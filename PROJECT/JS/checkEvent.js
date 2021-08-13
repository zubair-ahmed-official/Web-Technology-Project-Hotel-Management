
function get (id) {
return document.getElementById (id) ;;
}
function checkEventname(e) 
{
	//alert(e.value);

var xhr = new XMLHttpRequest();
xhr.open("GET","checkEvent.php?ename="+e.value,true);
xhr.onreadystatechange=function() 
{

if(this.readyState == 4 && this.status == 200)
{
if (this.responseText.trim() == "Event exists")
{
get("err_ename").innerHTML = "Event Found";
}
else
{
   get("err_ename").innerHTML = "Event doesn't Exist";
}
}
};

xhr.send();
}