function get (id) {
return document.getElementById (id) ;
}
function customerIdExisting(e) 
{
	//alert(e.value);

var xhr = new XMLHttpRequest();
xhr.open("GET","customerIdExisting.php?cid="+e.value,true);
xhr.onreadystatechange=function() 
{

if(this.readyState == 4 && this.status == 200)
{
if (this.responseText.trim() == "Cid exits")
{
get("err_cid").innerHTML = "";
}
else
{
   get("err_cid").innerHTML = "Customer ID doesn't exist";
}
}
};

xhr.send();
}