var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		function validate(){
			refresh();
			if(get("RoomNo").value == ""){
				hasError = true;
				get("err_RoomNo").innerHTML = "*RoomNo Req";
			}
	
			if(get("Branch").selectedIndex == 0){
				hasError = true;
				get("err_Branch").innerHTML = "*Branch Req";
			}
			
			if(get("NID").value==""){
				hasError = true;
				get("err_NID").innerHTML = "*NID Req";
			}
			
			if(get("Address").value==""){
				hasError = true;
				get("err_Address").innerHTML = "*Address Req";
			}
			
			if(get("Email").value==""){
				hasError = true;
				get("err_Email").innerHTML = "*Email Req";
			}
			
			if(get("Phone").value==""){
				hasError = true;
				get("err_Phone").innerHTML = "*Phone Req";
			}
			if(get("CIT").value==""){
				hasError = true;
				get("err_CIT").innerHTML = "*Check in time Req";
			}
			if(get("COT").value==""){
				hasError = true;
				get("err_COT").innerHTML = "*Check out time Req";
			}
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_RoomNo").innerHTML ="";
			get("err_Branch").innerHTML ="";
			get("err_NID").innerHTML ="";
			get("err_Address").innerHTML ="";
			get("err_Email").innerHTML ="";
			get("err_Phone").innerHTML ="";
			get("err_CIT").innerHTML ="";
			get("err_COT").innerHTML ="";
			
			
		}