function get(id)
	{
		return document.getElementById(id);
	}

function searchRoomAll(e)
	{
		var xhr = new XMLHttpRequest();
        xhr.open("GET","searchRoom.php?key="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                get("room_suggesstion").innerHTML= this.responseText;
            }
        };
        xhr.send();
	}