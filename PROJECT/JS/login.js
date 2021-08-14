var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("uname").value == ""){
				hasError = true;
				get("err_uname").innerHTML = "*UserName Req";
			}
	
			if(get("pass").value==""){
				hasError = true;
				get("err_pass").innerHTML = "*Password Req";
			}
			
			/*else if(get("pass").value.length<4){
				hasError = true;
				get("err_pass").innerHTML = "*Password must be greater than 4 character";
			}*/
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
		}