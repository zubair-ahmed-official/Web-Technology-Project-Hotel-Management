function get(id){
	return document.getElementById(id);
}
function checkRoom(e){
	var xhr = new XMLHttpRequest();
		xhr.open("GET","check_roomno.php?RoomNo="+e.value,true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				if(this.responseText.trim() == "invalid"){
					get("err_RoomNo").innerHTML = "Room no Exists";
				}
				else{
					get("err_RoomNo").innerHTML = "";
				}
			}
		};
		xhr.send();
}