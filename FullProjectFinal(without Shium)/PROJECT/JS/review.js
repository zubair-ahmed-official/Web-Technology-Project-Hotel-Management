var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("Name").value == ""){
				hasError = true;
				get("err_Name").innerHTML = "*Name Req";
			}
	
			if(get("Email").value==""){
				hasError = true;
				get("err_Email").innerHTML = "*Email Req";
			}
			
			if(get("Subject").value==""){
				hasError = true;
				get("err_Subject").innerHTML = "*Subject Req";
			}
			
			if(get("Message").value==""){
				hasError = true;
				get("err_Message").innerHTML = "*Message Req";
			}
			
			if(get("Rating").value==""){
				hasError = true;
				get("err_Rating").innerHTML = "*Rating Req";
			}
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_Name").innerHTML ="";
			get("err_Email").innerHTML ="";
			get("err_Subject").innerHTML ="";
			get("err_Message").innerHTML ="";
			get("err_Rating").innerHTML ="";
		}