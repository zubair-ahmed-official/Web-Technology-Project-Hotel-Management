function get (id) {
return document.getElementById (id) ;
}
function checkRoomAvailability(e) 
{
	//alert(e.value);

var xhr = new XMLHttpRequest();
xhr.open("GET","checkAvailability.php?room_no="+e.value,true);
xhr.onreadystatechange=function() 
{

if(this.readyState == 4 && this.status == 200)
{
if (this.responseText.trim() == "Room Booked")
{
get("err_room_no").innerHTML = "Room is Booked";
//get("err_RoomNo").innerHTML = "Rooms is booked";
}
else
{
   get("err_room_no").innerHTML = "Room is not Booked";
   
}
}
};

xhr.send();
}