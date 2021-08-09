function get (id) {
return document.getElementById (id) ;
}
function checkRoomExisting(e) 
{
	//alert(e.value);

var xhr = new XMLHttpRequest();
xhr.open("GET","roomExisting.php?room_no="+e.value,true);
xhr.onreadystatechange=function() 
{

if(this.readyState == 4 && this.status == 200)
{
if (this.responseText.trim() == "Room Exists")
{
get("err_room_no").innerHTML = "";
}
else
{
   get("err_room_no").innerHTML = "Room does not Exist";
}
}
};

xhr.send();
}