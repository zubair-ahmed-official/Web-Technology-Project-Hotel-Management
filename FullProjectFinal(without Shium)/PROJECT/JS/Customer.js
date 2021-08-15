	//var hasError=false;
	function get(id)
	{
		return document.getElementById(id);
	}

	function validateGender()
	{
		var gn= document.querySelector('input[name="gender"]:checked');
		if(gn == null){
			return false;
		}
		return true;
	}
	function validateGenderEdit()
	{
		var gn= document.querySelector('input[name="gender"]:checked');
		if(gn == null){
			return false;
		}
		return true;
	}
	function validateGenderEditOwn()
	{
		var gn= document.querySelector('input[name="gender"]:checked');
		if(gn == null){
			return false;
		}
		return true;
	}
	/*function loadAllRooms()
	{
		var xhr = new XMLHttpRequest();
        xhr.open("GET","AllRooms.php",true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                get("searchR").innerHTML = this.responseText;
            }
        };
        xhr.send();
	}
	function loadDeleteProfile()
	{
		var xhr = new XMLHttpRequest();
        xhr.open("GET","DeleteCustomerProfile.php",true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                get("deleteProfile").innerHTML = this.responseText;
            }
        };
        xhr.send();
	}*/
	function checkUserName(e)
	{
		var xhr = new XMLHttpRequest();
        xhr.open("GET","CheckUserName.php?userName="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText.trim()== "Invalid")
				{
					get("err_uName").innerHTML= "<span style='color: red;'>  Username Exists js.</span>";
				}
				else
				{
					get("err_uName").innerHTML= "";
				}
            }
        };
        xhr.send();
	}
	function checkUserNameEdit(e)
	{
		var xhr = new XMLHttpRequest();
        xhr.open("GET","CheckUserName.php?userName="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText.trim()== "Invalid")
				{
					get("err_euName").innerHTML= "<span style='color: red;'>  Username Exists js.</span>";
				}
				else
				{
					get("err_euName").innerHTML= "";
				}
            }
        };
        xhr.send();
	}
	function checkUserNameEditOwn(e)
	{
		var xhr = new XMLHttpRequest();
        xhr.open("GET","CheckUserName.php?userName="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText.trim()== "Invalid")
				{
					get("err_euNameo").innerHTML= "<span style='color: red;'>  Username Exists js.</span>";
				}
				else
				{
					get("err_euNameo").innerHTML= "";
				}
            }
        };
        xhr.send();
	}
	function searchCustomer(e)
	{
		
		var xhr = new XMLHttpRequest();
        xhr.open("GET","searchCustomer.php?key="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                get("table").innerHTML= this.responseText;
            }
        };
        xhr.send();
	}
	function validateCustomer()
	{
		//alert("OK");
		refresh();
		
		if(get("name").value == "")
		{
		hasError = true;
		get("err_name").innerHTML = "<span style='color: red;'>  Customer Name required js.</span>";
		}
		else if(get("name").value.length <= 2)
		{
		hasError = true;
		get("err_name").innerHTML = "<span style='color: red;'>  CustomerName must be greater than 2 characters js.</span>";
		}
		
		if(get("uName").value == "")
		{
		hasError = true;
		get("err_uName").innerHTML = "<span style='color: red;'> user name required js.</span>";
		}
		else if(get("uName").value.length <= 2)
		{
		hasError = true;
		get("err_uName").innerHTML = "<span style='color: red;'>  UserName must be greater than 2 characters js.</span>";
		}
		
		if(get("pass").value == "")
		{
		hasError = true;
		get("err_pass").innerHTML = "<span style='color: red;'> Password required.</span>";
		}
		else if(get("pass").value.length < 8)
		{
		hasError = true;
		get("err_pass").innerHTML = "<span style='color: red;'>  password must be greater than 8 characters js.</span>";
		}

		if(get("ConfirmPass").value == "")
		{
		hasError = true;
		get("err_ConfirmPass").innerHTML = "<span style='color: red;'>  ConfirmPassword required.</span>";
		}
		else if(get("ConfirmPass").value.length < 8)
		{
		hasError = true;
		get("err_ConfirmPass").innerHTML = "<span style='color: red;'> ConfirmPassword password must be greater than 8 characters js.</span>";
		}
		if(get("email").value == "")
		{
		hasError = true;
		get("err_email").innerHTML = "<span style='color: red;'>  Email required.</span>";
		}
		
		if(get("ph").value == "")
		{
		hasError = true;
		get("err_ph").innerHTML = "<span style='color: red;'> Phone Number required.</span>";
		}
		
		if(get("address").value == "")
		{
		hasError = true;
		get("err_address").innerHTML = "<span style='color: red;'> Address required.</span>";
		}
		if(!validateGender())
		{
		hasError = true;
		get("err_gender").innerHTML = "<span style='color: red;'>  Gender required js.</span>";
		}

		/*if(!get("mGender").checked && !get("fGender").checked)
		{
		hasError = true;
		get("err_gender").innerHTML = "<span style='color: red;'>  Gender required js.</span>";
		}*/
		if(get("nid").value == "")
		{
		hasError = true;
		get("err_nid").innerHTML = "<span style='color: red;'>  NID No required.</span>";
		}
		if(get("cAge").selectedIndex == 0)
		{
		hasError = true;
		get("err_cAge").innerHTML = "<span style='color: red;'>  Age required js.</span>";
		}
		return !hasError;
	}
	function validateCustomerEdit()
	{
		refreshEdit();
		
		if(get("cid").value == "")
		{
		hasError = true;
		get("err_cid").innerHTML = "<span style='color: red;'>  Customer Id required js.</span>";
		}
		if(get("eName").value == "")
		{
		hasError = true;
		get("err_eName").innerHTML = "<span style='color: red;'>  Name required js.</span>";
		}
		else if(get("eName").value.length <= 2)
		{
		hasError = true;
		get("err_eName").innerHTML = "<span style='color: red;'>  CustomerName must be greater than 2 characters js.</span>";
		}
		
		if(get("euName").value == "")
		{
		hasError = true;
		get("err_euName").innerHTML = "<span style='color: red;'> user name required js.</span>";
		}
		else if(get("euName").value.length <= 2)
		{
		hasError = true;
		get("err_euName").innerHTML = "<span style='color: red;'>  UserName must be greater than 2 characters js.</span>";
		}
		
		if(get("eemail").value == "")
		{
		hasError = true;
		get("err_eemail").innerHTML = "<span style='color: red;'>  Email required.</span>";
		}
		
		if(get("ePh").value == "")
		{
		hasError = true;
		get("err_ePh").innerHTML = "<span style='color: red;'> Phone Number required.</span>";
		}
		
		if(get("eAddress").value == "")
		{
		hasError = true;
		get("err_eAddress").innerHTML = "<span style='color: red;'> Address required.</span>";
		}
		if(!validateGenderEdit())
		{
		hasError = true;
		get("err_egender").innerHTML = "<span style='color: red;'>  Gender required js.</span>";
		}
		if(get("enid").value == "")
		{
		hasError = true;
		get("err_enid").innerHTML = "<span style='color: red;'>  NID No required.</span>";
		}
		if(get("ecAge").selectedIndex == 0)
		{
		hasError = true;
		get("err_ecAge").innerHTML = "<span style='color: red;'>  Age required js.</span>";
		}
		return !hasError;
	}
	function validateCustomerEditByOwn()
	{
		refreshEditOwn();
		
		if(get("cido").value == "")
		{
		hasError = true;
		get("err_cido").innerHTML = "<span style='color: red;'>  Customer Id required js.</span>";
		}
		if(get("eNameo").value == "")
		{
		hasError = true;
		get("err_eNameo").innerHTML = "<span style='color: red;'>  Name required js.</span>";
		}
		else if(get("eNameo").value.length <= 2)
		{
		hasError = true;
		get("err_eNameo").innerHTML = "<span style='color: red;'>  CustomerName must be greater than 2 characters js.</span>";
		}
		
		if(get("euNameo").value == "")
		{
		hasError = true;
		get("err_euNameo").innerHTML = "<span style='color: red;'> user name required js.</span>";
		}
		else if(get("euNameo").value.length <= 2)
		{
		hasError = true;
		get("err_euNameo").innerHTML = "<span style='color: red;'>  UserName must be greater than 2 characters js.</span>";
		}
		
		if(get("eemailo").value == "")
		{
		hasError = true;
		get("err_eemailo").innerHTML = "<span style='color: red;'>  Email required.</span>";
		}
		
		if(get("ePho").value == "")
		{
		hasError = true;
		get("err_ePho").innerHTML = "<span style='color: red;'> Phone Number required.</span>";
		}
		
		if(get("eAddresso").value == "")
		{
		hasError = true;
		get("err_eAddresso").innerHTML = "<span style='color: red;'> Address required.</span>";
		}
		if(!validateGenderEditOwn())
		{
		hasError = true;
		get("err_egendero").innerHTML = "<span style='color: red;'>  Gender required js.</span>";
		}
		if(get("enido").value == "")
		{
		hasError = true;
		get("err_enido").innerHTML = "<span style='color: red;'>  NID No required.</span>";
		}
		if(get("ecAgeo").selectedIndex == 0)
		{
		hasError = true;
		get("err_ecAgeo").innerHTML = "<span style='color: red;'>  Age required js.</span>";
		}
		return !hasError;
	}
	function validateCustomerDelete()
	{
		refreshDelete();
		
		if(get("demail").value == "")
		{
		hasError = true;
		get("err_demail").innerHTML = "<span style='color: red;'>  Email required.</span>";
		}
		if(get("dpass").value == "")
		{
		hasError = true;
		get("err_dpass").innerHTML = "<span style='color: red;'> Password required.</span>";
		}
		else if(get("dpass").value.length < 8)
		{
		hasError = true;
		get("err_dpass").innerHTML = "<span style='color: red;'>  password must be greater than 8 characters js.</span>";
		}

		return !hasError;
	}
	
	function refresh()
	{
		hasError = false;
		
		get("err_name").innerHTML = "";
		get("err_uName").innerHTML = "";
		get("err_pass").innerHTML = "";
		get("err_ConfirmPass").innerHTML = "";
		get("err_email").innerHTML = "";
		get("err_ph").innerHTML = "";
		get("err_address").innerHTML = "";
		get("err_gender").innerHTML = "";
		get("err_nid").innerHTML = "";
		get("err_cAge").innerHTML = "";
	}
	function refreshEdit()
	{
		hasError = false;
		
		get("err_cid").innerHTML = "";
		get("err_eName").innerHTML = "";
		get("err_euName").innerHTML = "";
		get("err_eemail").innerHTML = "";
		get("err_ePh").innerHTML = "";
		get("err_eAddress").innerHTML = "";
		get("err_egender").innerHTML = "";
		get("err_enid").innerHTML = "";
		get("err_ecAge").innerHTML = "";
	}
	function refreshDelete()
	{
		hasError = false;
		
		get("err_demail").innerHTML = "";
		get("err_dpass").innerHTML = "";
	}
	function refreshEditOwn()
	{
		hasError = false;
		
		get("err_cido").innerHTML = "";
		get("err_eNameo").innerHTML = "";
		get("err_euNameo").innerHTML = "";
		get("err_eemailo").innerHTML = "";
		get("err_ePho").innerHTML = "";
		get("err_eAddresso").innerHTML = "";
		get("err_egendero").innerHTML = "";
		get("err_enido").innerHTML = "";
		get("err_ecAgeo").innerHTML = "";
	}