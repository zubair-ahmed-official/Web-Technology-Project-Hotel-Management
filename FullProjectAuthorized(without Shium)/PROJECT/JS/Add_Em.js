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
			
			if(get("Phone").value==""){
				hasError = true;
				get("err_Phone").innerHTML = "*PhoneNo Req";
			}
			
			if(get("NID").value==""){
				hasError = true;
				get("err_NID").innerHTML = "*NID Req";
			}
			
			if(get("Address").value==""){
				hasError = true;
				get("err_Address").innerHTML = "*Address Req";
			}
			
			if(!get("Male").checked && !get("Female").checked){
				hasError = true;
				get("err_Gender").innerHTML = "*Gender Req";
			}
			if(get("Age").selectedIndex == 0){
				hasError = true;
				get("err_Age").innerHTML = "*Age Req";
			}
			if(get("EB").value==""){
				hasError = true;
				get("err_EB").innerHTML = "*Educational Background Req";
			}
			if(get("ET").selectedIndex == 0){
				hasError = true;
				get("err_ET").innerHTML = "*Employee type Req";
			}
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_Name").innerHTML ="";
			get("err_Email").innerHTML ="";
			get("err_Phone").innerHTML ="";
			get("err_NID").innerHTML ="";
			get("err_Address").innerHTML ="";
			get("err_Gender").innerHTML ="";
			get("err_Age").innerHTML ="";
			get("err_EB").innerHTML ="";
			get("err_ET").innerHTML ="";
			
		}