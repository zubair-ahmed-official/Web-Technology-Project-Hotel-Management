function get(id)
{
	return document.getElementById(id);
}
function searchApprovedRoom(e)
{
	var xhr = new XMLHttpRequest();
    xhr.open("GET","searchApprovedRoom.php?key="+e.value,true);
    xhr.onreadystatechange=function(){
        if(this.readyState == 4 && this.status == 200){
            get("suggetion_ApprovedRoom").innerHTML= this.responseText;
        }
    };
        xhr.send();
}