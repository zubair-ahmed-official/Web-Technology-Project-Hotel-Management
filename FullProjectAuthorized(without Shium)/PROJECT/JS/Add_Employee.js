function get(id){
	return document.getElementById(id);
}
function checkName(e){
	var xhr = new XMLHttpRequest();
		xhr.open("GET","check_name.php?Name="+e.value,true);
		xhr.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				if(this.responseText.trim() == "invalid"){
					get("err_Name").innerHTML = "Name Exists";
				}
				else{
					get("err_Name").innerHTML = "";
				}
			}
		};
		xhr.send();
}